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
define( 'DB_NAME', 'srv43475_ksxv1' );

/** Database username */
define( 'DB_USER', 'srv43475_ksxv1' );

/** Database password */
define( 'DB_PASSWORD', 'V([[m)L5h4][)1mHwk*01.^8' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'IauTQMXdyZMqzA0an9Bzf1ymN05xf1xNqZexuc1ZbENxCuJciwM95Ip4gCU7mx2n');
define('SECURE_AUTH_KEY',  'iVGTAgxnsKdQVSl0X3JXlAowenAc0JI4blAcUoBJgah709cmndKUCJHQUT4s92R6');
define('LOGGED_IN_KEY',    'EyngW6R5hExzZicFdY3qYdkhFEjYbF8KKvcDtByS0H66ohqubUNaC35OSt5VXD2q');
define('NONCE_KEY',        'XZvlTDyZ9BwElSnkCqRj8CciELpyouOqviHUCRx6sD8GRBniWAMGwKK2wCI2IN6F');
define('AUTH_SALT',        'aiQ8fZN5BdXZKt2ObaNvP1FdNNYP1V9Pq6zJ7akdiMYDEEzfMItWijXUMjYLx3Zk');
define('SECURE_AUTH_SALT', '3SheTUwzFWD4jzrRSEsA9vnkuvUA86HmkaOryUUBCAcXD0LheACTiYZg75oChHp9');
define('LOGGED_IN_SALT',   'YCHO0aFGjBEznyTAAik7sHGnhStobuQ0Y0iL3V0N90sJYmeibb3wAH7qRNroxcSr');
define('NONCE_SALT',       '65SsKscv1Kuuc34o66VrTXJvPqguzGSd1ugBeMIjUyuJeWwXBe5QStpjQ4uhk8t6');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wagf_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
