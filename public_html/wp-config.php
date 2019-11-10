<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id10901912_wp_71266ceed724ff01269f0de8b375e9c6' );

/** MySQL database username */
define( 'DB_USER', 'id10901912_wp_71266ceed724ff01269f0de8b375e9c6' );

/** MySQL database password */
define( 'DB_PASSWORD', '545df765bf79d4e88ae48858940c97691e4751a7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'x)@#!tYZB_54(9m[qclZqcgG[y8)pZ;yLgW(5>L3_3H@,TcIqZLM?8zV#2uJ+Vm@' );
define( 'SECURE_AUTH_KEY',   'py}m3IF(5x% ;gcJYg!&npPVO5>9eo l=-dMa|kv2tM4MNzq}fd_0YKWVwk5x~?A' );
define( 'LOGGED_IN_KEY',     'ziq4}t,7+qa{3h}?Y/A2mVQ#RZ3%&GQT)(/BVE0h2,>I$sy`/Hxm~e_NIptOff5n' );
define( 'NONCE_KEY',         'ZCThq+R`j&T!3$85besB[du)(W2M%;n7+dai$oi[/7xw/8Dmwqpw!5[Y)pC}E(r4' );
define( 'AUTH_SALT',         'vTVaeFClhiF(e25ExZASXV@yx^01?w1o)2(?t?NZS@&]_Cpmj,8cIo[=r`sl(po-' );
define( 'SECURE_AUTH_SALT',  ' Sf2^hQ#~hl0vT9>09hN]E&RiRDhVNtNHgpBU)*8KWG9_c/juIsH,T_H2AQ h{7D' );
define( 'LOGGED_IN_SALT',    'gs:J/Z>_D|=>wz}t#}N(;B.i=9^l+|:hgR3=~>|qo}h5;l:Q;11N2JIqZ(8op,]=' );
define( 'NONCE_SALT',        ':&vjeJ5!cWF,e!gze+`jf6 O0X$v@SzC~gA9dOHu{dKx+Qr/RX;MQ3A_[l-L,R$e' );
define( 'WP_CACHE_KEY_SALT', '9$wL^E$ACYV@!k^jeN>!DMlhUegO^NZ>6fPRTB&(5QV>G~&UN(8;T8,I?$ZiqM-<' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


//Para que muestre errores de php para depurar codigo

define('WP_DEBUG',true);
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',true);
@ini_set('display_errors', 1);

//Para que muestre errores de acceso o ejecucion de las URLs

ini_set('log_errors',TRUE);
ini_set('error_reporting', E_ALL);
ini_set('error_log', dirname(__FILE__).'/error_logWP.txt');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
