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
define('DB_NAME', 'pamas_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '&/>A{D6Vn[;R1skU[9Y,4}44K!^u0PQKF>G8xC^&lK<Z&5&g,iK5p95N+*>Hf<]T');
define('SECURE_AUTH_KEY',  '/f;O)8XKHTzoe^P::/Nh`@j0P-y<NVT]4=jH,3?V#BM{6B@GZkT)lq`}9dqbEobL');
define('LOGGED_IN_KEY',    'fw|B*zQ1X+ =!l_sY5^mnGujqL9!fnMsguQ`6^VExK4KBr)6UE[B.b9TF/|Wi9s:');
define('NONCE_KEY',        '%4jlOQW2xq:$w[/VUPO,ouDjE(pD+lHg)ZmQ4;}K^83ZY(d(49$FePPhtwaq&&qP');
define('AUTH_SALT',        'ot].W[umvr&~5QB-]OD)Gj{Jc|;59u%2K$u]@~=*7IRx66pCv;Q=@j%q((iB6O_(');
define('SECURE_AUTH_SALT', 'M|~VRA*;|3LAAueh%,DiKSxo+iG}N3})IPl}Q9jrV@Pi4wFzOO LMr}D@+_!8g.e');
define('LOGGED_IN_SALT',   'TSskdBxE>NWWw&#o?/qY9Af-?+4z~YE)sq-3xLu}>/vYy]bTdJDrtK2ig|X[sWls');
define('NONCE_SALT',       '>_B.xQ8]8@!!yfL1]@6$sf<Dg!;}-+R)gO5p/]fE_Dz#n*Y3$SUy=}ghBN;C.=2F');

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
