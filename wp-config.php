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
define( 'DB_NAME', 'venus' );

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
define( 'AUTH_KEY',         'I.wP*9z(BOj.5ezz{gU|b0_lYpO*E*1A`jIP2.vtg(jH!5|b^30sdLPZ;ShD)Bz6' );
define( 'SECURE_AUTH_KEY',  'czAwP,T4XS>0CrWzbPOA:Q%Y`9/q7)oumEeGZtHo9|8N$avDGz3`Tm<{S:*KWRd+' );
define( 'LOGGED_IN_KEY',    'Yby=y<6H*PRB4^sN !{( b:rOMC_jKy&hm|nNd@mmvI5K`c(`WC[Ftia-$58d]0$' );
define( 'NONCE_KEY',        'N5>;vC,<E1Z)tW2I4K?juOi2 rN_y-@K!t:MYn?=a5:R`JO6B7}5;Ta{I~1uoFrg' );
define( 'AUTH_SALT',        '{c70u23^PZ5NX0I[<|oa4 0>8M#;8zzcmD}}w`dG{I*9.oGq9K(6BwG*reiy6]5$' );
define( 'SECURE_AUTH_SALT', 'R:(,U,NCt#KaYfdpJn(5a-R}}}uUswV5A$4L`/Kp@}?(yuhcD(M!`#g,!, v,p4?' );
define( 'LOGGED_IN_SALT',   'h2MDDnBeN6mTe,p6&n^Q43!_{I4{Pcq]erIW]wcn6>xk21>^|_Sd,Wr9$d<B_%34' );
define( 'NONCE_SALT',       'j,Q*KaL.orN!0rLq{$mnR#LY?U1^tyE1wj:93-B<q +?{fX4Z{#I,p ?K`pz.sMX' );

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
