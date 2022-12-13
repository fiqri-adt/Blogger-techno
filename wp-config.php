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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'oZCa+KiCkTn6sZz46Kq*2Dc2m$Ya.vxvz4OyrGj0!wSh|%e//0m;k+GyrL7J2vV#' );
define( 'SECURE_AUTH_KEY',  'nK<JSSxQ(fX&k-8h)o]!EY^q6&9YWNudp~lqw+4n-KB-QR)l2qc?Igky%2LVowIl' );
define( 'LOGGED_IN_KEY',    'e7N]=8ZJ=[I^4Ev1aHu-Z^l3g<|jtb;RKB{R2p5ItF3g7Jvn0Z;EiHd2O3>#aqh:' );
define( 'NONCE_KEY',        'k*(c)KCi]l*g|EwKRY}}[Q_I9E@$iu4MApK7k!EY>$vLw;m`.r#kwXLIh{[RC7+S' );
define( 'AUTH_SALT',        'cC{2EMm$VIc(Sqhl]X<=pJcoV@UY#dTCt7G[D-`Uo.hyrRl#m@7F,|*5aMj7!%P;' );
define( 'SECURE_AUTH_SALT', 'i;I*:uA;,SyJmjD*zzmAr[:^T+Xk@d_2~<2}b)]Q:f$[Y+RL,bKwv_[Jh3;[Hyhq' );
define( 'LOGGED_IN_SALT',   '4N[fV8Z:_<o~OCtVtTvPJ8w2q$nalOrYA#Gdm_DX=,5d9OdW@hr&=Ol_#qLD*oD>' );
define( 'NONCE_SALT',       '&^(U4N)K&fiCVRX$|_q{5|X2?-a$,A?5.+oW|~+`Zzw)-x{UF:[Md<SSQKu.m+k ' );

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
