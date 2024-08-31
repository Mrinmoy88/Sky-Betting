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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u505426395_sky_betting_ID' );

/** Database username */
define( 'DB_USER', 'u505426395_sky_betting_ID' );

/** Database password */
define( 'DB_PASSWORD', '5&KG:mCKl' );

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
define( 'AUTH_KEY',         'S_z2~[VeI:C-w~a=8UbSe83c1,suD,nj]nL/4,@1zx$8b1SZGf P% B4f[By#U/3' );
define( 'SECURE_AUTH_KEY',  'u~Ah]ZdVfMl(&n933V*cGcEmu[?qkO.LE,~5eo(Ct99RY449TIGR^8g5 WcB~5//' );
define( 'LOGGED_IN_KEY',    '1wvHnF`A&oEWoaCEP]<kKl8U_g7EHs-}hJS2jbIo6qV|XA+ilkE-S{RI4BByp,7T' );
define( 'NONCE_KEY',        'l(-ah|2S&W:+w]QS_t7:.(*izlwfC^_,O Nz!r>xF!0Xzx| WIpv*?Z P{g}[>cA' );
define( 'AUTH_SALT',        'Kxt{t$rB*`bs{Pm#d[T][2t,g8>VXE}5,W0ONs8sSj!i/]:#!ot@J;WaM3^b<^x/' );
define( 'SECURE_AUTH_SALT', 'v9C4?g7`#uS(|=3-Ej8/XloJ&@E-F=pac90xX0f|)vVo`$3=iX:X0cb9Eu+)9,*z' );
define( 'LOGGED_IN_SALT',   'W0=5%UWoxk<P$*Dmmd<}3]K0#aSm^S|0[a@3%N4:,%kr4fcH+b=dsuW?Qy.y.}8u' );
define( 'NONCE_SALT',       'n6LZT?watYTI6:M9+=BX>A%yzMC%fDFXBg;7VITy6/QQ3`+<)F7nD@+G&2/s1n@f' );

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
