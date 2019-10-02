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
define('DB_NAME', 'testwp_db');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' y);mxis,d L^l?2/J?mVM+36!c7&p_O@H#*.SM *E2EPmQ>TB7(LaWwYiYoGul3');
define('SECURE_AUTH_KEY',  'x1&wVL%|MU4zv-l,V&h?a(|8eqj_sSDJw^*;=)hZQ`[30!]O+K `XOu *~Jh%@BN');
define('LOGGED_IN_KEY',    '/vYTls%dV -ip^~Fr5ENsK^8~xRVY#Iky9kW6oj2DpYwa~%16:5;h$S>8|wk]$l_');
define('NONCE_KEY',        'nsk[ Qs0CGei]LBc b#B]h!PLx[UP>lB-,aIs>_IWR:|0T Z#~~:r$l{Cbju)zL:');
define('AUTH_SALT',        'xn=c5p9xXs%1pKeY9`FXyf)mR0Q;rhU;n:>8kS2bC/OZl+@,+himL5`xqY0Ig4|h');
define('SECURE_AUTH_SALT', '5U-S`ZmzfjTp ^@w7tt=?R@:OLl~.TAs*m9bG{Dwl&K?Fa>Ek!4[am:QmX3_b ;.');
define('LOGGED_IN_SALT',   ',VIrbZE{<nTCHH%<Nm`6r*gyb+Cvsq|o|IRm`N*+driX8LC1Jklv5$_M>gdsguI`');
define('NONCE_SALT',       'fFv]j6;99$a7;4UF3oDWnJLl}^]d1s2<o>y^B(uY0OcRp.~uFko6&Tv5i`6rm-T+');

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
