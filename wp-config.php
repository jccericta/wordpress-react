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
define( 'DB_NAME', 'wordpress_sample' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Magick#18496' );

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
define( 'AUTH_KEY',         '<g|<gCKrYau|uO@*)V]ZOooGt7uD<i^DY?fdO%x`d?Swq420wOg+nY^RuKA;LP=*' );
define( 'SECURE_AUTH_KEY',  'swf;#8y_e4T7CNnXciNNNn7G,sMIHadA*0VxS/WEBs(~^mb/Gl]QpKC2#C<S9LZQ' );
define( 'LOGGED_IN_KEY',    '.]0+mflO&UZAlZ8r/BD(g3f$H^NB7B9y :OeI/lO ke1:i81ZLS;c:cf++Q&RtJJ' );
define( 'NONCE_KEY',        ')3Z]55Hog2<x&nUpOmxtX/pBycK]8u/59^DfuQygln6v!Vjk3my:T?-D[f%qlbWf' );
define( 'AUTH_SALT',        'M{(wtwpJOnEeMFQp/9@Ud?fI}z*7~qDXmAM$g-5K !;{k2d&_2,?Y%L ^u%1T=1X' );
define( 'SECURE_AUTH_SALT', 'OOWS[=-xw++S2*SJ}}Z.fy,xP EhoDXLQY>k~TIG@a{L].hYWR+zKUvf#s5b(?&$' );
define( 'LOGGED_IN_SALT',   'J!8rr>q{oa#Xl0Dr=FO;j<`$cvQ@D9d,c?uCl*$axd7cl}B )A&go%%#N/v/iV5M' );
define( 'NONCE_SALT',       'q(w6Xg+RT-_Zk3^M##^)t,Lr(mHf=@PN>0FdJ:xmM)7~$?~g.-(ry-C58CuU+m3D' );

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
