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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lost' );

/** MySQL database username */
define( 'DB_USER', 'kuddus' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-aa(Fa^8vKN8ebhi[D`(Oc%HioOxQ_lw7r?@?jF_R,Q~BCSS:{Kl<+1{~Nx:F;k^' );
define( 'SECURE_AUTH_KEY',  '!Us**MykuPz,R(#8(Wa::i3lw<c{S&jCBK(Ytc2ut%D!A+mj&1VDjyTKwA>Hg;kZ' );
define( 'LOGGED_IN_KEY',    ']u@3:iE+% 7k9M,=Jt0omB,-!{>m9nwR/:BSV_y#8+M1;8.)cV{tuoN9k2;ifgx:' );
define( 'NONCE_KEY',        '_>IlQx{%]&,e58sz NUFQI/];s-A&RdoB02hs&,!#gbctT^~)i/^fVlO3]:vxdtn' );
define( 'AUTH_SALT',        '<kOBtif:E[jER$a+4*gf?-gYkOoM3ZdouKN[vh[[msd2ccO{@xIGNTn)`F^4ym8E' );
define( 'SECURE_AUTH_SALT', '>E3s}x<]?c&V3FQ[YJQBRB^?_VUgAsl]-p79MW:_AK7_tv3ox*<2IEPuO6eUwLPv' );
define( 'LOGGED_IN_SALT',   '_sd,2c//k++:L642Tw-2CKZ9`-BZ|y15v83tEUPOxPGSCO;(k/zP%lgfznyf:MLF' );
define( 'NONCE_SALT',       '8kW^XU ]u2=:#O@Q|@Va4s0KVbk5<3oi(KQIJ6jrU0T]jqsx,3u;6GIB>q[zMYIy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wmp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
