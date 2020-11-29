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
define( 'DB_NAME', 'eirshop' );

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
define( 'AUTH_KEY',         '!g/u~3{SQ-plWN</p^@q+KkVM2tWZgk!v,pSAAL7E77+ZPhP7[,FYRAaqkJYB[LV' );
define( 'SECURE_AUTH_KEY',  'rfT}hYmyA}[IqqS0vv:B5YO@W``Mf!fvo.KkS+L.a|?ndU6`iNG]*+ksCU2b0oIU' );
define( 'LOGGED_IN_KEY',    '5p(W &~MY!nKa>!$-y~MepEg~d<e|_.{T?Ru,j#+XC:>)/w%1#@zWx;QLx c%w=s' );
define( 'NONCE_KEY',        'bi9co<Q|r(QEx{#`U(kA9T4cOef{s=!ZznKP<0fr;~Zom&#R ?zjmPy6vR}^x%8O' );
define( 'AUTH_SALT',        'i@w[<yYMlLB{}sFGaEw7IoA6Z.sW+]?ZT )i??#@mvs5>G.F%n</X]E3~XHd{8no' );
define( 'SECURE_AUTH_SALT', 'xZByuD^4;@eI M:A@,)kd8,ZxKMh-W7yR+kUHO_%wGXo_Gw(@Vr_U-Jre+y}Z UH' );
define( 'LOGGED_IN_SALT',   'ztVE?W/._0OcZpdU!||`v&&yo;Lo11eHDD=jcAB{;k(gs0Ck22kfxd!8{4zt]rO2' );
define( 'NONCE_SALT',       'AM%&aSTRUmtve;4oOF!,vgP/G-E;uVhZb:(Os 0[3D0<>xt~K8ytT#82Pnou##sE' );

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
