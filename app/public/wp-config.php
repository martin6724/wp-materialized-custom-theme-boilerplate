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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'ZH3afmwov8jgk2xHyize1ZYdW022DDybwX2ZftFGEo4BFxLdHSoyzjfdhx++5KoIaiBcAR04hNxyqg8y3VwOOg==');
define('SECURE_AUTH_KEY',  'gqvWz0GzX2bO0EncBMriBIFITZkDHbF1yTQcFzeLJa3ZlsUdWaYBoIJ5SKkrPd9nByC6sqGiRPKsKSWL3Y1JOw==');
define('LOGGED_IN_KEY',    'RjANoW+xFtqLhtEG1VHjW41zbj92UGRvBkbK5THa5yv8+fa9CsLlrlp6CDuJn/uy7gBTisiSMpruBZWRfRVhYQ==');
define('NONCE_KEY',        '6WQyTNLFr46Mst4xvNUdGJ4CKZDXfgYq/LJb4K5il7Un2REnLaS81VwX+j6bQ/OGsxnk9s8FqqHEUS5ygr62BA==');
define('AUTH_SALT',        'E0bc5PPwaS2/HBKwUOtUDTCNbH0Lp2PrObm9vxemcpCZdQAw4oP9XxX76wKUBuVgYTH23ebcx4Gnvjjpi0YnoA==');
define('SECURE_AUTH_SALT', 'rXvW6bqDmn3HBeP7GQ4U8GPA4mgnJ8KC33yXSvb7cdbponOgarywfWsMvoz4Bn6yj9nwZcwwOjaw15zzfdTxDg==');
define('LOGGED_IN_SALT',   'uovM08i+m4ryIjr467/dn6vTrN8c505qGz6aZeSw8Ij2zsRYMzQbxXZr/sziGqZejUpWDFs/441VnYvs+huAug==');
define('NONCE_SALT',       '1esWfDDfupV0wWRiU5VwIGi+XFRu9Gb8ur14v60zGcAbbripeslM/EoivObYcM8STXNek0pS6Xt6RRpHwgHzSw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
