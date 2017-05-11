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
define('DB_NAME', 'jma');

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
define('AUTH_KEY',         '&zE4sCJa&&hms^ljWF8w$jIYU~ N7>WY=JEOr 4s`~8]ylXfbGCN`D_{xL%x4zyK');
define('SECURE_AUTH_KEY',  '55 l3:7AzWgY5P*g:$TxkZtR8ZU5{%4B8OHxZ7#uE*LwG,ZgP#m*Un)cR Cki>q>');
define('LOGGED_IN_KEY',    'z3tO*Mmyj+P/qlRoECBt`hJP5SE,-!Pt<;5qO@7],*`KjusogK_8t4&(=XODqU }');
define('NONCE_KEY',        '5dP/UyLD,{=W.tax]#nHSTnb1g>$,1I$>A|8p{s1BfK||E/j$[9*<G{n@o:>bdf9');
define('AUTH_SALT',        '_3fPmSg[ndu6!S{n>GHab3-uP7 &eDmNNMjf:Hx2Gr]oN+*?~,iN$fa{?UlH.pJ*');
define('SECURE_AUTH_SALT', '+PJEKd KmM>P|-W92ch=m/?!Lsij[eK_yJ*9f<ZcI#Q?QWyRn!Ldy-,xW_l*|m+~');
define('LOGGED_IN_SALT',   '|xWbnMo`^p?lC7j^M^ _s[#8sB!:qT7FJ$?3z&VHW0LOW<ZEaC[T&CoJXHbIY3yB');
define('NONCE_SALT',       ',%8yFv7Z~7bc#=9;(p~o[m7P0w!JasD$gCY3`g`zbrt?Jx#bE;KW{<owP|}Z[w$E');

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
