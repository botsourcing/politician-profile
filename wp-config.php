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
define('DB_NAME', 'profil_aarozak');

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
define('AUTH_KEY',         'vg30~@E>+6%W$!C$&je7,/-8?)(FeK]us:V3Cs!;Z}+y*s8/Dm: /9U:;g/?!8lr');
define('SECURE_AUTH_KEY',  'a9HUGcZ$lZ>!*{(I!,2`f_TI{hSi[n8:,%>{Fg]0BE_bIvVv!/qhgro>s@ZP?H<?');
define('LOGGED_IN_KEY',    'gg|nl!#aDV)e)j_Z3f64# Bi58}XhBnu<T6yN%OXKGbQdR&6<IK)lY[$dN*TYZA+');
define('NONCE_KEY',        'F|8MC^![T_>fnM{p33u.|6Mb|s+GkT?3z7Wa[MB4QL.T,vv|=?VwRE<=o=o].c[_');
define('AUTH_SALT',        '0@dZsn|O`L#94;@:Axe3:_sB:=-&ZgS`L4A[~Emt}e|?>^@mXvpq_.Sh#S)p9R!?');
define('SECURE_AUTH_SALT', '-leIjTOb@5Prr2W4Jp-bU325W/Te>Djp%fdNRax;lm_^=D=&,OJ`eYWo0qQ:JvEH');
define('LOGGED_IN_SALT',   'B=2C.l>*KoSY 0HIssE7i(/#tp5@=}su<b@iw4^ns!4E*v9IZ~pQW[ec2wdOd,ZZ');
define('NONCE_SALT',       '>,zp$[]~kD?DRGuy!&aKu&]vAb+jc_T#MLtA* M,wI(_-X*cg+i07%).hXoB[$}P');

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
