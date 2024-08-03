<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_data' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', '11111111' );

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
define( 'AUTH_KEY',         'i~(0yFoS Q??)&V82LaS+0YZax)o`TRSH`%yP0?yzhv=^d`00O,jZq;]zD#F^yN#' );
define( 'SECURE_AUTH_KEY',  'Vf0Ua^6y8gZxF+1{^So{~<eF;6-*#rPT9&2PhIg0L#Ab>]C$~gWb5JGFO0j{Z9Wh' );
define( 'LOGGED_IN_KEY',    '}E&d<cg}`XTX7Kv1RYl7x:PZo<?gqCM7A~k(4R1PX-Kb~p!/o5B!wqn]9{txTj~`' );
define( 'NONCE_KEY',        '>]^lkcM015,B#` e1 r6:|@!I_IHv1vJSK+eUjGKc|)rq0WABMzd/Z]ZDfr]<sTL' );
define( 'AUTH_SALT',        'CUxASFh42{Lk *^U3iXfAj5RkSE7NHW-`8!;er%_9J:UVY~a5c>&ps2]jS1SZE#q' );
define( 'SECURE_AUTH_SALT', '#4y;uzXn^E38:9yhg<M?`;,cQlFHz@Rbz_T:obBn,w5A9V.hq*p^4z}JHdPrUx5I' );
define( 'LOGGED_IN_SALT',   '1_{z34V%?l:VaGHP_T+RFvQHK]XKVr#Z}([2}4^wb@q6<_hX?wgzSY CYuR{H<$f' );
define( 'NONCE_SALT',       'DD})A)1^<D-@0Fj||n,FTP%Qf$&y<4x=75/.s&h]EA^7Gh~-`??^itwV))e[z-W9' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
