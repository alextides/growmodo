<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'growmododb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '~RB3@OMIp8Im*d*WN9.TSWI E7E?a 31>&9x>.vPDlb0Hfh{_<ah_>*V,f]CV*J$' );
define( 'SECURE_AUTH_KEY',  '(p8} k Q]-;=,=W><;K/4r>Yf}Pn|g(?0<UxN{#L|o1mZHEaRBGAKnqB5gb12E#3' );
define( 'LOGGED_IN_KEY',    '+<WvG8RxOb^Khtp%!L-;2P_iPB/=~<:t}OF<u(g+WOTHx:?pcB`Gpdd#!9*wx,jh' );
define( 'NONCE_KEY',        'srxL@QCzxiFB]yWLqaBxqo?t<m]FriD%)>g9F5PM`2X3,@CV3g?gt|8TVs/11>s_' );
define( 'AUTH_SALT',        '~^cGE6gSO*p8f-VY[Hcw#4mn{&;73 qxrEAisT%Vlh3!qISe0kf-FCjp-5-$;hU?' );
define( 'SECURE_AUTH_SALT', 'megCC4TMbhDFkt}|#u~)`-u1yxR_IvO_)aa:9dG]ytgaola:n$a vo[<4@SGA04V' );
define( 'LOGGED_IN_SALT',   '}O# -_AN-,_5%U>FVzLVjiQG%{>ZP41;;%WdB%X]nFxKkFE RF48U/4@CR$b^^M<' );
define( 'NONCE_SALT',       '`NmJQPz48/w6Em}am~+d4xI 3<JrbfU3t,rg-I$BZcR},r+S`OrWZ_)fGIbv?sR:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'growmodo_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
