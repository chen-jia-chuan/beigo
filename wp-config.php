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
define( 'DB_NAME', 'Beigo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '>`QHZ:m&A]{<lhYw8-3he5v{.N?[i3Pb|CiPO3Y[,tHi**<+32YO>&>+Lwf OO}<' );
define( 'SECURE_AUTH_KEY',  'Vs>s*[*@Ik)=5l>q_AGq{7S=[0N>9Lx!~>GB>9cB]h%{jmW.<Vy.yLX%iDB8ykl ' );
define( 'LOGGED_IN_KEY',    'yHkoj&WB0V)gR?5w?R:Q9m{zU<ncWySY2y44)SK(P~mSwAUS4n(3dv`C=ZNIVg>w' );
define( 'NONCE_KEY',        'A<ga{jMOr+xBNr@5}ysrnR?sNv%c}uskSO}$Xlt0K!8^)c&&q,@_k/q}%o1Qx9dj' );
define( 'AUTH_SALT',        '9]f*pi63z|,:rPwC NiW!m^tryrg(vBYG)e-YUQtRB(0ryKt$$?)a[mFUnQSee~H' );
define( 'SECURE_AUTH_SALT', 'x>S~VPjq<RB0YoCnHxJ?udi~UlJz>T1:OU><BdP.2`MyO#icZIm=;m54lR%Zen}*' );
define( 'LOGGED_IN_SALT',   '=AGIB2hQm!VD(J#bG+H2wef1#{L?qINyeYmx&}|j9:#3>1~BC1jOQx;2NHZ$nny6' );
define( 'NONCE_SALT',       '{[(;XOC1LitObf_DEHVIg3{-He^Ov-,ybKx`P~B>c2d_XfCo+OS5Vr<sTU{n]cFc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bg_';

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
