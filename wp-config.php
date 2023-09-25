<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'asdasd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n1!h7YlQNq8,!wJ*3mYi|cTiylfpKZT&*K!L_p]*7y$(JxTzL:nS*U:G]X9+1QHP' );
define( 'SECURE_AUTH_KEY',  'Ts5R,qNT?PV#z&bbo-F%f%1*+L*q3Z^V@SA}L]sjg}{g!;UmR=BH]#AFP},Xu+cG' );
define( 'LOGGED_IN_KEY',    'm}d5-V7Ux2y=Oix4?Ka-%PP/4id>kS}6[q_.9hX0D[w+irx{$sp.v=YYpkP#%G@+' );
define( 'NONCE_KEY',        'byrU<&+ox5>umxm-${yL5@5}tO,g5&sQL, kuFE/itEIh?=O7{Ryn>8.eV|IUKFz' );
define( 'AUTH_SALT',        '#5ufTAT++X~54&OsR74=-Z{7`N_9RGC0RHhku2%#o0Wo~m0-:GzBlh>a!0}&}]S0' );
define( 'SECURE_AUTH_SALT', '3Nek}4l!|cbZhcD5vY>~_Q67!5U6O.oM{liT>k?Mr/?-&-*x:uppu|(NO@WZ(KlP' );
define( 'LOGGED_IN_SALT',   '<xq+-gxm3W{ZpDeyOq?&#oCv}8$[/O0tAb*Z(,NI0xrO16;*VHozX=ue+8AlAr,P' );
define( 'NONCE_SALT',       '#4h%p##b3 @G=|bU6!S+7YXo?$#o5MRgXo&8{Tt[g@u()?i{L?yT!`X!KE!($e91' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
