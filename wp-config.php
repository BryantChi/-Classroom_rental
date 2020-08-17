<?php
define( 'WP_CACHE', true ) ;
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
define( 'DB_NAME', 'u634275416_e22TH' );
/** MySQL database username */
define( 'DB_USER', 'u634275416_IpAH7' );
/** MySQL database password */
define( 'DB_PASSWORD', 'blrPcoivMe' );
/** MySQL hostname */
define( 'DB_HOST', 'mysql' );
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
define( 'AUTH_KEY',          '0E[_g6:;mV1D3-/fa9%P=h[=R|8+q@_.e&{xTW`XApy]flc;z*~|<;hWOE#Nv-*A' );
define( 'SECURE_AUTH_KEY',   'v0biL~fe5:7i1^[AsMCmw XA!cP?|UfAnmzCAc.+0+.sq|hlXhBE^A1c~@vw8o$b' );
define( 'LOGGED_IN_KEY',     '(0l,cl*H!D(3tO4g$j`^M&F}#@HhcD|v}Z/hjk?bN_5jgffK=;>>{JFhpE?y^)dE' );
define( 'NONCE_KEY',         'e2.3K=}7H&c}CE>O09$,dOhQXIB?R^.^jq`tT$+}jT>fF0,*=MnsgoPNONhigCwa' );
define( 'AUTH_SALT',         'Osxya<.8BC392Q2{=`^a^d2^|15Ahvlab,P:;7.zpqq!!,Cxh7swC#i.c~N;=TrH' );
define( 'SECURE_AUTH_SALT',  '~JG6]2w$OF;2yV@ UXq{f,!3+5,<a27-r2`g^M5<?vXz&R#0)j+vvMZZw~I:aT#7' );
define( 'LOGGED_IN_SALT',    'fG:b8T=bp,HAzTQ0KP=7yV%CcU-!za$H;c;{](JBA=vS[8>`;JS=GE<1XsqW,}+H' );
define( 'NONCE_SALT',        ':UjxWJZre[.QKF764p*hBv5~WDQs %=2D^h=d<!Ppw{-k)Q^GbXkQD1fyAM6y?eI' );
define( 'WP_CACHE_KEY_SALT', 'T+r+cJMuF@g[^<(2:SWIj3U[EMc0,=^6?a84+[BQaNhS}+zsnr_M8@`c1NzUu-}w' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
