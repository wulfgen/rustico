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
define('DB_NAME', 'wp_project');

/** MySQL database username */
define('DB_USER', 'di_wp_0813');

/** MySQL database password */
define('DB_PASSWORD', 'RTNUUsQZ2BvAaKsD');

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
define('AUTH_KEY',         'z KZ[p^ob/l@|z-AQ-Q fbrzU>O^D*H6WLIdxs@;DJD!h2](-XET_p|}T(t6Ih02');
define('SECURE_AUTH_KEY',  '[tWTFc7hJw25q_0c{(GTMy!;ILB3D@.La9&KsD.b~ kEH6{QD44~4 [i{Tz7ki]Q');
define('LOGGED_IN_KEY',    'RyaH?wEStO|+:Q9Mh.|Om ?txEEv}-?Y%_`to+uuum#t=e1Q[l+}K;f_W3EE2(^$');
define('NONCE_KEY',        '8,}dOE@G-p9D7xM2|6M5.bc,fO^>Ul-, xy|0|n9A-3Ue^0qta:$)+BxP@3yy(Y/');
define('AUTH_SALT',        'v0X=)?!+yR.r82J[NrW[{wC+.QLlIFVa:{4[yBi.*x$k[99*-X?f]^j@d0%CDy{!');
define('SECURE_AUTH_SALT', 't,VGB3_!Cr{x6d{r(K<5@.P?w/F%- 7#_;#KVh0tOARu0e5H;ysN}&{>o/tC}LHD');
define('LOGGED_IN_SALT',   'tXuJ~KpsH-+N6+`Fn|$3s@U!ZJTq^Y rL-uQ<r|H:Raoj{LXNx`o!Z;=&{v[9;k7');
define('NONCE_SALT',       '=8+ Ibx|a}-JL5f`tp}X!kI NNL=L&t/GiN|b1Rg,fwu4y}@9,-3+WN?3ZP-uI l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'di_';

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
