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
define('DB_NAME', 'wp_hr');

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
define('AUTH_KEY',         '?-O&yF+A7*-Gj:D:kj2 !BmF3L&27ID^=Zoklk&E2<*J^-05y_{%t(hk5GDAi6U9');
define('SECURE_AUTH_KEY',  '?ggej,~j25mV,c*E69|gSlm)j oM+3>DH*&:uy4dl4g-Tg[V*Gwy3q:w~[J!4WfN');
define('LOGGED_IN_KEY',    'js=(&zAwW_iPc@mQETy$Z-Cn?>Bs[+[e~f=,9kVH%?*U^XT{fGbqY|nl@GL<|x+]');
define('NONCE_KEY',        '-d;=r5%sa=5x^GXFkkO[X?)^C=8:[D5BJ3b1!;CW{TL5ZJBQd9n(;*%MlJ5OzN7C');
define('AUTH_SALT',        ']u.rfM{{y(fDk8(4X?yH! rKIq!!&EBfnU~`#_[ ZXY|cX^Hi7>?D+)z!rN*,M:-');
define('SECURE_AUTH_SALT', 'bL3(ZP~3<q2AWwoc YpF7yI[,Q=U$?,1pBjv([blSm<&c2tF7+|=^5D_ZGaf};p?');
define('LOGGED_IN_SALT',   '49Bq}7A}I(/P}uP%/-c<|>{88hEcFB0ZWLUD6Mz{oqocI1v^WZ5]tM#r!$nDRUNB');
define('NONCE_SALT',       'FOh/b7vvP/5!Z:xvZIH_I5?<G/0t<&e.~yI>U1g@No!&7>i5.Ko;)o}%fv,rhD9x');

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
