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
define('DB_NAME', 'test1_db');

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
define('AUTH_KEY',         'N!i?,e.<=_?5xL0h%{0P<b=^XawzhVfDleoVkL=U54*7w8:PH+rQQ1fjCnTk<I;5');
define('SECURE_AUTH_KEY',  '&|.v2y>D|vNZR}:&pTc8M(U_~4_Js!kl%v {Yh`~Mm38}CQX}}ov-eBg^7AMwfr/');
define('LOGGED_IN_KEY',    ';7XuRpc/>s[h8cO#W6F/xE!v^ghKX:}d&ODDIh&JJ3OqE8.,R~b<#{By2I!A&Rk+');
define('NONCE_KEY',        '#^T=b44*2h[l#n+3?YHa[oXK7)9E4Qr%(c%OPJN~|INC<1G61v#tRAuGSB.@]#bQ');
define('AUTH_SALT',        'VG4d,@fFv+ze1eLJ|MI$O:>;U89bOiV/qI>SMs.qlmLl/8|H}bF~4Ju*5zq6Iv)L');
define('SECURE_AUTH_SALT', 'nsT=!E2BspaBn3o8*NEI^ZPIEb#hYm&:y{x3nSmbq(K*Jz?mW5hWs4_V0 {~33C?');
define('LOGGED_IN_SALT',   '1fHw-m=7!nh!#Wk>gMrcm%GVlVu4lVn=EwnU7:8Th dFU[-S< y~Ujk9i&tR2HN-');
define('NONCE_SALT',       '%[PD30xknE?/$^LVE9oe=khevY5`;IT~U%}b{)JN8{N%C=s Bl&NcN?r=)N>>+q}');

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
