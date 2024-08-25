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
define( 'DB_NAME', 'e-comp' );

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
define( 'AUTH_KEY',         'd?;)an)])lU~sJ;Gtra[uh5i~:vq4J[?C_8@ {#pV/dFq~tW+e4#PJEfqz@ M<8w' );
define( 'SECURE_AUTH_KEY',  '_h}((jxD-E@=Wpt<?^oNTu<{:*Qc mDy7XLY*AiYvTn^j~l<eEyk&)/V%B#nbm;u' );
define( 'LOGGED_IN_KEY',    'R4/,bk#tU0HC;};<lT8<LV8e{Z*5:)d;XdC*m~4XcY=M7Zy?850V]?iIQP%V5LU0' );
define( 'NONCE_KEY',        '::QK{FMb,^q|&.)efVx4UrqAOu%`TDQ>3xW=h{qjtf*`2#[0hE7rR-_<4Bb,?Wma' );
define( 'AUTH_SALT',        'N]p#//~:M1`TN*anj#G(;d/>b6]JZ-b2+x`_=ddTeaMn[Ta|MH@(Q7,+|`c[zWfh' );
define( 'SECURE_AUTH_SALT', 'Y~Dn/oPp/}I<9<Ed=9@,D}T`J<St2H,%+#<`YP*XM; QuM[/V) adx7ylL5ig& h' );
define( 'LOGGED_IN_SALT',   'V0nF<F6k>oy.yak[FB.0DSL&xD0kbA42biv_MXK;-vC0P3M%/b-D|U56>tL<_x2N' );
define( 'NONCE_SALT',       '`{c#>EI1Dy& ,>gsRbKf*&P.Lyv/ShLq#0],Ez#F:AmCIMnUodq},;Jv@s`buAw0' );

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
