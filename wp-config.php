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
define('DB_NAME', 'msk-company23.ru');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'еуые');

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
define('AUTH_KEY',         '@DGIRH5r(j7g_[gkz,0[p@<g9p10&J$*ty,a_@OO*6M#fjJ[9Ko+WN)4{25#i.5|');
define('SECURE_AUTH_KEY',  '+rvBzrnx[(@TXqe_Ky/]oU#8;^A2(srG]o2tD&U^nL01yOLYP Xpa_AFoV{m*JQk');
define('LOGGED_IN_KEY',    'Um4xAHrvcsMlFq$~]!1|l!<@a]&O~Z84@+_5J>NxbC3q+(J94w.pA20;$^g^Zzb ');
define('NONCE_KEY',        '#KH<?/H6_yTXKj_.[edx}N)o#uY 5wmF1|H2J=*sw?Jb%@J<?$yKGs~9JD=BVmN#');
define('AUTH_SALT',        '3U<c~jk<dap]Mj7cX~}.t#O J<C7d.rNqH*{Hy _N$_+apVo_$Xa_BM34>7jvbjR');
define('SECURE_AUTH_SALT', 'v1#=p(Gwo+_U)V^>)6j&&?6OqggsnVR=MM94(#h(0o!OwBxQqq0[fl8vyX#76w6G');
define('LOGGED_IN_SALT',   '8=8;`bEXb3*WXON4`$4M7bQkc&))Hy`{t|g)a LYba$bQQL0]sVAKW;A92A:uQcu');
define('NONCE_SALT',       'R]aYP&o?a@[1guZJL+9wH<!Ym=++UeRfvEHH46~E| %m}b<(RX}Pb>=;4Fra$-F#');

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