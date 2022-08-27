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
define( 'DB_NAME', 'detalles-star_db' );

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
define( 'AUTH_KEY',         'EB4H=* 1v_IBCR)IM=zh58[)`l.zhzX!E<+Ly$%cLec3bK0:e17jb[PiJ1T4qa=V' );
define( 'SECURE_AUTH_KEY',  'fX@OuToXgz:8x_qgLTH {dd(ky?13V$|C6+x!<c)jZ1< k:|&z}(JKR9$N:f9A6U' );
define( 'LOGGED_IN_KEY',    '[bcRn9nm32m_+yzDu$x?V*?DIgdVY_;uu}F}RD@%i)K&6_iy^by}J2P[FO`gi]%t' );
define( 'NONCE_KEY',        '?SS r.ICcpKKE@J#i,|>mZb5[bInWxX(X^_|{1jvU)q[q!}Wb%Qf(u8h);NG)$/7' );
define( 'AUTH_SALT',        'slJZ*I*cX:haD6gmU:#01?jlXMi[D7r$laE1OH@4KI{8<wN@nb9GbM</9TCv2XKU' );
define( 'SECURE_AUTH_SALT', 'm+7}`o 0R/(R8u[3aOJ3n<LhoLgvcPPHyk!?toEuBu`yi15pZ,hNu3oM6Bc5,|Vs' );
define( 'LOGGED_IN_SALT',   '={?lE57~W x`E2as2my{{y tux-R3vJZtkgF`g9w_:Q>BJ!(s`=yfFQ3IR(CS|pq' );
define( 'NONCE_SALT',       'j*gVEDu/ovZ[4uFD-qtc8$3)^v373mAdB@q+)KKOdZ-F.&FIv:VO~${9L6t2nLSz' );

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
