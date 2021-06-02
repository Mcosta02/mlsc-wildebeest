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
define( 'DB_NAME', 'mlsc-wildebeest' );

/** MySQL database username */
define( 'DB_USER', 'mlsc-wildebeest' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mlsc-wildebeest' );

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
define( 'AUTH_KEY',         'm^WLr h?KoAu)r-AeAF.`,6;S[=)G(e74#K;3jz^]>Y(SJ([qEs~FL1q8 >Nqy9s' );
define( 'SECURE_AUTH_KEY',  '.i1Cz5K&`tULsAy!!R9]n;qvjB{UB#>BMpp1w[r&Vf`~[}m~SVOwM<(zfKMbDmId' );
define( 'LOGGED_IN_KEY',    'VKUgurF-|y8uS-bsg`bmn=@lJywr3KPPv2&nG4BAWL?HVjRF0yk#mj<f)MQ;[G 6' );
define( 'NONCE_KEY',        'DF>!d`:r@+dM5v0QF38<<2A}m36(si)J1FwBT8CAC/bn|)|If:KbY>7=N4H``RwA' );
define( 'AUTH_SALT',        'FGK%`K5tGAyn=2].;[Rb4>ub El<.ly|U&*>~f ^9O~6[U01+^XRUya;Iw|l4?/G' );
define( 'SECURE_AUTH_SALT', '@/o+Gyg bVxr&VfU_6E^.q/-yK]eUq0j$a~9@PyjOMM[r:v;u3%>Z4yg6ghtr_FS' );
define( 'LOGGED_IN_SALT',   'U4ZVYV8>4f:ES 4]A@TfW)p?O*8:#JLw,(1~C;;+/.:gIQ9)ET.q;cT/%dh.yVN`' );
define( 'NONCE_SALT',       'd;n[k]N8E!I?%O)b.oky%PSo&jQO04@O$pfvfnj41tPWo9Ux!|MI`?PQ:?w#KDd4' );

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
