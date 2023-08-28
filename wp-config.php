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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digiticmockup' );

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
define( 'AUTH_KEY',         'c x`tIT4y%yEMQn+)w=bc~pLWGtq06^t!uw_12`:o.+hqgVaMnDbFnVqHK, }!g8' );
define( 'SECURE_AUTH_KEY',  ')6Vj]I-.}Z,KN>W|3z|%$sS9h{.YNw8SQC{nic*9s|Vm([FNsnEQKX&c[fumBa3_' );
define( 'LOGGED_IN_KEY',    'T?t}xnyG@;4:}mzFIAw(LY>)sFN=z3*]uEIrLcW8,)iAc7BrV<cT|S#`xRRh{%%Q' );
define( 'NONCE_KEY',        '%f.4#CxOH`6X{rdurFu^^U}6#,jp$|YR9T{_``qQBd!)jmKA:&1=_2W4jslr5F2N' );
define( 'AUTH_SALT',        '@)ITihs=j4>Y*O0Ic|7Ids-7~6@uB_*P%a2T-qsnyZh,G0KKKL-ZmV[Kqz_yoDYw' );
define( 'SECURE_AUTH_SALT', 'O]urJBPhl<$J!$6QqPM[1PaK/MZ84oR5;jGvcfah5rk>sTp)DSV{==(hM(8afooI' );
define( 'LOGGED_IN_SALT',   'Zu<uvxD<IYcc/;,fS<LV|h&3u=?*8g9@mjgWH(3d|h_q})=1k@;5$UH,9{3v!fgS' );
define( 'NONCE_SALT',       '9pf_:+sLKlXf}P>foo&7rx9Uxnh_/0qwNno1DuU2vaF)]Z{WX(SAI$zRkDanG+%N' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
