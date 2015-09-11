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
define('DB_NAME', 'wordpress');

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

define('WPLANG', 'hi_IN');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}(c_,Bj%uLEG6-LB_Hnv]Tc9Dy3f1O*/ZCb`!rc3V=pa^J_]jO^10/W{BQ_K;t6Y');
define('SECURE_AUTH_KEY',  '.3${4EGf/$WV U]S?CjoqlFi1-f:83C{+|S|MU6{k8))F/1#1XmN!Sg&i+oV:IG/');
define('LOGGED_IN_KEY',    'Vvu?WRX)6+<S5]39~|NfxLmQcN%@J<=!z+=9n;IA;d1ns-gY( +A>iQH{YLWP~zU');
define('NONCE_KEY',        '3,J5l*,Cs3[`m<7rp_fJfZ7$}n.6Lg&BG,r(#-vxR9@ISt k~S4Fb`M7{?zlV7+/');
define('AUTH_SALT',        '6(C{GDtW[G9?Q_X&FFEL?AKFG*~:V8(#V|J{(7yJruNmcXKm.Y{w-U-R]a=tc:%{');
define('SECURE_AUTH_SALT', '1uf-|bS^=$X;AZR`ou[_GBIj#D|lRQs;JzZ}P=544j5+EEalk+H4Vne1U$0:&xB%');
define('LOGGED_IN_SALT',   'qU(>Hhg+NBusoq]m%`tJ8vX]l4+0/1Z;7-!Sd4.k/Q1B[]gaBcD1#@,QQ{?g/(cQ');
define('NONCE_SALT',       '$^oasW@Dj[MQ8CsFj~J}=-ro5v`=(c;++<LkDC;XoOdN?961@jB.Z@>}?F~:^RJC');

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
