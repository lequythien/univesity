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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'university' );

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
<<<<<<< HEAD
define( 'AUTH_KEY',         'F6I<]<zN}h-8}Jna>0lKnd|Z#Q/]W}pF]usqlr5RV(=qP=.?6ZDz|sZN?3F.ixVG' );
define( 'SECURE_AUTH_KEY',  'qK3`P7&qDjxS8>F,N+9x+2X0N&2qE,iP|SZ;3b?:mn2!b20?WiH20]q]n:#FAL$-' );
define( 'LOGGED_IN_KEY',    'l,F:K=E6.kv>s T7zSKW?S=)>BNd3$y(u@bAudtAIT~[2+ADZ0dNd&Zfc35T?wc=' );
define( 'NONCE_KEY',        'i~ _t+SUOa._?_us{7>BEw&XPCb;7rLNwK>e)+OH/xqsO;TR7,jz`1O-z5oMK>q1' );
define( 'AUTH_SALT',        '^O^(L%@{`H|e53;WMVnHS.8|[HdtQ,HAs0q4=5KpFB:f GwbL!],)GfsR@fwC6Jw' );
define( 'SECURE_AUTH_SALT', 'D|SC)nQD;DESTA4]hq./%eGmGUSOD.0L)tyL-j~kaHd2(y_Fv(crk;8f f`TU)T8' );
define( 'LOGGED_IN_SALT',   'u5T%QFFFmgUdMBW(HGRS|wcaT38|Ji9>sma7 7Jstm_tS(3gY:RUQ1<x=:TmOI,(' );
define( 'NONCE_SALT',       '|1Oc@;s$m@%F4EZQe 5KtloD1*:Xf)d-SFs*um#.KAUG_0hR6rFTYXVJW&x:i/ V' );
=======
define( 'AUTH_KEY',         'Mam?)Wh<*t{R2e]>uw.D3i1lDrA =i|{Fz:CQX1$/0P-2D[vcIu]^O2sK:tMv-OT' );
define( 'SECURE_AUTH_KEY',  '8!Ttajgw>vwe<#s2ve/(QQd<*{9R,t1%lQ<|b)nNL<A^V{K4BgenW%q^@;)+V#`X' );
define( 'LOGGED_IN_KEY',    '[8c;0MJw?)ot%bTgZxL9YORKR5Z?r.N/@^;KsJ4q0[xE1pM}$,jKK=*>$()1iLa2' );
define( 'NONCE_KEY',        '*8x.o@_syHY1B;$/zIsTuPikvkY.!bcrKDbI;_pKEXK,=YANxpTMMn/bVZ|>aS>R' );
define( 'AUTH_SALT',        '8cP r`/YdzSsb#Ccz6gvgtg5:>@nEXtH(r;CczC`:%4t,=7{9T,]DPamZilmTir,' );
define( 'SECURE_AUTH_SALT', 'SHRs0A#!Ei}~hm/P)Dy=jeZd#~.f@l=i_{%.%[DvHgcnB&-K$-uy1p8vAcI):09;' );
define( 'LOGGED_IN_SALT',   '*$UUQl8`|~<hdGpTj-iXK4yGAu=zrGHD8^orj:l[Cb.45wF9A;[e?E!@q2 nR+}V' );
define( 'NONCE_SALT',       'av*DK>oI/K9yYH&GfR#<Syu/;&375v3x?g+=6d*Z}&u>JVIxd8tq=gnk*:cte<#e' );
>>>>>>> 7e57a7c (first commit)

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
