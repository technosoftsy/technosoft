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


if (strstr($_SERVER['SERVER_NAME'],'technosoft')){

	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
	define( 'DB_CHARSET', 'utf8' );
	define( 'DB_COLLATE', '' );


	}
	else
	{
	define( 'DB_NAME', 'ituniversity' );
	define( 'DB_USER', 'abd' );
	define( 'DB_PASSWORD', 'Ha&Ab@2022' );
	define( 'DB_HOST', '127.0.0.1' );	
	
	
	}


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'weXfND43W0/7ZOi/HRdUfyWmQH76G6IWEbl/M4tC0OOYMAp3L7AnN/k3yfh4Cj9NgfWhwd4ct0EPokf1mrEQSA==');
define('SECURE_AUTH_KEY',  'l0QO/xQtG2CDF9QFweS5ETp0f1GwskBrRMtgYWcaBzDFauH3wYruZjal/3uWzM29L6RwCzvt8p7pX7U6MuNizQ==');
define('LOGGED_IN_KEY',    'uaIqLSvNcAATjrxZE7mh7WrSqUuqW3XNzyXazL2CEgCdN9ErGHOskA/H0RdOk6D0dRDb7mIf8uQcc5f4IrBZDw==');
define('NONCE_KEY',        'SCCvUwFPBTfvuBFLe0B9UuxWV7c5MTfIXT+Vxeq8R/Y7/7SCY1vxSWOR1gQY3t9oHx2V00x6v9OnfCPSNz6ZoA==');
define('AUTH_SALT',        'yVCJV1GrSs4CFd2uC38s1rWr/Z85gj3YO7mt6I3+af04HHMiL4qo47/D+YqOl0gOYpqs/NArY3h+zfEUOlbg2A==');
define('SECURE_AUTH_SALT', '85yrUkWlMK7G2iZCLvDZHMzj7BS9WDeXIy7O9/ib3dTozQCd/RwfCfT6515OOJdjRVP1JBgTj39B5Qw8/As8RA==');
define('LOGGED_IN_SALT',   'C1/0zVNPs6mONWB0uAVPHZhtVr3BcPHXZwV6LgBWjASMleaRNL4Mw0MOaXgGTAuZ9U6mAmek+/rVBhI8jYMUEw==');
define('NONCE_SALT',       'dDzKdboTSevDoiG5LSB7n8OogYVWoXYgJioNh4eZo81FYdyiI/mXyVlM1VVPHClYqWAW3jA4ZgcZ+2vm4Zxc7A==');

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
