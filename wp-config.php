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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'example_com');

/** Database username */
define('DB_USER', 'example_com');

/** Database password */
define('DB_PASSWORD', 'NLZaHSCFcH2gbzYg');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'RLiAx9Bb90r0eLfgF4bpfUees0G3FZoaM7COZleD14bbeHiVmzR996dc5tjnUeIy');
define('SECURE_AUTH_KEY', 'nghZzlWm5wOSz8Ihexw31ELRvE4TkdWFpsDkZVNrwUlUNwl1wQUpkRQIHs21LJMA');
define('LOGGED_IN_KEY', 'DXWB8TiSJdOYlclJYVViBZyQz4JFq41jlvUr9BA99gVXS5KzbhLAvaNhlHsTdXju');
define('NONCE_KEY', 'd3kdhzTrql7c6LOUI0r9BVfpVfktC07w5EDTgAANOCFLyxo0MPurtamGthm1LZSC');
define('AUTH_SALT', 's9AFaDFRwkJorGqomLL8d2YDLsw6nJF8GzpfpyElDE1ywOlvmA4jltxtSooJwYzP');
define('SECURE_AUTH_SALT', 'kX2xEI28miTCvmCQXCBBQcBg900j11aXE7gmWnHFOIl7VAOkpW5Dsj8uTau9lLHv');
define('LOGGED_IN_SALT', 'UxBPBjGgouycywIoAFMgcFCu6QnyLiCTtIkvfMqjNy9m1BT3M58vUiVdOj14L8Rg');
define('NONCE_SALT', '4UQsO9YOcuJFULvSIY12DcElYR21DM2yjAgwmqakAYUoquOTcJxot3L2EBxOs7MQ');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define('WP_REDIS_SELECTIVE_FLUSH', true);
define('WP_CACHE_KEY_SALT', 'wp_example.com');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
