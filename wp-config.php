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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'J38,E_s$jXgTfhcfcdN{pvHBt2USTJ^)g#g 6}:Vi]XwGB4Un=^5 }aIadf-Fg$U' );
define( 'SECURE_AUTH_KEY',  'HG!.GDdJk#gggG~w:Lc.vkvpPbYH`]?xl~Ckbc6#N+wOFf5KDBh)=18&^2fni?H/' );
define( 'LOGGED_IN_KEY',    '#D#k8NbRLT}I,UTXA7(4U,~u:4f<R3Ydc#dmMwS:J,fQPeXTakiZ<LzroL>PnV=r' );
define( 'NONCE_KEY',        '$:]/z.PL^_MV6dw3=yN]f&VuD+=K3%`O]${FXy<OQM>@cWB,7>pl XEI/@(:ya6=' );
define( 'AUTH_SALT',        ']8*JNOINRCEPZAoetbvf<9ks*s1cx?Wrah:/(4K]>qxMpOZ-YEE2:XkdSK| txQ{' );
define( 'SECURE_AUTH_SALT', 'prNxgA7mV<H|<RgR$SfJHh)$e^l,>|Lrii((ezZ ~5g^Bv*&1|,Zfo`{ROE|VK8W' );
define( 'LOGGED_IN_SALT',   'j}VR&Vj_c=M[(x4u^1x/+OO%Fg7>*0<W}ppG}G=E@K=M7!C y015V%!~!D{8lZTf' );
define( 'NONCE_SALT',       '=kIO1M14R%fB,B5;i2rDxY-l(I~L2[9bCMl1k9w#!,PsMJ$w[qU=tS^FLx,M1TXi' );

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
