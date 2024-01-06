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
define( 'DB_NAME', 'laksharaportfolio_db' );

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
define( 'AUTH_KEY',         's(/vYuUjo9UiYS:%O[g}Zbr5I2AGb98IJuc$xW>Bd&iXwvrHzc<e`>-54 u`#]jb' );
define( 'SECURE_AUTH_KEY',  'T{9`LSUnWI3ot(CJ1oQ$b(.u* qAwMh@MJ7It5&:IpGuIx$v4N8Qgm ^a3I4?WP!' );
define( 'LOGGED_IN_KEY',    'h&$%RjR9Yv-qI<RaDq;$HrYT70H4CSuI2w I<x/=]~+!Zs6-m]|[NUM6%kOl=SBL' );
define( 'NONCE_KEY',        '[d-|$3>U~*GiYX+SZ<p5_*]Ma{BGPC^9ukEAEjDf_Es>L*$z#[<x@;JB[6-NGAug' );
define( 'AUTH_SALT',        'nle407N0=#T%ocC|UV*o#tbjCT@p0rZ_@c`3NFqp.ebSPYUKTr|JF> .j<1DLR*H' );
define( 'SECURE_AUTH_SALT', 'A<4t2,}}> Wq=J~k{/Y#w0FtoW%[xbbk -!vz%@M|[T@cxike6O!VONA5j[<2`2Y' );
define( 'LOGGED_IN_SALT',   '#3K ;l4U1IS+{7j3g)M=0wy)$mtlbO`Ha;u.smZk%QqR-c9 ~uuR.KIA6gC7#fHg' );
define( 'NONCE_SALT',       '#;qh5wAi^&N+WQl_k`S-l[sH3L[P_mzT&FZ!DSebLUK9au/OZ*US4b.f?NmlH?N6' );

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
