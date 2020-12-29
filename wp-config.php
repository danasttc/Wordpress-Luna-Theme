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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6vw;H{*1d0>Hb: [ni)ZRCqx_0iw3zG%/l^.b@rU^B`-vuQmrA,3Y8a=6U99+)%}' );
define( 'SECURE_AUTH_KEY',  '$Oa-1tWWBd14[2ppBQL>,o:k_K~#Dy4u;,c@n]-.GbjVeSw:b{lW#<x81pZdRbt_' );
define( 'LOGGED_IN_KEY',    'tf[$9yUO2Gb|:zqYYcx(VTmjy/x/is),A#^k+LY|-7A>,Rm)Zu.c{haUNTJ&b7@5' );
define( 'NONCE_KEY',        '@}aaLdZ#FPM+{R>.@BlX&u?-VcgZhk{p?<l.cg^2N?tC>,HB?mwGMuYBp6~vVbTA' );
define( 'AUTH_SALT',        'G_qExt-E.gQHtlqNh-~msRbrS%U~$Af@-#gu=}2j6^<-4^:8KX<GUlAYu{Wa 9,R' );
define( 'SECURE_AUTH_SALT', ';>?jf[Nu-zX70:5oh~^.Cr;^juQt~FS98>Ff/3{nNE0d!RoD2I^{@uTQ17xr3/(`' );
define( 'LOGGED_IN_SALT',   '/z(?ou9Xk3-qW+tE(XW1Y~XeIDwm+;?9%WD^(y$A@iK2Y!sPu$(vKDpsRi8ceYbv' );
define( 'NONCE_SALT',       'ZTWh.; |#Dug:o}dylR uxP^.-J76Vy}6=$)BHmjx~.!}iT~HW?w41!IwPQ?NT+-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
