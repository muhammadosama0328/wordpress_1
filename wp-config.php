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
define( 'AUTH_KEY',         'A|uiFc5_{/[;=_4NM!7c2NK(H%MidO+ j=AR},dc,Ks;MYDry)uiMh*Fl7 LlX<Z' );
define( 'SECURE_AUTH_KEY',  'n29z@}aS)DbE:7e iAPZ@#sVZyi|tth_5nd_Ggo;Na:3dC1*a+]Z+81QNH.!0OB=' );
define( 'LOGGED_IN_KEY',    'j#YneHd<$B}=jeo%ylYgnK}b#bK$UP6-s`:Mc~z*hW_!T4GUni#KS<Tib9/,l:G2' );
define( 'NONCE_KEY',        'sfjBg4Jh 3*=P$%bNz?&bGPmSwi`OMJ`{/3_~r>Gl^,K7A){0A1H&U8(gO;W9wdU' );
define( 'AUTH_SALT',        'Uehjoc:`1.O,-%$rCRF4AOT+sfZpk~C,2JsPMV{Aw{_$x.0$eM)Un.b%r?]FJ6iG' );
define( 'SECURE_AUTH_SALT', 'VO^En@o-.}EQzZ7Ho!GF`pcN1bf(Od8I.T<;RJM8Wqk&sIL*e?==qG[tLy<?mq^w' );
define( 'LOGGED_IN_SALT',   'EUoG,Iv~R0XbR`DA:5Oa]oy%/>!DD5-2eG*:n}GiTl<0E|E)jqi9*V5:$_]-s*lM' );
define( 'NONCE_SALT',       '!EX+Np>T^4vAh7t<^xct)I%/3*p;CKN5|or;Uq,qmrL9, ~uvVV>: pb^1<4*Eav' );

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
