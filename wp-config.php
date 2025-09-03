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
define( 'DB_NAME', 'mestekder' );

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
define( 'AUTH_KEY',         'CDs$pR9|VbKVRHFqqEStbu(hp@MFN7Q#j+9US#sUWh}+cOlJ%MTIfWe`y0BQz<c=' );
define( 'SECURE_AUTH_KEY',  'X!k-Wf#KM-dgmJFQ$dl>k8$RJJ_8J^U4Ztq)t_#H2`&dLcW?sz;$QLc^*vpxe+Pn' );
define( 'LOGGED_IN_KEY',    'Rzrl><6juYtw3)H(lHJx+fac8?AdUIf@:O~]C_ZU 6!k#Ib]OZx.yE({<6CW[P{]' );
define( 'NONCE_KEY',        '0@ViQ~}`(8JX[FI-l5*gqCJ(b_5Fi>/cO[y?}A1FU-5!sD7N{7VypeoIqPeiZBb~' );
define( 'AUTH_SALT',        'eKp$<E.(z%b%,AEUt`yv{2/6MIHv3dA8$T1<Huo=Rv2o*]/6htb/h7Jo&LD!B##w' );
define( 'SECURE_AUTH_SALT', 'pKLxA iy>[|l]$m/M,VG~jc@b#zo%J+Qy=w|7kNq(:~/qT>kyZfM~skUpj]U^.hY' );
define( 'LOGGED_IN_SALT',   'k;$0I]3xc~26`P3!X~ussD!ujGybC?Se)R(!:=M6Iq_.O:j1>_kFXk#8847AJ/jQ' );
define( 'NONCE_SALT',       'J=82{Td$t~BJgW5Y_f<*s_o;T^3/cMAL0witbSe{a,>u1A Y*gZvb`<I!ymVWt9I' );

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
