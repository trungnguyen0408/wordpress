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
define( 'DB_NAME', 'wordpress_602_core' );

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
define( 'AUTH_KEY',         'BPW^&m|[QT6U]K3TE&S#&{zbG~Q*_KQDS~sOt89rn}_7CR9u7/CGcg.S]EsHzedh' );
define( 'SECURE_AUTH_KEY',  '+6$(L$dLrj:j7fi:<ek~F()<TCIKpxPJZ[4T`;*XTyRyh;^q@_s4?N|T(d%#9:lI' );
define( 'LOGGED_IN_KEY',    '#8Q>_aoTUHuWY^`OW+EDog4!f|xhfwF6e3&Xhj{$22_P8dsXJB>2BYs`nY.(YS3=' );
define( 'NONCE_KEY',        'kKM~q_~t*]TyZWWsooZ585IF%,k*>aO;>+NXSE*m:yM*8J`:(qwu<^;{8<9gHfQw' );
define( 'AUTH_SALT',        '*Q$WJN1|qmNTa: 3n6Jp<[om^)hw=nMg6H`&rZ]NYEsqNzvJ)]{#G0<F}!#XCu+%' );
define( 'SECURE_AUTH_SALT', 'ua_!T:_c}Pv ,F(8W[7[72~@1J9b-A>_O:xUI6Gpbr?;)iA<=rohJKQ>n0u&~c:m' );
define( 'LOGGED_IN_SALT',   'apvu|%1o%IOO2gG@4%2#VcyYIe`h71is;oih(%@S!E0v4y[?G[T~a].I}DPxXDo$' );
define( 'NONCE_SALT',       ',-[Xi3~Rw&+Lk5t_T8lk:&p@(W%r8NB_oJeBraq4m~Mlnxgqq)&gCb&M#dNLSf9`' );

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
