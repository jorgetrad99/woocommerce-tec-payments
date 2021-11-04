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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gtF7BwcLR/EpxVXlvtknuYszgCBWuchjLgdUzAkvguwocvFof3dKTKNb/IDorCGC/8eDOwrAi/P6m176kY5M7A==');
define('SECURE_AUTH_KEY',  'uF8fsbGtg9KMsxCWjlPolq4/3RTvwBqSQoauMaW0DfLoBZkJNslk1Y1M9ZIX6YHcUfau5ezVlllSGaKIZh749w==');
define('LOGGED_IN_KEY',    'at/boMY9/f4vLKgyF6i9PJKro9f0ypimieO6HJuy1GwUNwovULEb0c8LJ1S268bePntJOYKqpe0kJkyCNskHeA==');
define('NONCE_KEY',        'tl0VIjAapCfw3qynxftQ2ijAZvjIVj0IedC6cmqG/xAU/S/mGhBDNVE4QlXtIH5clh8Kk8gaLvDjVwfChECf0Q==');
define('AUTH_SALT',        '9AaXT37Ina61Rv0h7qVMu4NV0+RitkUMOBe7Qy8HCnwF28K5VNYtmVtQE1PNCwTz0NzJteoOI2mwGRUmEVm33Q==');
define('SECURE_AUTH_SALT', 'BW+0P1FGqrIwV7UsuEVr6JZezaX3VLFy2lXQV2fo5HVGlq2w6R4xAKV0WCD+aixrsKDFRVe+w0MvA8RhHdUWBg==');
define('LOGGED_IN_SALT',   'U35p+LuirlGv1DIGQzNKr8m+1wnhUs+ttFAd36ZXjmlzz+tUr5pX31DkUVozN8eFqXC9BJD9tHYoo++XtbcCGA==');
define('NONCE_SALT',       'mDN/nfyG2LyX1l70xqOBHK8FsrtQRHBk8Adu9ehGY6hng2OVHd4DmzZ9EFGcL5QET1tMRts4rpJeZFv37iQHiQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
