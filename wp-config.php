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
define( 'DB_NAME', 'kanvan');

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', '');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4_unicode_ci' );

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
define( 'AUTH_KEY',         '.o7Fz`@_.V|R//]_C,fpY[%Q1@nJD~uUA,)b1&NP7SER%k$krqS/aBov3>&7bacv' );
define( 'SECURE_AUTH_KEY',  '{bJ3|9T{!CXrdbnFsH2J.<T!|)HFuqv6T{AJS#5X-_|=1D0z)PO[y@uv1$]j,,%#' );
define( 'LOGGED_IN_KEY',    'fS=&vCgH1zWk(r<4312,@1=k^Mtac{L,l,/MO%D(?Q*si}Zh3AX9(0,F5x72mI1_' );
define( 'NONCE_KEY',        'yWVS0U`QMxZ9VJpvMk>2%8^5v$Tz7BuJMtc->Rmt>Wl=kITN0|GOE$4xc}Aa|[,~' );
define( 'AUTH_SALT',        'G9KqgOISmirXX<g*4;L|lUsU2WyVZXL)#sNFOHVPX-}6=P|p%l},@JZ7b,&]Q%lv' );
define( 'SECURE_AUTH_SALT', ')hq8{P#^M#B`jUn-cx2=tP-;w=}=Eg@YSZFq^$=^lO;vN0< $z(>DUM-V6{F+[@m' );
define( 'LOGGED_IN_SALT',   'mypPo%6/w/Zm74rjz<!pvU&T^Bh_GX)SdhZpeFO0h3ITl(e~,B5T %ZH6R#5rx1C' );
define( 'NONCE_SALT',       'N%*y2#WXQX0TCr{IFJ3ww}*@jC@7SA n(w5]NmVz85o100w1j[o5|cTC<m)sk=|3' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
