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
define('DB_NAME', 'jameselisan');

/** MySQL database username */
define('DB_USER', 'mamp');

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
define('AUTH_KEY',         'Hr:L!? ~7T=,_ftxN#~)>+_TZ0ezW+]Ro1M>jD^Md3#ZfJVB=T~dr!YktRdC4Z[w');
define('SECURE_AUTH_KEY',  'p,{$gai[c7|r_0~<*zePqnu;DPU.DFpHa*u>ub} BQRGDXy/KcER5}DJMH!cAe m');
define('LOGGED_IN_KEY',    '<|0N 0*i47Oyb.9.G$BvF8+ftD}S&}+S$AM4kty>@jm!@7W*2]W&(w1uw:e)y.Oh');
define('NONCE_KEY',        '_TFnUYt$%?*4&mcB8n-v3P4v g1N5/j:]1,42.igCt&B}F=6Z:0Iv96QD-$-Bq,n');
define('AUTH_SALT',        '5pgNAyrDwwBt}r$c|pP}F*icmAr6SC~S6j|T67.C?9GcIux_3,L/kLl^=H4>(7e ');
define('SECURE_AUTH_SALT', 'w5-0/K:-;o=OolffWmYy+>w>v-pS{_m4Rq5o)L0)xuYj!rm}dnk2b?|_/~y<|j-Z');
define('LOGGED_IN_SALT',   '2{uV,*Iz!Zf_W$w]v`Iniw^XPZf@mtl2uYw]DN^(mA2Fr?dIGa}u&3[NmpZaztx}');
define('NONCE_SALT',       '`=FdV{Wlj}UW=$xj.XkYEPIKTVhaZ#j^ZV$*b-0H{zxr1/[2L}=$Hxfx[t8N/r]l');

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
