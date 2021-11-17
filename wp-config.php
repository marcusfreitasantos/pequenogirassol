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
define( 'DB_NAME', 'pequenogirassol_wp2021' );

/** MySQL database username */
define( 'DB_USER', 'pequenogirassol_wp2021' );

/** MySQL database password */
define( 'DB_PASSWORD', '4187y2S.@p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '5jsjpddguowfhpjgwoic0xkekeamvbdbmgtznxmxlj8jj2lnhzmbcbtk2g5hoxuo' );
define( 'SECURE_AUTH_KEY',  'a01e28rnxwxkzeuowmazp7arkigonqcirqdfmwgkxbourmoismby7irhoc8isyrd' );
define( 'LOGGED_IN_KEY',    'imyd1g6bc1mocaveitbtvdm2lxnc1xacoqhw9r0czgko72s74847louvf1o6dauu' );
define( 'NONCE_KEY',        '0dvxiromqctqw5t01e2iuxksakaxajrgomsy9pandewarrytpto0laqnbz0i2xfy' );
define( 'AUTH_SALT',        'pykt3nxz1j86l0fvzxuk4eiroj5djwwonzj9gnazsysccqx3as5wvonhnmsnw23s' );
define( 'SECURE_AUTH_SALT', 'vgshhnxstx59b4dyisrsi5meucckp1rdx7ks7e2qoq0jkdg1wmni3sqnew6fkvyo' );
define( 'LOGGED_IN_SALT',   'hotbogqdwcobwfzihjngqagl3ubbypns4jdd1atpiaxhatiny2am4kenpk0srvz4' );
define( 'NONCE_SALT',       'd85va7uxas8pfaqbrr2928xdmnyz5gcm5lzdo1l4veameqjxff941xw9luezjhxv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcv_';

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
