<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'bukegfhe_wp253' );

/** Database username */
define( 'DB_USER', 'bukegfhe_wp253' );

/** Database password */
define( 'DB_PASSWORD', 'Linda830616@@' );

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
define( 'AUTH_KEY',         'virnmgujt8aqm08uc5jmgyw7czoci5wbkydojvg3q5lffriyv7ealptfkqxwwif4' );
define( 'SECURE_AUTH_KEY',  'konzugc0sat4czn9rrro5uc6rdbtfdnhfsnry4wcyz6zokjxhw7ogjxtjhfrwwcn' );
define( 'LOGGED_IN_KEY',    'xblucs3kyysczgr7fqyqq2ktoowvdsusow5hci7mbrgcnxn1pkgl7joxoxl8zaql' );
define( 'NONCE_KEY',        'mp9xtkdba2zllaxzxyncq1jalxtsyd2mozcba4odkxfwrj4uz3m27nvtqtw1slzk' );
define( 'AUTH_SALT',        'km3w9xcsioo9sockmzju6bkckohttv9zzc2dj5kzcibmjiqdjiydwkhfeeltf3dw' );
define( 'SECURE_AUTH_SALT', 'mpxlgly1oxsxlawgejczxvfa3zzsurgclqgbwmzwz9c3h8osdrf02ypkm9anvj5s' );
define( 'LOGGED_IN_SALT',   '7n2qfgawslddpeemwyzieu3owlmdcaxqyihod6vwprzyje88mnap7163sskmiigb' );
define( 'NONCE_SALT',       'jwq8k7a7m1yzx5lzswefjr8utxzlytpybeilgff73sr0y9nqafkuj79kf0ky9ctm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpju_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
