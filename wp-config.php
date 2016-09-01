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
define('DB_NAME', 'wp_vtarch');

/** MySQL database username */
define('DB_USER', 'wp_vtarch_user');

/** MySQL database password */
define('DB_PASSWORD', 'Arch@VT2016!');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '*G|5-lGWnyn!WbW*a~gWNY0Q^0hAKgY<<6`6!W[w@i_zG$rV;1W=8OBBJ+f*<#mh');
define('SECURE_AUTH_KEY',  's7==G?O~/>IA5`J;qI[(q3)g#UAjl@&c2Sh=|He*$L86PYcM|$QtlZBWaQgSe01k');
define('LOGGED_IN_KEY',    '-2i|j!z+R)*{|&.?}cuc=$]mM4%]IP~!`n#@,v]!V3JC*?S?t{@Og(oM0;C&`?@W');
define('NONCE_KEY',        'Wc&}Mat0>z,L~3%2DZ2HrM1OFFCDuYvtll~y.M+Rjm|F4.+fZZ[Km</L?DOLx/1u');
define('AUTH_SALT',        '1f,W=Y6PJql/N3rX[?]FYM!eIw7ui@9a&.F`vuW)Qb^H]Q@|35~}UNr-d&&=3I`S');
define('SECURE_AUTH_SALT', 'Rujca,ysoY=je**//3F8NYH~gDe4>erl^;B:s!N|oh9,rT<7sU.bbWcJ1KNG]0U`');
define('LOGGED_IN_SALT',   '+[yP>gQVJP%7*ZIJ?ZVow!Fz$HX*gI_Y(V-a>:uLgV!t[!SP qC[nwiJ8Zsf{4|}');
define('NONCE_SALT',       'AwY;HG=*}4yIY`,rvDze+(bmZ/`=.@r,C*;re0Cwi>nM_{sJfK8$i+2Nn,di+^9O');

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
