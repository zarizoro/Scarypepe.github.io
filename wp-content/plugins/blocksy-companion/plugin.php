<?php

namespace Blocksy;

class Plugin {
	/**
	 * Blocksy instance.
	 *
	 * Holds the blocksy plugin instance.
	 *
	 * @var Plugin
	 */
	private static $instance = null;

	/**
	 * Blocksy extensions manager.
	 *
	 * @var ExtensionsManager
	 */
	public $extensions = null;
	public $extensions_api = null;
	public $premium = null;

	public $dashboard = null;
	public $theme_integration = null;

	public $cli = null;
	public $cache_manager = null;

	// Features
	public $feat_google_analytics = null;
	public $demo = null;
	public $dynamic_css = null;
	public $header = null;
	public $account_auth = null;

	private $is_blocksy = '__NOT_SET__';
	public $is_blocksy_data = null;
	private $desired_blocksy_version = '1.8.80';

	/**
	 * Instance.
	 *
	 * Ensures only one instance of the plugin class is loaded or can be loaded.
	 *
	 * @static
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function init() {
		add_action('widgets_init', [
			'BlocksyWidgetFactory',
			'register_all_widgets',
		]);

		add_action('admin_enqueue_scripts', function () {
			$locale_data_ct = blc_call_fn(
				[
					'fn' => 'blocksy_get_jed_locale_data',
					'default' => []
				],
				'blocksy-companion'
			);

			wp_add_inline_script(
				'wp-i18n',
				'wp.i18n.setLocaleData( ' . wp_json_encode($locale_data_ct) . ', "blocksy-companion" );'
			);
		});

		$this->cache_manager = new CacheResetManager();

		$this->extensions_api = new ExtensionsManagerApi();
		$this->theme_integration = new ThemeIntegration();
		$this->demo = new DemoInstall();
		$this->dynamic_css = new DynamicCss();

		$this->account_auth = new AccountAuth();

		new CustomizerOptionsManager();
	}

	/**
	 * Init components that need early access to the system.
	 *
	 * @access private
	 */
	public function early_init() {
		$this->dashboard = new Dashboard();

		add_action(
			'admin_enqueue_scripts',
			function () {
				if (!function_exists('get_plugin_data')) {
					require_once(ABSPATH . 'wp-admin/includes/plugin.php');
				}

				$data = get_plugin_data(BLOCKSY__FILE__);

				wp_enqueue_style(
					'blocksy-styles',
					BLOCKSY_URL . 'static/bundle/options.min.css',
					[],
					$data['Version']
				);
			},
			50
		);
	}

	/**
	 * Init components that need early access to the system.
	 *
	 * @access private
	 */
	public function early_init_with_blocksy_theme() {
		if (
			function_exists('blc_fs')
			&&
			blc_fs()->can_use_premium_code()
			&&
			class_exists('Blocksy\Premium')
		) {
			$this->premium = new Premium();
		}

		$this->extensions = new ExtensionsManager();

		$this->header = new HeaderAdditions();

		$this->feat_google_analytics = new GoogleAnalytics();
		new OpenGraphMetaData();

		if (defined('WP_CLI') && WP_CLI) {
			$this->cli = new Cli();
		}
	}

	/**
	 * Register autoloader.
	 *
	 * Blocksy autoloader loads all the classes needed to run the plugin.
	 *
	 * @access private
	 */
	private function register_autoloader() {
		require BLOCKSY_PATH . '/framework/autoload.php';

		Autoloader::run();
	}

	/**
	 * Plugin constructor.
	 *
	 * Initializing Blocksy plugin.
	 *
	 * @access private
	 */
	private function __construct() {
		require BLOCKSY_PATH . '/framework/helpers/blocksy-integration.php';
		require BLOCKSY_PATH . '/framework/helpers/helpers.php';

		$this->register_autoloader();
		$this->early_init();

		if (! $this->check_if_blocksy_is_activated()) {
			return;
		}

		$this->early_init_with_blocksy_theme();

		add_action('init', [$this, 'init'], 0);
	}

	public function check_if_blocksy_is_activated() {
		if ($this->is_blocksy === '__NOT_SET__') {
			$theme = wp_get_theme(get_template());


			$is_correct_theme = strpos(
				$theme->get('Name'), 'Blocksy'
			) !== false;

			$is_correct_version = version_compare(
				$theme->get('Version'),
				$this->desired_blocksy_version
			) > -1;

			$another_theme_in_preview = false;

			$maybe_foreign_theme = '';

			if (
				isset($_REQUEST['customize_theme'])
				&&
				! empty($_REQUEST['customize_theme'])
			) {
				$maybe_foreign_theme = $_REQUEST['customize_theme'];
			}

			if (
				isset($_REQUEST['theme'])
				&&
				! empty($_REQUEST['theme'])
			) {
				$maybe_foreign_theme = $_REQUEST['theme'];
			}

			if ($is_correct_theme && $maybe_foreign_theme) {
				$foreign_theme_obj = wp_get_theme($maybe_foreign_theme);

				if ($foreign_theme_obj) {
					if ($foreign_theme_obj->parent()) {
						$foreign_theme_obj = $foreign_theme_obj->parent();
					}

					if (
						$foreign_theme_obj->get_stylesheet() !== $theme->get_stylesheet()
					) {
						$another_theme_in_preview = true;
					}
				}
			}

			$this->is_blocksy_data = [
				'is_correct_theme' => (
					$is_correct_theme
					&&
					! $another_theme_in_preview
				),
				'another_theme_in_preview' => $another_theme_in_preview
			];

			$this->is_blocksy = (
				$is_correct_theme
				&&
				$is_correct_version
				&&
				! $another_theme_in_preview
			);
		}

		return !!$this->is_blocksy;
	}
}

Plugin::instance();

