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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'socialindia' );

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
define( 'AUTH_KEY',         'N:q,L7J1fT0+Mo)5-pR7 T9$ GqEY.in|q9Owx?a8N4E7K NzrHe0&ZYRStyerKX' );
define( 'SECURE_AUTH_KEY',  'J1npI]^/b`TFK((kSBDpe!TD#7x<s_=x:WGgSf-aB.SChgfY3D!>G3~mFHY<CVzV' );
define( 'LOGGED_IN_KEY',    'F;GY>+FF-t,A+?B|Og0X4CL}s^9xfE^,kZz>TSX<LWZlq)Ln=-R90ft]C4|/gYFh' );
define( 'NONCE_KEY',        '!(IEj_<rK[D|cPAy$5v#z_ygO7:%xVkf>JG`rRdA!r->z*Mv8BhbDJQC7DLZL|54' );
define( 'AUTH_SALT',        'g (=Cn3,,MN~^Yf!*%v1Vd|?ZDdNGBh*3bzyFVJkPp{epYU_t~pKz]kX`U?Un]B[' );
define( 'SECURE_AUTH_SALT', 'OU%Eoo~0%<^}mD/tXZj0A`l_.*x}IwLTf1=-ig|B{=6{XIvx#CPT.kK)Vu@P3b9e' );
define( 'LOGGED_IN_SALT',   '(&Dr`s?i)o&>7665AoFJtA: ^eVXHv|:|7&di] ,r^nfxH#Wy!&r5Zvo)#EJG+@2' );
define( 'NONCE_SALT',       'b|]H1wGb2^]G}HIOUqz@ofWd}7rMsv+wbg]$_Z)j(!;xe X;*D3Jymr,gK5uRyMA' );

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
