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
define( 'DB_NAME', 'moverfy' );

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
define( 'AUTH_KEY',         '$rQgWT`{LHMdl0->ZDzRMCoIoEY9O0?{i/=b}tvOm?Wa9:!UFC01GF`X*l=M)&A}' );
define( 'SECURE_AUTH_KEY',  'eVE>a#:yZtoI`QBtSNq=5p9t_l>b!$|-4B~nZx9?{:Haq1BBz??D!jbk@{x1<LY9' );
define( 'LOGGED_IN_KEY',    'P>y@`H[{l{d$muQZ*ADjr;}FAYYC;mz,jWzpP,,*v:2}_6a$MniXCkZ|Z:x=@Byq' );
define( 'NONCE_KEY',        '/5R:sl8.IEK*:3W5goT>bjC,Um!9B)]D_?C=D-TwRMM/g!zD74##n%?@U,.NO.TG' );
define( 'AUTH_SALT',        '|)BaL/ uBZwO9#8l{>_[~1=Vnq:wgyZ6=p$?MB<@4E{A{i!kb;;pAZoiO({EG $u' );
define( 'SECURE_AUTH_SALT', 'jCbq_-A<8Im=*dCqH,#g>#-`S8B8uc7%{yM`)DXzGYg5XYw=e@uWwUw7j7cFMJTn' );
define( 'LOGGED_IN_SALT',   'XSF$VC2uF7)jvMsMaKpsrEJ%pF,o  C7eWD=%p?5fdci/3`Wh@HcYT0p!ul5oyye' );
define( 'NONCE_SALT',       '=8+d/ku0^qtzA;I@Jl5QIZI6TO),i5I1LG5EP<)xBlv@-{!Tn $v}oBrwt)mNi3$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pw_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
