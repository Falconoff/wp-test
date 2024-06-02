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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{s:tk:dJN)W(*otHJ#XI)N+-{c[.yLw:ZSQ#h1YE83~FeJ=um^>iennDOAiAsmKe' );
define( 'SECURE_AUTH_KEY',   'D=Rp9u-&pL5=UsBz7jia0MZ`XSNYj_ti&D,P0eK!i<]uulT;WyEM1{,W}U`DZ|O,' );
define( 'LOGGED_IN_KEY',     'w6@2g${6X75,{yKN93nV=SnWu%$8SXk)D$x8%I+ `S#V[@.GD~2!8g~u(k[mhkv)' );
define( 'NONCE_KEY',         '6(:F_EWqXug?PQjY;Ywvv?A.Wg_r?Ap}wb)mo}>kG(~I1<9bV?B2qT*3goiZ+sj3' );
define( 'AUTH_SALT',         'U#+eS~[r8AxN~SXGwat$l/Oq1]zJ} sc4 !oO@1KczQa#DwA/eff!z=3,6&Mmo G' );
define( 'SECURE_AUTH_SALT',  '&gJd5x5&`&t#vG!_2wf%ohI],.YG^7Hl55zp0ZJI>XER?G7j~Q<A4m3{&xs2tB$B' );
define( 'LOGGED_IN_SALT',    'S^o`Tt:YYu ;P#-C}{& 4;16E.$dU+|t5_*`[o%C]-tjFGFi2Q7mKD^Flz&[_3wy' );
define( 'NONCE_SALT',        ';mZ0I)u-]Uw~)ABld%8=+Z%dIw^zgh&TVO6,v?nY8-m`LW{E@UHW*;HBli&Q2P3L' );
define( 'WP_CACHE_KEY_SALT', 'UIzk_.0Q=zI&bxhr1R9-/2w([%&9Vo@Zxg),vb}JwQ*3$JkYnf4;k~p{)8pKX5]z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
