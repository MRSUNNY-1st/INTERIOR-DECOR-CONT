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
define( 'DB_NAME', 'interior-decor-cont_db' );

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
define( 'AUTH_KEY',         's[+aTDA6.-g;7T`O1X snB6E>(~L(/zGoCI`b.Y7U4f_/O4=}W`RY.wHj6Pk|$;!' );
define( 'SECURE_AUTH_KEY',  'Ftu?PRG?<Gmh3,>w#]D~M0AE_8{<nlR mD]0+(^[<trBriE+8MF=(6_ ?*<)wjd.' );
define( 'LOGGED_IN_KEY',    'Z$6??#$ybdrzPF,2.%Go;hjEV2<|~zA7#1`2uov}[83q*LVU]zr},R9!pSlW4V,w' );
define( 'NONCE_KEY',        ')Sqg[tUs;[;:tkR=oIA!X.9IprMc?L009@J^_vlv0&[#h3xfk? IHK+=UbG&~w!5' );
define( 'AUTH_SALT',        '*{5RX0RQrRL}|Qp =t}VhdNVJ4nfK@_J#_P3I3)w;?-%kC7]I``^.bw8JmnsmmDA' );
define( 'SECURE_AUTH_SALT', '0HwUii=6;iK^h/sHV~gv{Tma$sEN$Zzo^Wh:*<h6j9ln:?3E->XZ5vQH](/O-lY>' );
define( 'LOGGED_IN_SALT',   '^n5w4yPD,N ~pTK)N4W.]Ilrc+ET(TbzjHfu/~Pwl(kp;H^Wl6dvN]4ZO0H[@dEv' );
define( 'NONCE_SALT',       '@y:S_Ww{B8kGfBet8!v ?PYD<yO6ym1ci+dUbjdd#zUT$*YcE]/+oy@g!cK3t$kw' );

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
