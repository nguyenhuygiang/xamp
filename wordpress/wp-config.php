<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dbweb-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-;eWLwrJS=`jxr$vN&N,49zK0Z)NDQs)sOCb-i3 K3+`SydRWa iOUx:g32M )*L');
define('SECURE_AUTH_KEY',  ')Zqs2CY}f%! Y=/,(c0;,y=c`txk|y2Pv7|k3e_rjm*=TO36elV<]}%6Oi6Nx+i+');
define('LOGGED_IN_KEY',    'Lnmr4_(<2]*3=GwL+s(6`-YFi)ks]0gh/@[|FU<*Hp({HBU`Q[Jk:=W45J2zn=fD');
define('NONCE_KEY',        'b~tH1eIj#5jO[=xOsuPfN:-1Z1}^I<dZ1hfL[zVN:M406}^CQa3c7r+F22W2nd0H');
define('AUTH_SALT',        ';ImzDlXHxq*c*Tj?Qb;BcW+H^x@#fU^(_XM&k4jqz7RA.V#MP4Q-nnEf],p+lmy-');
define('SECURE_AUTH_SALT', 'P{??8ACZt+?`U0y(v#Cn$<-J!i0%EVbqT!u7B-mI::L%Er6M)/LK*QdWhkx9$#RN');
define('LOGGED_IN_SALT',   'x+-9/RZ)S;+qbk:*=SNQRz0W4j$|`X6|<fbwtv-<yg)f|536!q4!~ofyk96V3GGJ');
define('NONCE_SALT',       'vW+hB8eq#jusA P!QX2rKq4r_j>{L-Vzq]&<7^4g>RMa_EW[<qvK#U/j%hd8X$P*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
