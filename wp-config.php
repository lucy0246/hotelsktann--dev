<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'lucyshen_dkpassion' );

/** Database username */
define( 'DB_USER', 'lucyshen_dkpassion' );

/** Database password */
define( 'DB_PASSWORD', 'qbv32dhg' );

/** Database hostname */
define( 'DB_HOST', 'lucyshen.dk.mysql' );

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
define( 'AUTH_KEY',         'aMScFFY [bl6mU@.SR,yyK:/fF4Ur[)y,IH)eJ@|Xie}T{?UrW}T,Zb7QlL(TT4R' );
define( 'SECURE_AUTH_KEY',  'v4l5*2@!D3~+BC+4xl{.*KWpND$qTDT?Az}jFV6|#)OkO/zNv~K$2NvmbsR]c3@v' );
define( 'LOGGED_IN_KEY',    'ZoyX<WBaGX:T&K:54 =!QEr~JG(:LoYNYDx/ }pUb! dqE!CtLUSl6w|1wqCCE,R' );
define( 'NONCE_KEY',        '/8q029V!rxRa|=>?|}-;~N9(><c`B EijbN^@0@]b#AFxg}u#qU4urzZSE7{$ytF' );
define( 'AUTH_SALT',        ':0)Th3u{VlNbnZ1Bo(mPMksw ^=1)JdsG-oy1s-L+) v&wTs5UUmK&ZpVCJpx61l' );
define( 'SECURE_AUTH_SALT', 'wMu!NzHg^M6SwBByPOgO6(]50Yh^X$?*PIe]Djb^&Av<Dxit_W5 R4o`335}F.d ' );
define( 'LOGGED_IN_SALT',   '~C7sCEZ}7;TxJD2~p&uPOz `|(XN0,/vhTYg)QSuy3oZ4Q%+[jVEEoi,%<q`T=(1' );
define( 'NONCE_SALT',       'S5O/yjS0UFkCQIjmDk+*,,la[XWk ?=~wsMhJTY`Qj26v>B,pvez1Z{Ve%QX+4z^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hotelsktannae';

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
