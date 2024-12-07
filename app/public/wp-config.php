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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'qF6arPy>|B/eN3*hbj5ZjC`0qiV4cL,?2B`#mhFYI((-;vf)oj$AVD k D)2NY|a' );
define( 'SECURE_AUTH_KEY',   '@FHW7WE`B>bZ?Z78ivJ7`*sg#rx+gU(Wy!,F9?6u,LROC<( b~Yp;ggXE2XXw;J(' );
define( 'LOGGED_IN_KEY',     'YM%c&(88Oxq|T_~m^8gRJKDatw*MSuIU@<Ar0np}#F}v2,iXb|<]qL2be57b ebX' );
define( 'NONCE_KEY',         ' !P^n6O[QeQ0g3:Hjs%1Y.j-@9sM,;%p/7kjoUIo&fy~qU>R@LSH_#E=qoXgO0vO' );
define( 'AUTH_SALT',         '^sl75d7K >E*hU(?^lMq#k_}KsxgW#6i!D!WR?#TU:Ry5#`F&=lpUU&DR6}$$My=' );
define( 'SECURE_AUTH_SALT',  'J-(T{Xq]tYQ=_11C]Dv)npH=Fx1p`>)N[r$9iy9cOsx,v?>D*po}JAYh2).D!2k3' );
define( 'LOGGED_IN_SALT',    'H#4Zq5we*#w?|R7W>RE]Zgocdg2Lf-iwD7#s&9f+PmvfQ04zar5Rn_Q.Wl|__5fX' );
define( 'NONCE_SALT',        '*]6giRISL^vd&C!:z/XP+GgEo*!J<ru)v0jRy:gRv-g}fd%ku9.EieHg-J@G!4R)' );
define( 'WP_CACHE_KEY_SALT', 'daVA9g4aVU6D.@%S^AiJ*73aMC2CN~&TE3$iFuf{YV<K&C6Ke7b5LayG~j~$;TdR' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
