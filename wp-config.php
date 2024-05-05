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
define( 'DB_NAME', 'wp_lks_cms' );

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
define( 'AUTH_KEY',         '9a /g2:Nz&!i({lgtK*nM+}TO%Tv%+LkvNmYwgZ]b6d;9euk(D2CX1w_11ZQzpob' );
define( 'SECURE_AUTH_KEY',  'i&l(m%Uv(@`ytu c*Dm)gEw8UY.Va6# Vu=3|=Mzp>N/<gI|R1hTQ7@Ol/2(}5p8' );
define( 'LOGGED_IN_KEY',    'U_A.z8FB{X<1LV/|PP@@6t5YbKCWaVy&uT&GM?I{O5~w6[8Y0itcX*KmIx7~)rVb' );
define( 'NONCE_KEY',        'UDKdZ&C4<>29KL[M;GZ13g`(H_+wit]FG!^M:K42Cpo|OTLAT@=6OP*A2>6?rg%F' );
define( 'AUTH_SALT',        '.;.Cl_&}SzP(^p>SA|_aZXYFNYZ|] /I4# s>?w3;(lOR|oa-J )AL$v:m|s,y^Z' );
define( 'SECURE_AUTH_SALT', 'T[5BB5BTzHw_H,RtTn&3-hn@a4OOwh|u*>XdAP5H6V&jxkmt-(nzi[|Vog*W*w7#' );
define( 'LOGGED_IN_SALT',   '(+Cr/9<QaP_=RUT90=O8?5<$%?%J)Op>PiT5/.&NTAw{nro>T?m~Q -!_]P)23po' );
define( 'NONCE_SALT',       '.abyf4fT&O-1zHvh`E=&^L@vv{UnD<ha]0xN#3-YL7F=t.?y}ga*MUtY6YK,j-^6' );

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
