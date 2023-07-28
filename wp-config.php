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
define( 'DB_NAME', 'uiexpertz' );

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
define( 'AUTH_KEY',         'Aof#/;_d0{Z82Fo-Y C | 35P@0ujXwnyMhR/%`4@@5Cht`L!g=X~VfMsxBSt$$;' );
define( 'SECURE_AUTH_KEY',  'lL0d^ifbDrw>[k>_KHua~/EQ#S~>OoM^fMU1ae2:gxQWIDU8|8!H%EGAA34325,n' );
define( 'LOGGED_IN_KEY',    '~hwYO<6Ws p26AV*;>z7mQJ~g0exxZ)>aU(FoE}=Sy c),}9GkV8OKz;XX4QHb|P' );
define( 'NONCE_KEY',        '^NU:bvEJ%d[z]39gBf:Di*TZ[ou#<4T>EX`Y4Yo9JO)6/&r4JS}{})xFX[(!*/)~' );
define( 'AUTH_SALT',        '($d?:WOJ-fWHz!uA!]0vdOJ;S@C_wz>|U=(1yy<$3a#<+M9<ry,OF6A3?F+*a9)9' );
define( 'SECURE_AUTH_SALT', '_-w,pPOKvJJAPS^GGIS%Nu(:5+w&Cq6se%cIy&?_;is~w5uAB]~r2&J#88,_Fi</' );
define( 'LOGGED_IN_SALT',   'X6,>0U,85qWjrp6$>i3q!Zn8=?wUh !u9nGsdG6Xqp>8QLW*ap~6lvK^MMx*ty7!' );
define( 'NONCE_SALT',       ':%R(^l4e2Mi+9!bRR^07}1Kfocw32u%_p181}C7VKz|o|LpaWo;oBlhSd:D ]~&1' );

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
