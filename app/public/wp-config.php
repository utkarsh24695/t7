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
define('AUTH_KEY',         '1QLV9bcVAr+UJW6DVvz2f97faiBEmcWa5PmFonEJKiPlBlYSSNDVS4W2Q/cfzyxyHRClR8SOHiKVzXce+A2tKw==');
define('SECURE_AUTH_KEY',  'jZHebw2sgOT7hp6jEX1bHOFaWE14bDJjyDEYZKsXfouoKUyhm1fXv6WgvTwo6TyLIIc71F6+SKb3oh3O9Eur0A==');
define('LOGGED_IN_KEY',    'nMlCLjsMrqDIoxGZee/4SEs0zv4QxI4leLMHk2Rboq4EMI7fZzVag7L0zn47PIaXVweS/aLZdemaMuVT1RBNMQ==');
define('NONCE_KEY',        'TNVlt0CZ/Q9zU8/xQF06ntB5RgTgcQq/LfkmcPvBvKyGI2dojGH7xweIaYVfi8Pdfh3Qau2mEpwvZ0lZE+jqrQ==');
define('AUTH_SALT',        '1ZOVdU/2u73OY4dqqO9iXqs45hMximCv0BUZaj2pG2G61C1QJa8H08zwJHc7GMw5afiJLKZfJIjaJPsQYQAs7g==');
define('SECURE_AUTH_SALT', 'N33nVBNsh6G8M/q7ioRo5l8siaTWYwF3xKa7SQlPkEzSTfeXBziNADuWUJDdJrpjYtu7B7a6JLWBuxDu0+/+4w==');
define('LOGGED_IN_SALT',   'cxO0fnfA/6mmrWtWIOUUULUu3p5oQb6PDlJt9acZ3ggkFv9QlZlu2ZL9dfN5Aj+GgAJExR6gg8TvPulN2TaRhw==');
define('NONCE_SALT',       'WhVWiYq3LzBLlvZ/KPY0JZcZPZxAKUYgoz2aBwlmd7f18tJ4UJ38PV5SSKIk5rJCeEB52D+lqEeB7uF7LwX2rg==');

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
