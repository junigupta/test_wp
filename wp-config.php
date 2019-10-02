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
define( 'DB_NAME', 'testwp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5}b71VOAY2E<uJq}XcLCi>Rtmk+(Zt)%RnuEB10[jqVyenzrJ$rgZdAn|F+TbU{j' );
define( 'SECURE_AUTH_KEY',  '@5{jJ1S,9i&^c2&ABD7vZQ.Q`xsN85%yxmcnQ!o~|<hJ F;f{>0ua`CEt}}P#0=d' );
define( 'LOGGED_IN_KEY',    'KN*}BsW9HzmyhKo=-f,En5>8E>2BeMYF9E}i[D57rrse,N!5M=N=CNn*y;^GKB[-' );
define( 'NONCE_KEY',        '`@Hnm]iFqR&j@4{2y:#nC1i,;m9bb~ZKQ!XB^M^54,F1QwfN@W0?7eBQa^b74qgH' );
define( 'AUTH_SALT',        'Z;M&H7l/oH}@=]b#>L*^CHX.d:lO#0v||s}jvmU1RG`+, h1Y-zT7QjOT7nD%{l#' );
define( 'SECURE_AUTH_SALT', '<5@yPteKp_0@1n8JoG]I:Libhnq~Lj~FMndgsjP0D>8jZAOW&;qz0Tuk~kTIQv1k' );
define( 'LOGGED_IN_SALT',   'w5D~vb-jtE9`3Qy0]00LQUGr]szrdZ-{EL}W)Md_:rc*F[qd,^UAveJ$h;;T9 e@' );
define( 'NONCE_SALT',       'sq@C(H;4+t]vmOz?`7b*ORg*wy{r3@AHXX2?EISjt{e|]HsQY{Y)GDCR6tM{(W3h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
