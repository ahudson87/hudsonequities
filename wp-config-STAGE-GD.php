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
define('DB_NAME', 'hiestage');

/** MySQL database username */
define('DB_USER', 'hiestage');

/** MySQL database password */
define('DB_PASSWORD', 'Roast@123');

/** MySQL hostname */
define('DB_HOST', 'hiestage.db.6062134.hostedresource.com');

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
define('AUTH_KEY',         '}`>uu@sN~(ACJ1D1XAyDS;_9?r~kHE8Ql45MVlCR1~uJA8W5^6<>UG9g1#g>P]hs');
define('SECURE_AUTH_KEY',  'jG(S{ ABe]G-,LRzG-] ]^//&-8 uOOVg9o&$+~V`6.1y&}#$8$qMLouQaE)6ka`');
define('LOGGED_IN_KEY',    '&x(Lo_jd|y5o@^3>i4GMb9=8/&R/%D0|(?hm~v7{|eMo:#@+N%lw@+iz#u&T=BZ(');
define('NONCE_KEY',        '4m.)t:Q_)^+~Jr;+Yc,]Ixh#z^EJ.Pu4lF|9.kAewdP|$T9>.%cX<n8}xC@[tT[m');
define('AUTH_SALT',        'RKP.M9S/I=Q|2GcgehWF*c[{Ln}HY{-3KyDM6RrlhAgqQTkZ[kJ9s/G:XgRPI`Ey');
define('SECURE_AUTH_SALT', '_`J,$i|Q25n+)T2LC_-?QQ@{:$VA+DSZV-(w6M}.Eclzv}NiRkj|wDVnfxd[(p+]');
define('LOGGED_IN_SALT',   ' 7lY4!?+*>Pr0Vr8dRN]|h8,RfMy%7~i=GnANj)+i|^=Aw@8uG)Z-_JDe2xB{Lkp');
define('NONCE_SALT',       'KUtnHJe-H6)iUqnfM;uy;!s:wA[XguL7ADqTfrUK5ya;Y+RR+|N*: v(*lovqFHb');

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
