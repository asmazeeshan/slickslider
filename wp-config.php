<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'slickslider_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B<{G7eDxD[>v??2?ZxR9Wjb<qY#2</+#Akx;z1 BFA&sDIfBQXt a][!=K^{mrS&' );
define( 'SECURE_AUTH_KEY',  '5*%1OEo;u]&L1H4aY!tsGPRg-UjsmkGqRO}F=y#40/MQPMCbSV@#HPc7-*cr?ngK' );
define( 'LOGGED_IN_KEY',    'MdZ.V2HudnNQNZ$QVJsuoaZ tmgCJ5wK2]t)<zs!zk5l&hHTgD%Fy$O*9z ;qH,~' );
define( 'NONCE_KEY',        'DdDL|F!M+v1:k9Loikz`Ed#^@|S_Fd$+6IaCGI1dYS0pG(`Y<L|oh[;|S(XH>jDo' );
define( 'AUTH_SALT',        '-U9Vn::Q[;@#@-g/&a)xn@dBPK*f]E$s5Nqj9KI)6C}(@9HoZ5Zib$VBr1bx#b#{' );
define( 'SECURE_AUTH_SALT', ':uUlD:;4C(~MfR^pB{bB}CdFbXZsj@kKm|(C<#)Tq.Ur@d=miJhw@so5Td %u>3%' );
define( 'LOGGED_IN_SALT',   '~{#UqW,|SMqM?I!e3^~WFH34/@4ka[0T-Y}:;1I]f-m-B02RA2mtLjy`M2k||dRF' );
define( 'NONCE_SALT',       '(9@ +._U?cX]@;LeJI-ib`GYoJ9}gw~],^U~x`tzkd!kI5CJQZ-8VRgsUafQiY:&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
