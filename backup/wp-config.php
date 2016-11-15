<?php if (!in_array($_SERVER["REMOTE_ADDR"], array("115.72.80.142")) && file_exists('/home/thaina94mo/public_html/wp-content/plugins/gotmls/safe-load/wp-login.php')) require_once('/home/thaina94mo/public_html/wp-content/plugins/gotmls/safe-load/wp-login.php'); // Load Brute-Force Protection by GOTMLS.NET before the WordPress bootstrap. ?><?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tnv2016_data');

/** MySQL database username */
define('DB_USER', 'tnv2016_data');

/** MySQL database password */
define('DB_PASSWORD', 'tnv2016@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';)+vKoXIWR LxUt=3c,~Ru?PXMET!ZEa<a>n6M|v6.j0^BT|!YmYvO|B-pU!79Qb');
define('SECURE_AUTH_KEY',  'qaI?/&$e+e0g?Bjw>cGty(q,a`~9T}mdG):}TP%hlDe{HyjTb*2dq#gIif%?)?s^');
define('LOGGED_IN_KEY',    'HaT:tTIX~5r |wCnWE`g5t!=2U;Fql$aHICUl|~IyGtj|Uy10#5~W/r/#X QZYRD');
define('NONCE_KEY',        'k&]nO3LP*k2Ukw+$ 0bu6bk*(pEA;bo4KR$?>69N%y%l.# w%whleXWhz]1;F(}Q');
define('AUTH_SALT',        'M=Y4zBPbz!,v.,]_|uCR!lX}V36-!-z2&r,F*9Wmsu/AQ+QgO/D24)t*][i,V.s|');
define('SECURE_AUTH_SALT', 'NA/1,%+O6=*-pM|3^/VRZ3Z[6Aq+vD2Eo&cnqG~jvCIc,^ugKu]PS$]95qv[IhwU');
define('LOGGED_IN_SALT',   'l<fd-XbgkBaMETx~.D--yO|V=q$(*UOi)(b`I[p`H-|P*(*Ooetn>VNqWImm]5*0');
define('NONCE_SALT',       'J-!,?BSTfOhuKic K5-Eu)s 4kN5V_7%t!{P7*o9#=EOYu|uxfT-g[$}i,E,s$o&');
define('WP_HOME','http://thainamviet.com/');
define('WP_SITEURL','http://thainamviet.com/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
