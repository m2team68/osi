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
define( 'DB_NAME', 'osi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin@123' );

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
define( 'AUTH_KEY',         '!z0KU()kL0xxTf>[pdkz/bc6(B|)7CB}|`j2YDr;d|PypY(6-_oq$]TnVfg4YQvE' );
define( 'SECURE_AUTH_KEY',  'X02_^gSX#T&Ij%9S[a1)1=DuTgu+kq B Rs^Y{t8ubbt*_Q&eA@>2.U6DBgCS-^}' );
define( 'LOGGED_IN_KEY',    'sjgKVf4EF5#GWm*`!W8hsNevd#t)Zf^XC_k`]8{%i9g1}iqP/+}AeJ}a*[2ltW!;' );
define( 'NONCE_KEY',        'O2w}!:[b6^:REn:(]Q7&@WPh/2a}n460~dDPJrih<.J8Kk,=d/OO&TxU2Hj_@]Fi' );
define( 'AUTH_SALT',        'P)Q3^bO<N}zy:u#^[Dxs*DV~MU3B2UU:78dFY($wf(_Uy6Y#lq<%=n0n+TUn|dp-' );
define( 'SECURE_AUTH_SALT', 'aDzyr?-Mc~fI&xN(}O2Eoi:<NuIp;aw0VfEtyeNdbwG8];_q^Rfk)$ifK2VG#IxU' );
define( 'LOGGED_IN_SALT',   '0,]q|Vjz)ZB>e3rag>v`V:6.Y5pz>rrsm~rVe(1$qvICsEKilT1o`dX +=u#}K&[' );
define( 'NONCE_SALT',       'r3g?`dQBIXiFD.U&7fc,1bdgG8 {xV<K|.c8Dn3zoG4xlPJ}Tb7[IUD}/ifMN[&M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'osi_';

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
