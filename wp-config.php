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
define( 'DB_NAME', 'wordpress_test_tva' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Q+qX<%y:?o6`e#+4f4A%n2A<$M4:kX1){LZcjFG>,c3[ohgfF;Dnjr BfJG%zxeZ' );
define( 'SECURE_AUTH_KEY',  '{Ya#l.ctTZnMi]+&x4<i7eZ5|Hd!!bs0QYp-Pqs:H>@gX&OK!fU/Ws &::!X%r9i' );
define( 'LOGGED_IN_KEY',    '(CbWR3j2]gk{hk|QDF?99_x>Mt15Qq@d5Xp)E6ez-2}279Lc<5WpC:@H=y*C4:;9' );
define( 'NONCE_KEY',        'wk60#~GWgn?ZSb[`j64H(a>^`:,3!ps{0&(J<o?mGpOl4vQ@@.Qhg}PFz(8wP ?t' );
define( 'AUTH_SALT',        '@+xjfHeEY@[K;?=zP/ <Pn.tL1`,r:wFzk^~1o)@Dq%twT+C0gbXC3U(^3W~*>mb' );
define( 'SECURE_AUTH_SALT', '/k<|uZhHPS/P@K^<q9?fOWBy2F3kB@86Gs6_{|0W0O5RTVOOs5Vw$C[xEdO7hWvS' );
define( 'LOGGED_IN_SALT',   ']~eM_Ob7)sI?tj_bS*JmECs{]P+inMy]ecdwrcR1:,c,ko|;kKu-2XFB$<|i!)1g' );
define( 'NONCE_SALT',       'NcJLMjq!T8(I>!9;}[csgB)GAFHe>ezFhmc-_:!1=7W=GB#s|0XE:02AJP[HmqPe' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
