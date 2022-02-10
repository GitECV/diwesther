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
define( 'DB_NAME', 'panaderia' );

/** MySQL database username */
define( 'DB_USER', 'esther' );

/** MySQL database password */
define( 'DB_PASSWORD', 'esther' );

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
define( 'AUTH_KEY',         '&&V^;}p{f*i<J[x~dJ5Re?,QE=!*6jj:]-!8vJbr,e)QW$fFbt;b`BFweS_WOC#s' );
define( 'SECURE_AUTH_KEY',  '0Z8rh,C}e6[$xv]az,;lQ/ru|Ej9Ph-Ba;CFo4=w@zZ-j|nT32N,sf|F(XN[J]1B' );
define( 'LOGGED_IN_KEY',    ',{F5sm.(V}$P(-yT[j|%bfY:R<h;[?,<r<L(udEaC9Vx8!Fx 7Uomd.dS&~Rb#46' );
define( 'NONCE_KEY',        'Z_=%f4_GG-5M}^6jc|NwN@uS=o8#hb_$o1@VKn_@J/Ll.FD$rDTMQHDPo!I6v=^|' );
define( 'AUTH_SALT',        'r3<4/fqQWX/A&ip,s[Q&+_zacB#V@z.VAqV5M+%QH]eU%y0.+TOgcd&`DuIb2m3_' );
define( 'SECURE_AUTH_SALT', '~9]?Jnr|Pp%9}H-}cw!y_X]ldB0Pb+Zw4vcFZS!cHVvbX@$4eSS.Y!yKdZSWdZJD' );
define( 'LOGGED_IN_SALT',   '[N=}1+w72j;)CWtOPaeO !kapCSXu6*Fb2_wUJ<-Y$w4>>>Y8wJ=I8#kUXB2}QY.' );
define( 'NONCE_SALT',       ')Pi(HMeK{SK|yG$>N.b5GJD*T/Ih}9yo7%k<?MumeLRgfb5yW/PVikGMA@R0P@R)' );

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
