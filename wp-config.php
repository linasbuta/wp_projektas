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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_projektas' );

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
define( 'AUTH_KEY',         '$_`kgVN|Mb2>Xejke+[_~Up7luH:/P6-Hx=w^>N3uzH5fS.b/T!(Ci82~7gWJ<%7' );
define( 'SECURE_AUTH_KEY',  'a.cX15f8y<nb<TD<I.0rE;Xb>dA;?|@+pG(9-g? ]=vwn0Jiag-6Utx3YT.+](xE' );
define( 'LOGGED_IN_KEY',    '>=z~@`BaDfe/x9H4mMB_EA-2B^#sC6/qMx4q~_um4+zzUvm: nE>e!vDI7W|E%a*' );
define( 'NONCE_KEY',        '(DCL`}G@+guvQr#fnW4_o|Sc{olz<<}Ox7v9#`Pvrr<Zp qvM[~gyll_8B[#Z}N.' );
define( 'AUTH_SALT',        '.B)x^ed0T~B1<2!`<t|U<uU9P1r4*A3<@Y3FN!wR_RrS}grd8#l2YTk`L-UZ|VjO' );
define( 'SECURE_AUTH_SALT', 'xP0RX=1qSW!w@3xm/Cw-,GHwywBE L=wx_)K7It35%uX5z<uw<O=pw&mS|.YcR2M' );
define( 'LOGGED_IN_SALT',   'aS5,0LRReAlMY|N//{,~4i96<-FxtO52cx{3@/:8HS?#v6Jm&Pf~UUWBq#o!yO.z' );
define( 'NONCE_SALT',       'O`gjPsw((|%twM*1|w%d6$FHpTluf96&#hxVHO[Eh9}Oy-H;A9P6hR4V^z)@S6w]' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
