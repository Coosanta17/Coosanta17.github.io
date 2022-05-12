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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_31699068_w456' );

/** Database username */
define( 'DB_USER', '31699068_1' );

/** Database password */
define( 'DB_PASSWORD', 'pP919pd](S' );

/** Database hostname */
define( 'DB_HOST', 'sql111.byetcluster.com' );

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
define( 'AUTH_KEY',         'd3efpob2jxx5xu1etjhbggradwvncc4l4ledleoouqizpgzwts9vdsy3sdnzndky' );
define( 'SECURE_AUTH_KEY',  'vjng7ctiwdypxla9oh2yjaymz0xkrodlafuqcmakefwtu0e2fpeuioiqe0jk6stn' );
define( 'LOGGED_IN_KEY',    '1rfwgsduja0plbady5pvhmbi8vfcw8zgngg62quybwa8zdhuqgu54fzukyg8qqbj' );
define( 'NONCE_KEY',        'xdasicqnjxhlzvibwkqcmfexpp2dtyvixke6nitipd3hoalrn1xa59aa8tryrpwq' );
define( 'AUTH_SALT',        'hho6ovg8p6rvvuzrvxpihcclkqovaxlm5aeyqj1v9akutywft34w9cnvsspfiphh' );
define( 'SECURE_AUTH_SALT', 'ryob0pxhbqw5bs3pf7maoucuesc16v44ahhiaj6621aa1bm1vnbmubmi6chqsb3v' );
define( 'LOGGED_IN_SALT',   'wpfwepkqpkosohdf182f1iuo7smospwejzwsymkipm1irsqxnaa4s75hljtrtznr' );
define( 'NONCE_SALT',       'lfnmnmys6uuphjtpoc3fe3nkbsufdgryoeqfygl1lo8avjbbb7ntzlrgbr8p4xgt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjz_';

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
