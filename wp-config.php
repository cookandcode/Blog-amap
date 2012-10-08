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
define('DB_NAME', 'blog_amap');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{k%1{(`>#od9xQR;4.<t2Kayv~b-mu,F9u~t~P0B-v0R@C[i3~<WvkC$[9)*!Pom');
define('SECURE_AUTH_KEY',  'H7U~gJ3Q6?4ESG,EPJ6#QW) D+s!l.FJ^Yv U:b#B%x:?}hK@{QZMzBX%)G)9 (E');
define('LOGGED_IN_KEY',    '?er03yrW[DZn}Z&5wk9djJKPcvwyj*BGM)[$oafqAXAl`.@MQ]sM~[)e>STDw5 2');
define('NONCE_KEY',        'e-(^NoSxYlhl`nb>,j>q]D nJoL=A+*H+thR]LL=<#OEtprb:.xO@-3DanF-b3hp');
define('AUTH_SALT',        '*:ebA9XhIJGa3C]+n2hqZ:6M.vvacP`cC`#jjOF`(^xbR^Mxo4qr5j#=+x%c7hmJ');
define('SECURE_AUTH_SALT', '!vm+woci;zrk5A1J!G+Kw3vOw`[M:Rq@hc@N]sBC[B7c:f;-Qs)uAy7.~Ee`oOkm');
define('LOGGED_IN_SALT',   'HmSK.L aQ&zIvg?*@.GJC5eFxV>AtFqh>Hf)VE%v!Nq{j%Q|9=0O5@{-Ta|AL.0Y');
define('NONCE_SALT',       'q~7jA`,2u)|6RMd9C%^qUw.[>EhM#U/E:ono1GPB1pax2c*Z.| :^/T0(c@`[^xi');

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
