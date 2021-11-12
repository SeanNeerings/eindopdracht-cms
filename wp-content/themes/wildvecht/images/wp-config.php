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
define( 'DB_NAME', 'u210613_wp1' );

/** MySQL database username */
define( 'DB_USER', 'u210613_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'F#za8G*n87(7uE^Hyv#79.[4' );

/** MySQL hostname */
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
define('AUTH_KEY',         'bgUNHkPEuf2JBkCVE98zSnnwZVSXxWByoWqtN14ENA18mTicounDqdlqxcf7I6YH');
define('SECURE_AUTH_KEY',  'R00tM4k93xl2LC1EQlAGxcDvEqxfVGPFE0eRuTruaDrImrSuLylw9b6PIIl4ytTz');
define('LOGGED_IN_KEY',    'lLuM22uFGuanmkS0JCnw1mU9NR9JnCEpPYWJFSI7CCLKx94hVc6Y056ErAKHx8PO');
define('NONCE_KEY',        'cX2e9WBbjgnwVtf5QqOoRqNgo7NOxezc7lvRwIS4faALhspaveVPjEHOnInC5N7b');
define('AUTH_SALT',        'VgTPyL5VWV9rwX04Hmc3ORNSWUdMgWNF8X7YF5YsIfq7trkAF7zj0eC4nGdaEXV8');
define('SECURE_AUTH_SALT', 'juLvodt9C5fwmHzxTIN3zrRF55wiSHXOdbnYIiKlwqVz4CODLMstDomqApGOGd7N');
define('LOGGED_IN_SALT',   'KsUx7P5w1LxgnDj46opIJb4BZgVNxz02Gm0SvC3Ofx3bER5bq4Oi7NjtOFcDEooH');
define('NONCE_SALT',       '4hibsEYOwcM7LHXjwkuibaiB7Pl3ryu9Z2cH1ohFKtbkUtqlLSLeKB8kO2ucyyIe');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
