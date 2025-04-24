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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         '8XvYuQ1lqvQ~xtIlIx5tWY<wq@U `5-r8Gp.gJ_=/-`>?2O/R)JgzEE/[_aiXh5*' );
define( 'SECURE_AUTH_KEY',  '24].(CNtmz54(s2}nY!eK8Z;YPaOu4eZ[$mG&/gBe[bv[@];-wi2rH1oT=aN&X#k' );
define( 'LOGGED_IN_KEY',    'j;YMQpI9)8D}_[HZveFyn|^X.QDU9sQCD=}A^P)ePKm=EGNEug$lVxVvLk)TZ6;=' );
define( 'NONCE_KEY',        'e>VH{i<Q7x,]`)U5m%j+NkI(_TJU^ Y5Ok=!0AE`^xD.J.Ff*$!U+(#``KD@|PNn' );
define( 'AUTH_SALT',        'yHq/[3oyh.!F0cYcoRdquKH>#]Hx+G|>ew!{ TsT}L/SUE#-ZIdzHgYzr:{`ewJE' );
define( 'SECURE_AUTH_SALT', 'I^4D`s#Ucb+UxhnTI2tRkebO}/4&_/+{DI]WpSeyA;{-ry:8lj~Wyuf$2B[ |XmL' );
define( 'LOGGED_IN_SALT',   'dtJ}^Q_UXKvIDW(*Adtxc6c]i1kLSod2o-])~o+SdoT{m#/!%0roeH[l-K|VM$pu' );
define( 'NONCE_SALT',       'HGS2tfcW#^cuT7?bh@aC#SQ?2yHs&ZCuGe@oakMs^Rru2J` q[>8-OO~TzqcY&c{' );

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
