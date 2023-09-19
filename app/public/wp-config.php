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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}


define('AUTH_KEY',         'T1V5YgBhBvkmAyeQbfOEQjTJSQywt4toCgSEHQR+YjhICUtdkODdYwikVNkUtPiQL42G1LRcK+SGDJfp8ieZhg==');
define('SECURE_AUTH_KEY',  'w3CrH7W66qCRbt8JUWtNjOaP86kKiiFlz8j0aKUdVnp3XSMD3GL95sSTAuiPRAbk5UZGwLeV482m0QobQzH5Nw==');
define('LOGGED_IN_KEY',    'x4u0ZKCvacwk7KPRr7MrONcchudDiMKpxYXDilYnRCjLoGaZ9mpGJyDCNp3VGcZKMUJtEo9fRUIvpQhK9W7pWQ==');
define('NONCE_KEY',        'sNZBDXN3HA7J6llajt28WTMcxvlkze5MyNEI9eAEjiuCKnTCWyptBTXBjo+Z3SAIkuMG7iZSuovgzC4TltAHeg==');
define('AUTH_SALT',        '6nCpyHqcXRmXwF+8vW5y7Q1AcO6Uzxtbilm/OzDD7+6GyOIatngCkW0Kj9g8dH9/GATRvebNwei5FVs/61Gjqg==');
define('SECURE_AUTH_SALT', '+7bMBASc+L06ZLYLmnyqcWNHu2X+VtrXL/feePv/YmbBW0Jdff4oE75+yD/ZiM23lBSWg71gVkqYVOJTFPo0KQ==');
define('LOGGED_IN_SALT',   'ACKohh3IkcMY+e8Kh+7Yaz28BqZ2NIShZXb+IcqIHlmaYAxTOU1+rzpeX6PNLH/vKJWCe//j+JrHlbus9lRuBg==');
define('NONCE_SALT',       'Esfz13UiwSEGm8luHTcWQ05lp2ptiIfRJWCM5kpd27LsdBOJfgGghK7SI1U9fkucjx+r49LS1ESQ9Uu1+W8FIA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
