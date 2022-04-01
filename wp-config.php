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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'I^|-F7G>i^S:w7R4Sg:J9K%EtX()T+@4V7g Aizia*HVtK||Se]P6J~r[N>j3?7G' );
define( 'SECURE_AUTH_KEY',  'YS2U`|*!CX{0Cuy~:( .RGh#Eq|r}pZcW:Q+]bvRQ`Gt1r+Bs@U%Us+l(q%;gh*A' );
define( 'LOGGED_IN_KEY',    'fj*w6`fwYB{}[,165%Kz/WcAYVv_[oP2Y_s^[5vKqGrnm,/yK[}kQNNO6#7X)mF1' );
define( 'NONCE_KEY',        'C,7[V41+9rQ++%5a8y=9BUkbnf Hdv6iI[(6cR;m,!!*GL4J8%tgxF{:|C]5)~AF' );
define( 'AUTH_SALT',        'rGSN]k<:nT7;*oo$IYP]M7J&HkD{|#z9k$1)C|7lio8<`F~M^!?I2rOLC/$A~|VE' );
define( 'SECURE_AUTH_SALT', 'm/?KFs!s$+NDE7rf/pNM8H;i=w65w+Xn#yw_3b[|Ez|_ix%L:+$YMaq:*n}]R+9O' );
define( 'LOGGED_IN_SALT',   '+$qjyeG9nb-2X-K&,fRU=a%<n-ZG]W`s%4sV<ytHX5w(4rzHke6k9,o?@5TOF/i^' );
define( 'NONCE_SALT',       'k@8/RlFQ05_QMHKe-.I*,>%P_/UN_$+u)|[+10.1z/CiwZzDRBcX1 FpZXY+>d5(' );

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
