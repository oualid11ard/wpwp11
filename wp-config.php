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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'U9$D)QRK;?YsDx;JkooG]2p(?ZCV0-tW%iOPrxzFPE`BP9zhU`4C.icvb^0H5R&J' );
define( 'SECURE_AUTH_KEY',  ' A-MH)R;&$@u]KJcU:@l;#hs fc6_8`ZJa,K>Zlj~`A0ypmfWF;l0!(s.V*^I/|0' );
define( 'LOGGED_IN_KEY',    '9|fNO5M^Yaj X95n3R$*Opxbcf?U<b-s:#M=v)l]<+Z*2d;7kZtqjJ=9yIxN+wFA' );
define( 'NONCE_KEY',        'AfOn6-K*sl>Z!2/%$lKK&~<|x}n]u1*^O|+U$;Qwt[ZTlV99M~n-0.EaC-7DY}72' );
define( 'AUTH_SALT',        '0>m8x0Xecw3nS*&b2TFg!m8h3ztW^jx/DxLw(/Q|Jl*wYjk }8p|6z$%9}(;[9eI' );
define( 'SECURE_AUTH_SALT', ')N2rJ0BVnX{B;w}=#i32&tD)a*j`R*Qos7vZ09lz[74@Xiz70Uy+(6YG5(VLAt!e' );
define( 'LOGGED_IN_SALT',   '1Q[u4R+G^9#?yCJT=/>#bdcvs ,Pk4ndX:<lN,:H$%M!4G;<#xrbUk:fVi^(Qn~N' );
define( 'NONCE_SALT',       'rk-v%MGDWa[i/+$-!?hN4Y,$L)d4UCR&loHio#F:,:rKh2Wkg<XS8yK+fnABWsn.' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
