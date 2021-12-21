<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'instaveg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Pr?clRAkXgEDu]_nh/!^Qrv0^`RJxJ*do&uw6@T{LVUyP==]A%Gy8B9t|k&U456,' );
define( 'SECURE_AUTH_KEY',  'UdDYC4/3Z#O%y+raSj]^QbkSeS^d~92&PgQ=77lUMo7X0Y0S9.zh*c_PpVT5E(!#' );
define( 'LOGGED_IN_KEY',    '>!FT`s[p|v)I5?LO=7A6EzK2n*]dA(+0twz51WQ+?!jA`_1M!f=WgM}Jjs*zvp(y' );
define( 'NONCE_KEY',        'qb[XrTsjUEA#s*~}.`e= ht3pOt0}gH?eIKjP.(n`sw[V(l8*jEp]53*Xz3$cKam' );
define( 'AUTH_SALT',        '^8o^0jcN[LchB}wM3,r[#+E1:RP8]~STE%uj9 #.|&g*+X0*9RcL4E/i[9XTwXX<' );
define( 'SECURE_AUTH_SALT', '%S&ih,S~b)a&t5A/{zdGC#o;}51gNTfzL`uc5?~=wz${M,EJ&]={{vx{0H/Qcoml' );
define( 'LOGGED_IN_SALT',   '?_gFrR4=_gP.+OEW#hE?5+d^x(>#RGIh<LpYM*yWi<b#C[jJJk@z;b==?_!g 60B' );
define( 'NONCE_SALT',       'K5Gr<9nB^Z/VJ_&h5>/aR}e.B~`2P0NHTxTyc{N7zvT*hDL?yG3Ij*L-pEu8?O_M' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
