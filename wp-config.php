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
define( 'DB_NAME', 'playground' );

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
define( 'AUTH_KEY',         'n5K-tX9rqQWBon+*3iDgG^=gpZxTL` :97-W!pUgXL{&T%b[bV-D^ix|Bc+Tn=}2' );
define( 'SECURE_AUTH_KEY',  'sbb-k=2:>H.8&_US,8PAy?MT3cyHL<rjL]&1P[?lzT_1NK+`*.FaMZ0/<zPr`j`A' );
define( 'LOGGED_IN_KEY',    '}k6$a_%b,PbV&NUR@hQb6]n1b%D=|`%d! jXp9?zMmWbYV*hCy$m @{am@@If)!%' );
define( 'NONCE_KEY',        'HqZ}P*5tT/?n&Yz[BilEnG;1#MOJ|KN=md>fl)%%m/6ex*D+U|%zx1Ye zhE?|i@' );
define( 'AUTH_SALT',        '|6^apohL(3#L =o5(r}uVk4&)ii7(O+#yfM~12t$G)2I1~&(SMow{YWc(eO0,R!c' );
define( 'SECURE_AUTH_SALT', '`~bZMKzhPm<7oFOwwL40+p_z;1Qtp1t49+8oSlsqpU.IJrp`U;W*HSkar-RO/iZD' );
define( 'LOGGED_IN_SALT',   '41W#H<]b9|fEgZn>w9/w$`~p@ii5%Uy$/%!sC_$l+0V<~Aoq>V)~7ETq1[W*G l+' );
define( 'NONCE_SALT',       '%$@PV# !0uo1UmIqvEv4tQ~Xt-%xU(N%9S&72u9zkYX-2;Vz3d%&h1q[[_>mPljY' );

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
