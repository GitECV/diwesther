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
define( 'DB_NAME', 'jugueteria' );

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
define( 'AUTH_KEY',         '}p4yj0j8#c6F5L2t+Kzi=@ y_Ew}##]y}QIg1j=Y5E#NAMI~o3x60#5/J)qJGM: ' );
define( 'SECURE_AUTH_KEY',  '?2G=kK[pX:wP#Ke`aQ!+N[y1Q}S `JRr[M@dW57o9qR~$D#v][exhW<l]k$)3me!' );
define( 'LOGGED_IN_KEY',    'J~]Crn^0EZP+*yec)}Oo,sheWKAjp@W72l?ZG?p*XR#_tMRJ_rQnP.^%Mf)8o|~B' );
define( 'NONCE_KEY',        '+*eVVt_,w_XzyYD>57C.`?V+sCyTM_VXb5BhcQs&t+?nIxqDa!H;!P36^6T#=OI~' );
define( 'AUTH_SALT',        '123,~0>f;)bpt Z{Q0V6E+t65t(Qf7)ncZ>ee26Y@2]--a=&7UfP$sM],d2Z]KUR' );
define( 'SECURE_AUTH_SALT', '*0|@$u*Qa)b1#_9BfzS%|_i3RJfTnz=VK*:MC<6OG@Dj&rTd`}pO)5{~6HJhI)V0' );
define( 'LOGGED_IN_SALT',   ')041/6kYLmeVaD6Z)HUct<O khq=iH5;;|2}dBZ [bz5>rq;FbPW%}{d,bI)3Sbv' );
define( 'NONCE_SALT',       '= ut0p&8]~vmJVK25+fPUd2@y@Wg`r lt4],~elZs}3>Y=tfu0BPXCuLg<OB)ONg' );

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
