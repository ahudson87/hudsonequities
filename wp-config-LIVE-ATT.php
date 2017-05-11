<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'huwp_hudsonequities_com_hudsonequi445493');

/** MySQL database username */
define('DB_USER', 'hudsonequi445493');

/** MySQL database password */
define('DB_PASSWORD', 'h13_d@t@b@s3');

/** MySQL hostname */
define('DB_HOST', 'sql5c45a.carrierzone.com');

/** FTP username */
define( 'FTP_USER', 'hudsonequities.com' );

/** FTP password */
// define( 'FTP_PASS', 'Hudson@123' );
define( 'FTP_PASS', 'HIE-FTP-master@098' );

/** FTP hostname */
define( 'FTP_HOST', 'hudsonequities.com' );

/** FTP ssl */
define( 'FTP_SSL', false );


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'NL(CCs8#[}sg}F` 2PBmhsqjyWv:XPUt^{jerK}qEZTwplL`.}}/F?9T_Il JvS}');
define('SECURE_AUTH_KEY',  'Y+u^)#Vp@nZ0!)k5xk0m-?b+W{v8(*3@H!19+(f!2g0hd1]mzQ=-=249/$<.Ck`-');
define('LOGGED_IN_KEY',    'jCw+p_l|8c*^hc6yJRLSKZ?bu_pz<c3oTji)%]60I<Wx?g~N%cCF-D{~--;<R17k');
define('NONCE_KEY',        '~oDV*mVFB(^u`i:3O6a!}2wu?0B4hA`>Hr8n0P&6&yI!@_&F-rQQ(PWGDM1RKk+C');
define('AUTH_SALT',        'Vc7o!D49:1r,5p;:8x+|:KXy58_V^{vPe/.plK_Cs%J :v4E+Px!D?HKS78`<Pwc');
define('SECURE_AUTH_SALT', '.MnMLF_U,]f|(DNM~c#Z 6lVy^B06ZwP$Y$MtQ1tdJp%=}Ck}8O^6!R-9+;9-H.M');
define('LOGGED_IN_SALT',   'TQ3+dz&gr/?/6TbK3wz|f:!Kz`9[sg@?SY;|(AfOex|DqhwIGt~OQP YnBS^ [5_');
define('NONCE_SALT',       '}@<>Q4x3x/w%R`_<!.II_P7,c^=EpcTImQeA1CiCS?@0 64^8)dU@~qkp--p+MeJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
