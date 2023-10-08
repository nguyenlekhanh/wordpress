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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'T^hhAj{d2hi(O:=ZD]#&#M>:@UuA`!lLo/ZIw{GY[AP}$2sddBfXNeb`{ak7L2&-' );
define( 'SECURE_AUTH_KEY',  '|c[Kq{VSW#TN>cU1[O!m%t,CpeJ$1Dugi~+3I$#r64*w/i4@:>LYK1p;F~^[;v<#' );
define( 'LOGGED_IN_KEY',    'P!-o+$;X=Mbh3Sn9pSg]46h.0}[37eV.$AM>;XA;NW40Tkcb8 B*N)8Q|Y^Nr7-v' );
define( 'NONCE_KEY',        '^YIxOJuFlr[$@cA9^Rl9}b/6/QJE1 D4zJ33M?xd:N6@RPK&,&?f%Y6%c=uU*:hE' );
define( 'AUTH_SALT',        'xJF @~P+E;gx FO4D&^.=4-7wCR,&!rw~mw<gb|TjuA2s%JJwj$bF;1z$6n[-~T_' );
define( 'SECURE_AUTH_SALT', 'I&o)@4V _*|!|1yE3o_aIgX#&2)D4orS59rJ,&fQ*!T]TaFFyZtLb+@x#o-Dh{Pz' );
define( 'LOGGED_IN_SALT',   ';gk}!S,_.^);_6:>qEdrRo6} Ak[eif2qM-)GVl6%Qu5p]HMJQG2+v+kFJ@p&j+|' );
define( 'NONCE_SALT',       'LYX<<j@t&]68N6zW]3<j=spGQsm^qS~2QWoR.C9@-D g$[9(c7U%RTNZ M{!yl__' );

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
