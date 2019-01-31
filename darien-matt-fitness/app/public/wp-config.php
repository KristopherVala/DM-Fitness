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
define('AUTH_KEY',         'F8aEkNUc0BNDfvyKHemxxWv63MgMfSFDQLc2Nb3md3A9Co5n4YXGYQBKQ5w90FF9GPcpTGyGyNhNMapFgOWL1A==');
define('SECURE_AUTH_KEY',  '6j/6tNM3b3iHcMWUuDEI9++v8m9HiDX2T1bVDLhaQECZQBRs4X9DMDiMD9X1q8mE8tBfnKACzPLWIhFta5NPlA==');
define('LOGGED_IN_KEY',    'W7pvIDrcAb8QFX2AqzAlkeyhWKgdE1lLvokfSfQPREtSJvRojxTCU0sHhXiY6HNSe5f/JZOUOFDNnumELfaJUg==');
define('NONCE_KEY',        'z2CqQLamOej6I36JpOvA12nUrV/Gtg0j4DEHcYVo1a5v0PaCJtXqkJJ3TfD7nS58ktYL/GgCu3Xk6A8laMK0mg==');
define('AUTH_SALT',        'nHbiyrGI9a0MjYdthCjfusvj0OjLEfTeMuGm9z+1rHymBPahuo9AoJwJNubzb3aF3yz/83nFlvjS6JMkHBUJIA==');
define('SECURE_AUTH_SALT', 'TnPsDtNeUjqauhkhFevqDzs+unRb/PRax6fv3oAQuHrNhJdspuFzhDHt4IF/sBOk+dgt1pIVzMqzY0w82ik9ng==');
define('LOGGED_IN_SALT',   'K8g3PqGblvWQuU51hH5/7EBRguL4+u/DPcro9+t3fTa7j5IbZqpOOpq2i++dztmVWQ+jbsENZGG8i/th7wBy1A==');
define('NONCE_SALT',       'kWWsSw/YeitQyOxqAJWmFDQD8KVwD+Uki+wWWlI1m49dF8zJjN/94s4hR2SK1CR+aEtQay8PmkD9ngGRKgF/Sw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
