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
define( 'AUTH_KEY',         'A{K_yxh8F},_kmjDL068v&Cxx9[*]uQ{NaorO!+(_p+a0yP,$PMNHB [hu*?|< {' );
define( 'SECURE_AUTH_KEY',  '{~-s&&+ET-0Vhb4};b;dUiaUU{K?!Qi TJ/m2)2nEI<GEvqaXW`2$?c6|uNq)Az,' );
define( 'LOGGED_IN_KEY',    'E]S-ymm:^W<kPHS|c1W`Qp?fDu*4H^FO&o[w|M%_n/fZ^<:aA%u/h9IvSu7+uIf[' );
define( 'NONCE_KEY',        'C970V*kb*0p]CVLOb*)nPZXm)W5J<kEezDB_ribR:kyD/$z`)y=T$Z#S7?{p6OkP' );
define( 'AUTH_SALT',        'c~-lR(]<oppH /{WhR_ujh9~$&~x0Y;}?,3d$eIFT@`-.CzGnte~{>_<[q|}Z^X0' );
define( 'SECURE_AUTH_SALT', 'lszuL[`}fFtAbM|zzbG[/Xk=p{73sR$[,ZlX09~2uOf,`=PQmVOuzZ;vE8w-7VXT' );
define( 'LOGGED_IN_SALT',   'auR/5?D&MVYl_6or*!zBm0lkHdCF5vjBfX1=Aq&mB#}.!`W&Ngp7CADk8qV}T?=&' );
define( 'NONCE_SALT',       '50~jVWq#FD$Tc2RgQU+%y(_?bY~Pup/0;lb7j4:!ofmGmUkRF-f QT&I,YEh|0[ ' );

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
@ini_set( 'upload_max_filesize' , '500M' );
@ini_set( 'post_max_size', '500M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );