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
define('DB_NAME', 'djk');

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
define('AUTH_KEY',         'irZo5va&O+8,+L)Gg5%z{#r+WJ*%4%_R[QyIKoIUHdQlFesp%kn>>|i{(fpf|HyN');
define('SECURE_AUTH_KEY',  'nA%oZ3?rq/eGED9.!eQwh&Gs)1j=Ug07Z$o;9RzK0]$a`pkA+qX(LZ5+1y?iyp>K');
define('LOGGED_IN_KEY',    '$G !vUOxZf/fA$,007=H!R,vz5ZM(2a_k~cWj(Cjrz#Y39%!b4vzOs)*4r1x?+]=');
define('NONCE_KEY',        '_aP6?*3N3C0(N$q~;tJhAM$Rg4i04P8P0JrI-;BX`9vFkX0nPZ,s R;~:9`XfWHF');
define('AUTH_SALT',        'z+uN pPK|Bll8WIa]UM1U_|0a_o]hY]z {PYrY;tE@PgmGxuw7aHh2{7{(Go295K');
define('SECURE_AUTH_SALT', 'vW^hBfaDC:H_0?54XXk@ud[RNPLvau)BdncsQWG^VLQiAbvj|dl)XqY Bf,$7*[B');
define('LOGGED_IN_SALT',   'd;9bu^ -*&Q8z<A,yfEy>A1QV-a?OY0o^L{9^(2*80QG_NI,r^l<s7S#Cw|koVOP');
define('NONCE_SALT',       '#WSs1:3B3S6nf<E77szs4 B6*as4m1J=<whb]n2:KOA>d;_G{97O$;G#2nUXd(=T');

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
