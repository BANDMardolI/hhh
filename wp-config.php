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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<M8rv_|(q30@,6be@Z_WE+GTd{jT]ee]n+ofuy:hlu[/FM}=.2karc]h3<7Mp[n^' );
define( 'SECURE_AUTH_KEY',  'UjZCgL]qD/hacvf-`hE(g^T4Ur|o=#*3KL?-73(u<Tz!m=B]Au!t,b+81K{z%AQg' );
define( 'LOGGED_IN_KEY',    '(qhFWRV)>WI[K1uq7s):ZDdWjxb_Yv=I;I92Uv_V=h6%^j&!<@&<EzS ok(:%N)s' );
define( 'NONCE_KEY',        'BoNe`W:R~fxC?{XbJ-6,3B>+sGQ&#VzY1[GI@/2$;FuN`ZqpF]oV-Owf5PjuKXl^' );
define( 'AUTH_SALT',        '~<@57#WH.8F=>%Z^3WL1M^~H,sd_K])5nyQq,O1o%Zf5+^H{p8s{/<UPkLB>/q/9' );
define( 'SECURE_AUTH_SALT', 'mt;+<<h^Q[|`pm*07qVFUn7B9K+IM_%l%N=N,AqFr/StYC8h5mVVUx_:W9pS3R{,' );
define( 'LOGGED_IN_SALT',   '|Rj1&sw+C5ABkIIH+0S}WRoM+|BDe[#V*4x?u#% U>_`s9(e^0agM,R0/;2rlzEb' );
define( 'NONCE_SALT',       'Du_E]BenxHLsfy,6Z:]Vp:@mYT~aO;pe44(-h-F#va!T<`UuxYFxK7C)7t;sox#e' );

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
