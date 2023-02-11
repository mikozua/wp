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
define( 'DB_NAME', 'wp_inamikro' );

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
define( 'AUTH_KEY',         'chD=?:-qZCD1f4tS%p7Myn}B!IJz$@+*#BJ^prvH6zerNMWO%/23|})YJDGI:p2m' );
define( 'SECURE_AUTH_KEY',  'pj=k>p(kKE}f]5He(X6uFlS@If!ZP)<}_[wX][Q$-2-m]5iv1Z>b01$3Sn:;Cbma' );
define( 'LOGGED_IN_KEY',    '[G%oYpF[Ck|=|Nu+eF86osb-NMp15),m(Pd&eZ#V,%9<Q8ntXv9W(<[Eut RD6CG' );
define( 'NONCE_KEY',        ':ib/Nd@zS>^h-5TI1_{&.B4h|bXVE*W_RWR?&Ns.,avQ6KgJ(U>wYdTbY >BqU?p' );
define( 'AUTH_SALT',        '0QB,x=LJTMy6`C%geiJ>@H#.:f!Ho7/X}4?dBT_sZh>>(p+>P.-VwsJ|G%W|Io|x' );
define( 'SECURE_AUTH_SALT', 'WIHe,t5w}yG@LmFp3|!$O:M+<EnRv10OHB&O/`Ge:ZLl,9Kir:SD^O8eQ.i]`/1p' );
define( 'LOGGED_IN_SALT',   'cw)#GF*Im2d8:K+O$O^+eIU&<[SCHKd6X|C!jHW5uTOmv|ZUA,GZ7LePCs{ 7FVX' );
define( 'NONCE_SALT',       '8eaK4wF/)1[0p5i2E?59cPyyAE_D@U,8@8w6=O9!M5m?$yI-A&v7(N*SY~=}rH3s' );

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
