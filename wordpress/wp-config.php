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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T87@y7C}^1XBZM@=+lvy&R1Y+KV}vS~t%e(<J{IGG_2wMCFB=C|H79BCQm|A:vBZ');
define('SECURE_AUTH_KEY',  '!+(LCc<nr]dTS2L1*z2V0+g^vt45a1vo>Gh[/|}%Z5Gg;H^n[k*89=Ey8N8/?=,m');
define('LOGGED_IN_KEY',    'TxQXXJcQScWV_s.qoeBh-b@x#(M5RAs@M4+l1pcy&^ %w [U3o$QB)A|k?t0|5xP');
define('NONCE_KEY',        '~;+fAI:oltB}5#g3s8+-YE$D`6+1RaYs>9, }:92H@/Osf+tBa/_WKz8l3*0Q`@b');
define('AUTH_SALT',        'R 92`=Z!Q@52Rj3@<q J:%Ik]y5OvjGej/&#3RK?(7n/Y#>soij*mG2cV!$%Kt+2');
define('SECURE_AUTH_SALT', 'b;*F>(>mo/_kAoS~7Px:g~Q>*%k@<7Y_-}RL4yb<N My4jhJx-G@gz/Xbz zX^R]');
define('LOGGED_IN_SALT',   'V2Y95U1`,kM5TqC)8Yz1gEc>$B-N)H+WY4%3#XCT-2i3zPpFvrK|qv`N0@SolH;h');
define('NONCE_SALT',       '/yl8;]TnzR2Wa_@]#4OH<|T|7[=qs7kh.vF|MYDoU9wDl8S;*/xn]qUoRfMf#]5I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
