<?php

blc_call_fn(['fn' => 'blocksy_output_font_css'], [
	'font_value' => get_theme_mod( 'trendingBlockHeadingFont',
		blocksy_typography_default_values([
			'size' => '15px',
		])
	),
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.ct-trending-block .ct-block-title',
]);

blc_call_fn(['fn' => 'blocksy_output_colors'], [
	'value' => get_theme_mod('trendingBlockHeadingFontColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'variables' => [
		'default' => [
			'selector' => '.ct-trending-block .ct-block-title',
			'variable' => 'heading-color'
		],
	],
	'responsive' => true,
]);


blc_call_fn(['fn' => 'blocksy_output_font_css'], [
	'font_value' => get_theme_mod( 'trendingBlockPostsFont',
		blocksy_typography_default_values([
			'size' => '15px',
			'variation' => 'n5',
		])
	),
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'selector' => '.ct-trending-block .ct-item-title',
]);

blc_call_fn(['fn' => 'blocksy_output_colors'], [
	'value' => get_theme_mod('trendingBlockFontColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'variables' => [
		'default' => [
			'selector' => '.ct-trending-block a',
			'variable' => 'color'
		],

		'hover' => [
			'selector' => '.ct-trending-block a',
			'variable' => 'linkHoverColor'
		],
	],
	'responsive' => true,
]);

blc_call_fn(['fn' => 'blocksy_output_colors'], [
	'value' => get_theme_mod('trendingBlockArrowsColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'hover' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'variables' => [
		'default' => [
			'selector' => '.ct-trending-block [class*="ct-arrow"]',
			'variable' => 'color'
		],

		'hover' => [
			'selector' => '.ct-trending-block [class*="ct-arrow"]',
			'variable' => 'linkHoverColor'
		],
	],
	'responsive' => true,
]);

blc_call_fn(['fn' => 'blocksy_output_background_css'], [
	'selector' => '.ct-trending-block',
	'css' => $css,
	'tablet_css' => $tablet_css,
	'mobile_css' => $mobile_css,
	'value' => get_theme_mod(
		'trending_block_background',
		blc_call_fn([
			'fn' => 'blocksy_background_default_value',
			'default' => null
		], [
			'backgroundColor' => [
				'default' => [
					'color' => 'var(--paletteColor5)'
				],
			],
		])
	),
	'responsive' => true,
]);

$container_inner_spacing = get_theme_mod( 'trendingBlockContainerSpacing', '30px' );

if ($container_inner_spacing !== '30px') {
	blc_call_fn(['fn' => 'blocksy_output_responsive'], [
		'css' => $css,
		'tablet_css' => $tablet_css,
		'mobile_css' => $mobile_css,
		'selector' => ".ct-trending-block",
		'variableName' => 'padding',
		'value' => $container_inner_spacing,
		'unit' => ''
	]);
}