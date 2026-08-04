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
define( 'DB_NAME', 'wp_database' );

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
define( 'AUTH_KEY',         '8$i,7LDyyaP{.K4p:<QK?[1JzNmoX cu]m&dkH!+Hj]0X@thd>E9A&EWISTm+UrG' );
define( 'SECURE_AUTH_KEY',  'F{=ZicsrQRXeR}}iWKKY.rU$Vsc`%qJQ!Tf>(Hyj2f.VivXbLo$A6&3{jereMMNx' );
define( 'LOGGED_IN_KEY',    '}U%I~_/+vFe}&x0 {}IoR>sK[ujO:pz:-A[@)][B87cQgopX,Z;b61cGMa77WRCC' );
define( 'NONCE_KEY',        'ci+g+FyU.}dP=0z(~=DFf&WLMJNIC`A0*oE$mq!GQrz1mOO)A{ix7wdM`(4bv*0L' );
define( 'AUTH_SALT',        'rIF]m;!n#gYQg7,-8vO<Jj>:p?:lMcd6b+|.(3{@{p84B-csIG_28r u]zt3El-~' );
define( 'SECURE_AUTH_SALT', 'el#9oYb0r.cl*{rJ%?Qh.`h[X=kZSaKWW;nG}0bOz}n)VU{u}UBnzu{sdJyTt!G8' );
define( 'LOGGED_IN_SALT',   '4tPUJ,VPqdU:HM&g 2M<bpPL?tD&Od9+C$)k <=N;YEkYXrUK<${_<]IY$QEL1lg' );
define( 'NONCE_SALT',       ')i!&_SR,rUu7;H~UyZ3fpum5 %S>- )^nOkB;hmye[r`oD/_-i~bt>ajsE&~DVt4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
