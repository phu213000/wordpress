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
define( 'DB_NAME', 'wordpress_local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lpQMTk=Q4ulB,{_<OP$*_X;qrfG@!)5Cvn6#PpZK%;*nv9C/&f aD+BUmHB&#gu;' );
define( 'SECURE_AUTH_KEY',  'J+?R%-{-#}rIEwtlv*S|FD4DWx;wxn4bbnbX-}6^K(ar8Qh/-X]6n.il|JY{y)eD' );
define( 'LOGGED_IN_KEY',    ' O=fa{Zbt1T`dw{p_nRQey~w|E(QuY!wa,4S<gyNi#[Os6p*OZX4=a7^RXrIhKU`' );
define( 'NONCE_KEY',        '%*@<f)Rnp 8Qk9#^~leH(D2(`nV)eGuI%y=$R{7hoz.GD9tRdSf`:6*?c^$jU;d8' );
define( 'AUTH_SALT',        'bI$W<DP=~n(L3z6A!E-0S.AXzph`+J{|Kx)x^w89L}xswKMiz+L3[`lS_RbRq?/.' );
define( 'SECURE_AUTH_SALT', 'CzZ!NZ!?:+`iZY~Dcw-9jFGG#&moa1zOEne^cF)h*lxiLw3H9aOratlXF:-:HH5%' );
define( 'LOGGED_IN_SALT',   'CkpM5NUcQe)Xta 7e~F.Np[9Xk<O%?ONu]]KN7&G$%g5zMFtu+>;y=u3,naI9sj,' );
define( 'NONCE_SALT',       '#hISzD`ckM)9QE2& >7Q!vTFbjTLa&~ESJvt`iknr,}+Z(FzBVC/7~Ra9uK@l4C5' );

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
