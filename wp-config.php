<?php
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
define('DB_NAME', 'hocwordpress');

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
define('AUTH_KEY',         'GZ[)F=.8NyO| K6,*T>`V<RO7Zch<.=&xCq*`@k8)Pm4t{nIcFPsa^E;nBdhIvD*');
define('SECURE_AUTH_KEY',  'o5^&p=GKp11D(lf?fx6w|VNd]{t7vgLSEKmiE},?[Y4ml_kC/4Cc0(%vJc:z#%@O');
define('LOGGED_IN_KEY',    'bA|BRXoT4tu+X?ol9bMR&w1RU2b%p{#5*qqaK`r+`xow<m,tP(3)6S]0wwLT)X^2');
define('NONCE_KEY',        'Yn$U{d<$s;B}YAf_GiNBJ]ks*M6H,X1`cU=[(pTt>82+1SN%a4h.vYbTem}DG&pv');
define('AUTH_SALT',        'zKA^Npxs/]i_ZC5jzMT<Ww2H%i?A@|Bpxz>5.7;H,L!B:i`.ZmN@!.Zw[b.%s=4O');
define('SECURE_AUTH_SALT', '}~[x.DCBwAp08vGImx~h+;ap0_Jr|eVY,+O|qL|(>@xU|&|ya@7k*qEr}e_F #vf');
define('LOGGED_IN_SALT',   '?kzL7;7ZkUT.=^NJWjhKQc.8]s =ZsZV3&^>{CcJI+EV+Jx.ZK7RlV0#&5[]AN55');
define('NONCE_SALT',       'TnjepQO3aMx70ZGiW2QDEA4vNn|X2|qShR.74{69P!}UQ,yN7GQJKnXUyH)v5y9o');

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
