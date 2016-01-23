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
define('DB_NAME', 'ceconeco_cecon');

/** MySQL database username */
define('DB_USER', 'ceconeco_admin');

/** MySQL database password */
define('DB_PASSWORD', '!Cecon751');

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
define('AUTH_KEY',         '72/+`y^}XT[Kf=N[Sk;zC_^g<{lT/-j8Tar4 p#^J,_^rPKT;]%K|&Vx*6s.Ts69');
define('SECURE_AUTH_KEY',  ' 0!R&s32}8,T$&Ab|<T2an.s]&*nFwTS`ff-?=Ux_W4p|lq!6GrT=G3J~,O}QsKd');
define('LOGGED_IN_KEY',    '*uKX1hxnM=(/bP=<N%|a{LSK-O(`WkX~B}fO]rz{,=Ek?%B`@*sX=FM+QpD!lJ!s');
define('NONCE_KEY',        'vsxNs,5$nhj0p/^e/|X-fHBJxW#a9S8Fwd=h}OflCg`]u{J+O0}.Ov|m]pSlQt8X');
define('AUTH_SALT',        'u|t*E:#-rx];59IFl)t2|^PG~rRt`U140w2+<J]ll.,7j4WNx2+.=9r=D=e|I-J)');
define('SECURE_AUTH_SALT', '2@F>:=b`^}G/E*lK|XASQ1 SH3qCU7=yk|qJd{A|_iN!{:Ud,25hDh~T(*<-!hfq');
define('LOGGED_IN_SALT',   'D.;5~]dh<0Zi&t|-N_9` @S8G=9Zm~|# Q<9A,+g)1o|vF0^t`vDfZdhb$(A^oj$');
define('NONCE_SALT',       'p reN-ZE1z};Ye?1:-wDW0 [2Yi-O%}wKQNrC5RQRV> 3RJ*!:&$/+s%>MJk fWh');

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
