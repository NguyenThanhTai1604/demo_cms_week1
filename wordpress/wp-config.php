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
define( 'AUTH_KEY',         's<Ks8, C)g)!V{_8M%~I(sK<5~F0pd^~i&hO^vTscB##X2y>&Y2^W+Dh~yInczIU' );
define( 'SECURE_AUTH_KEY',  'N4*+SnR;S8z;%g/)2BWLDs2Ve#nR_d8q}%[<-ccpK~L!qk[&FI_?AekYkO/x.4{i' );
define( 'LOGGED_IN_KEY',    '8o@(`THP/[0Tvx`~wE_qc+:c0W4nI<,Jr5e>r>+zMIRIpQr#P,pzxxvGfCnH@1;X' );
define( 'NONCE_KEY',        '.:v) EFHGu*)+$YfbtAh9[S#9K/xt}t`@0$EC^8Ea2:84gnyJdbvB,jB48(M<JCG' );
define( 'AUTH_SALT',        '`HNF]VMI.A^)!@#.k:-]8ApSPk:YE~A=pBm-gYY?g;x*U:_j<jFe2ZDdpVI8wvj<' );
define( 'SECURE_AUTH_SALT', '[f~PJYx9k,E:qE<P/p_Of_YG#nF>Zno  mh;vpbKj(A}.2VH-tifVt_K[XYODygl' );
define( 'LOGGED_IN_SALT',   '2C/ahm 2?G[?VI;~8T,$|Of5&^G+Bri5]v+Hi0`6mOFhlEu/dn#7S414:XV]`=-1' );
define( 'NONCE_SALT',       'o;S2C*|F)tZG0.=Y~3qufBENMCcI@?hrCg7=<u%K[f~N9Fz@5|fuUwAEf1R#49s[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cms';

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
