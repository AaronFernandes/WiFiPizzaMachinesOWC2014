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
define('DB_NAME', 'wifipizza');

/** MySQL database username */
define('DB_USER', 'wifipizza');

/** MySQL database password */
define('DB_PASSWORD', 'eatmorepizza');

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
define('AUTH_KEY',         'piZN.cp]_d@fA+,Prd7aXdJ|Jo<8Z7ZOW;wj|+_fxo+v|y^6`!0-qJeBKw|xt9Rn');
define('SECURE_AUTH_KEY',  '#BT|@=XtveU/%_Ho+di^v|lE3+rL}o4^%|SY)`Chb_[U=]4}e{|:0RWE_^#fz^{?');
define('LOGGED_IN_KEY',    '}rgp6d{=&9;96~Sp3:8}{8qd6>~C<Gp@vXxT+Yfg3ZenQ|#x--~TR=I=qdAwU>L&');
define('NONCE_KEY',        ':X%uu-U&J}$_DNCBD]rAZFHTY ~n+(II>;!T`mVK h7Zfi5lCdDn&/XQ)z(4iJJd');
define('AUTH_SALT',        '5pG+D[%SVI49GrS~xEK<k9Gsv-w?N>_>7fB({~@6BPe#-lm;u^p|8|aNP?sKKd9{');
define('SECURE_AUTH_SALT', 'N($Gvq8&^+HS},>Rr5mue|}<%StPf~(ABG@@Z]+M-JF/f#+TTG+[2zxq}7@<j|B<');
define('LOGGED_IN_SALT',   'K&sBeSGNu>O5UTBU_B#0[B=fV.Ql38U|c_Q5g 6fnV |TRbLr&Fams~0D_/Lg<p9');
define('NONCE_SALT',       '?k8Kxke2BLz~19SoCZ~+*1.n>4MO6tI<T7]^sQFI*;!`-@ia{m%FF6{ZM9>|.U3o');

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
