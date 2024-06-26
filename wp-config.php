<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hotelMaster' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'H=0O$LpmUIM5w*)dzaSzYHLXo**%vtW1Cj?S&>Uc65Z%r?[JQ<o1a.Baj,e?>8yt' );
define( 'SECURE_AUTH_KEY',  '3<al5e|r-TJ5T}Q0?YCkl^1Ce%_T$XfE&R,Q[lW3L XkR25K<3upDykiT)/^/u}q' );
define( 'LOGGED_IN_KEY',    '_RD5=pn@{Gi{AFK}thDp4k!{Cen!R0GGitFig9vT,@X[X/$UO#u,B}uo[(5#Zp&!' );
define( 'NONCE_KEY',        '>sN_W`.Nk+pul?<dCoIF;VH0!8wNm/j6g*q%,DW%4~<>j~e^qYqwgpEh`x-ojijo' );
define( 'AUTH_SALT',        ']/YuTMzq!&AM5{~I-je50TA|l|=Oz:D5Z4pqHhK``A*SO{yN2L.4Hrn2N,L?*`Ur' );
define( 'SECURE_AUTH_SALT', '&a1IKFx1wCT>Xch1O@mUtOIM&f8]#Yqix>bz^LE4N5/;wK#d0,W{:x.[1Muo,_EB' );
define( 'LOGGED_IN_SALT',   '{^xMM)`X2vfs1vIlY:[XDt0E|UJ4Gz1B}5nL>c6!ZePK14M#A|qZZl,q=-bys.R$' );
define( 'NONCE_SALT',       '+h _^*l}kH<!51R5wfaDHS1-PBfz22i<h^=!%SzV8`5YO:aUYygEia7Ra@Xv w4B' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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



ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);