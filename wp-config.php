<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '})<-]AFP5mZSft<|vQA#yy#>:V;hGYR2GRH9(vmfW)Q1)r[2 K~|eD)W<>@0#ZbN' );
define( 'SECURE_AUTH_KEY',  'd <!_W?#~U;_[[+f5<@;kCYL)vhs!|ek{WcXrULr7U @=MO%mmc/|%^$q8P]_jm2' );
define( 'LOGGED_IN_KEY',    'e7NdF*nOis /Q_c3<Fo[_@*nlJz.1{qn|{32_nYsj3FWV]!?,c+1<Q0i1N#DJ3Dd' );
define( 'NONCE_KEY',        '2w/+j*OJCig3}}r|BZ_i>=c{oN@eQ V>m_9P8bJkb+KRe}]=vyKaJG4Ns&TLpNh4' );
define( 'AUTH_SALT',        '^o(w1=oE8F5v0F(`Ix7nu3eG[J[FyF.4xz9Uujx[6z?QcTEjv5Q>c|Y1|De^):SI' );
define( 'SECURE_AUTH_SALT', '2Y.WWnh6~AxSL<W?2$* n75~9|{o,,BuGzg@J}Ej@BV%*D~QmGS{|8Bqi.D4|.)c' );
define( 'LOGGED_IN_SALT',   '9BVc%K^b85y%@PV5N_ NV[xX*2)xq/ (`GBG0`&Lk[&EChGEbp))fd<,~7)s^p?e' );
define( 'NONCE_SALT',       'y^WSp3kqPp>|i?Vo_SEQ+S-t-0/.$=5Wa[@&Hb}%XaM|XFg_oM2xJu_uA^x-R ~K' );

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
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
