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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'starter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'W}NZG+bldyC!lW(]j7]Hh+x8O&0Rn/P-e0kBw,{/5GrTs](*{i{ZjKw2]v/$B+,l');
define('SECURE_AUTH_KEY',  '6n<6`;TeXDyb&uOMrw|R_@z5o?JD]9)>_kK&+lOU+(N(/L+$ARFO&C;D[;8+ttd;');
define('LOGGED_IN_KEY',    'x4lJ`PWz-iM,La^PR^PBG8>_2`#$.#0H<+1dbTM}6+k(e3b+f9}|DVykt7Or+q?F');
define('NONCE_KEY',        'rfki=Pepo-&lZXm-:sAom]#z8J7rfn|%v:5GW y|YA+L+,C+*O,0B|G94Z+jJ67{');
define('AUTH_SALT',        '&Yn~cdU:`sPy|}3T-.pJyEtYvB>c9xftJc|w1zLMB)idETzR^o*1|X(-a@$v6OrD');
define('SECURE_AUTH_SALT', 's?+f<bntNVd={|efd.WHqb@r=XT~K+aq-CD~r+P2Ad}#qn~6{< 1.9|YP+&+KL{+');
define('LOGGED_IN_SALT',   'X,= $J=?<1d9JZc``mg}nU7vOep`8:~z7%9p{)XjoBGCZ[Va~yl8h*t3!!s)d-[@');
define('NONCE_SALT',       't$hmpo^hYT2dm$mip:1qVQh8N:b-9r)u+Lij|?/Q?uLTp+$&|efd71PpyV-s[!,|');
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'stt_';

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
