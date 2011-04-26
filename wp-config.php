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
define('DB_NAME', 'immersejournal_wp');

/** MySQL database username */
define('DB_USER', 'immerse');

/** MySQL database password */
define('DB_PASSWORD', '1mm3rs3!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ONf}=A,qt}lC}I^nhIt,o19LNuO6f0|BTKR7ZYB;A5w12~+rA@Ze}D <LG<9#R:Q');
define('SECURE_AUTH_KEY',  '5zxj*;3X?pRkO*BFNxr{r[,SYK,&SupS9OnuG~(d4~Q$oBVH{4P?q_*B{~fr5)Z^');
define('LOGGED_IN_KEY',    ',uML`5O%na3!^}?Y~^@xUk}j(kem[N2Cl!KD3LX1i-c?/wJ#o<eAv`sr#x=(f(X)');
define('NONCE_KEY',        '(};NeXy4cR)rf{$Bf:)r$DDA:5_ce>(u&>Is#nECGtF((W$c7s^xt;8xrXV1=iC1');
define('AUTH_SALT',        'VH)> _BS5P=AWwq$VjFV&(]k:XyvzHp]RB;G=$)t;ySJ)SSJk6]o4[25y=#m}-xF');
define('SECURE_AUTH_SALT', 'ZOK[XQW{H@l?Ny)nGER>x8cd4bQjuVp:gHfQ?hA:5c>$}`}jj+qlh5TxZiIp?o(^');
define('LOGGED_IN_SALT',   'U24Nk]jq;@+0jjSuV5sj:i@FLRwB0e)YZg<BsyR1jgY1w%^DI^V3G]=` K2(NTf:');
define('NONCE_SALT',       ']~Ctf  )t >e&pI*B>0D#AMG.2o+N1eU-.{?f3q0,BE_O?5cvV[^Oa$i;TZO@.q<');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
