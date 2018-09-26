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
define('DB_NAME', 'hie_wp_local');

/** MySQL database username */
define('DB_USER', 'ahudson');

/** MySQL database password */
define('DB_PASSWORD', 'alcovemicrosite');

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
define('AUTH_KEY',         'kKo/Gd+*z(OAI?/zZk`<_xXM8iOz#1SUV)+GR+>4tzCQ:4rg1oZz-U#(Ry~F_~>9');
define('SECURE_AUTH_KEY',  ' H}>r3gv2{k3uv4;Q9dpb^:D8|[|FuMTp#inh7Q,?x0}V`Zg+^g>`#+PK;pn+uno');
define('LOGGED_IN_KEY',    'qZcxm:)mbuIGw1).uY?aMI<FA&<6T]| &|h+.T|Wq)dWiW *gE#N&hseTMbH^m,#');
define('NONCE_KEY',        '|^^UAT]W)fW7|e:(B<}hpd,EaZmY:PsSbS[qV>&,~xtzGgW{}+SMwA^VF_HN0?3q');
define('AUTH_SALT',        '<.DhK>>S&8JyL*K&*F^lz/Fb/e/&VCKy=F=rsg)J{vMKiz,AB-nII!@-(zN*-t$o');
define('SECURE_AUTH_SALT', ' @}BX/iRJJGWGfY[}+,?YcQ7X-vTMHNr-iRJj<=O/o^`~8c3hG8liE@($^RD5-tB');
define('LOGGED_IN_SALT',   ')-<DL[[5|v0=I!GH&pYTCSF:!;$Bxv<+jh#Kl=|-;M+/zEu[Z$ceCM>g)ri*ti[c');
define('NONCE_SALT',       '(IxjSySs=6>zT~V~#3&)**`,|%kr%)k7b6Z`<Qd-c}&!%b,eP5ajpfG|7k*]i;bV');

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
