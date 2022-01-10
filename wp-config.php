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
define( 'DB_NAME', 'wordpress_formulario' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'bdW{BP:M&!qn+A-^_>l|_h%+-/H &*n%huvtt.QIjR8yohT5(hsnVld%8ivbR7M%' );
define( 'SECURE_AUTH_KEY',  ']^NEO !/m!wwz+YF?33wsK2P%A#H#FP M%!^vY0>tfS*MC;GN2]G)B4(~UQHBi!d' );
define( 'LOGGED_IN_KEY',    ' L 6Ae](@IyL/m#kba+zn;bcY.*l~adU,AK}12uU[S7ML+&z?w8FR&I:UN=HS<2z' );
define( 'NONCE_KEY',        'LAFy(j90^[Xx18E$A/-RbZ @<235<]- QSNC?C!Z--/?R~+*Y|<oY4&6)e>~J{:~' );
define( 'AUTH_SALT',        '5T ,|D8]];~qY-~#(Y>4x5e,T  GiO*pc2lsi1FdZk7][VNquW4{<qd3xV,G.T$9' );
define( 'SECURE_AUTH_SALT', '9b4*,BH=3wq6Kt}0c+bX+fz#kSGiF)q[k5;:BHG=9m FR#$5HZa!#ZE-Ilkp7-5O' );
define( 'LOGGED_IN_SALT',   'OJ{gPhh }n<I|bbxCs:kxXqH9k_FnY=]v2?u;*[/v/jyyx[3?iB)Irg>Oi$j$nNY' );
define( 'NONCE_SALT',       '/Jwa%6Klu0}aGtq^ rQD@kc=k_88qt(N~od3qg9>x,xGjco+RM@|AhP-5H](:?27' );

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
