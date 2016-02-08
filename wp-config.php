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
define('DB_NAME', 'goldenrollers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Tt7#JDKNp*@_O)?^mS<,L7{^E icML|XcP(+64RH|@GTZZvs7:U^&`+osO<h=E: ');
define('SECURE_AUTH_KEY',  'hB(++)T5W)Wjf^sSlu}Zka~7 |hiM6Ze0w<DtB`GG|_|r+;N,Rajs>qT/*{Ymb1%');
define('LOGGED_IN_KEY',    '!ZC_^+)8/kqub ni#n|h:r(jxpI#Tts7{@E|}nm+I2ON/7/7xUQ}H@2O?nbw%|d9');
define('NONCE_KEY',        'HQUbH%$dQ76]~7J7txjv3iAT<u(9F |oV.kYu1je-Pw{,P33^UUkWbYS8+E:<MBW');
define('AUTH_SALT',        '*rP+j)Yt:-8~SQ_aAS|H^>cD9j)]ihmeYFGy+!|{-1QCuGQvCr:Ya|AMzGF}E0.M');
define('SECURE_AUTH_SALT', '}/#VkeMgEph?e#a4-UW Uj{,:8a)odOI*2yS:%#P6Tc|P9&T.+[8f`v?eBC,dJP]');
define('LOGGED_IN_SALT',   '1cM2eal`;,BR,a/eRuG$tFW}hKH+t2O81h*x2:#`hc5e~Q5z|gev_zO]cK1Hu6|b');
define('NONCE_SALT',       'Hhhsq$6lZe:Tl$6iK|A{>6>-WC``&I2}Jq2dg:vG6&O-TDd!ld=8Gzv`93TlC:Tb');

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
