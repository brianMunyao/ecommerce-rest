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
define('DB_NAME', 'ecommerce-rest');

/** Database username */
define('DB_USER', 'admin');

/** Database password */
define('DB_PASSWORD', 'admin');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'pF6+SpmwfS._j-[!Y+m=yzb7Z!io8(V?.~<W7gy>?[l)wte;X[Kz-_q!?ijiHejv');
define('SECURE_AUTH_KEY',  ':/;[9?84v7:o?><F`@R?f-a9A$J^8p2pb;9{S62lTQuXcI3rYnbERQLD$i0[Z@Tb');
define('LOGGED_IN_KEY',    '%~Ix3Uj>|pZRzz.9Y$*lx%sS# lf  t|?{YO&xo+I13|c`%=pE#W$*p]4+R,r~_L');
define('NONCE_KEY',        'aIvcz:bzoS7sE<C/~DZ#c(8kJ9Y.6.r92fMPW%iol/-4kWCJ`NGxcEE02txd(#zi');
define('AUTH_SALT',        '.!P^Qpdbkz{_mw*L9)p3,T_E/%l0#S=H-`X7(?:MCR;AQ=LP-P~VzQ~dnJ8Wn#v[');
define('SECURE_AUTH_SALT', 'Pn)+vjWff~ MGw$l8$awaVnYpkg $]@lDT6M>*6n[jL!/UJ+D$2~]s@),r#u7EOP');
define('LOGGED_IN_SALT',   '@)`2_i)s*oS5jP)!}VZ(meR*Tz|cP-n/ifQoP,$G:^mYOEt.w4p>)axE}m:&mXu=');
define('NONCE_SALT',       ']w7nS-+[X=I^A{4kws_#^QID(y~|*g3{Fy j:fW27IUpo]-a-1NFc7tCPj]aQ 6n');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */


define('JWT_AUTH_SECRET_KEY', 'brianskey');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
