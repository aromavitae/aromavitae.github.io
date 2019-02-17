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
define('DB_NAME', 'aromavitae.github.io_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#,r>t^s72xBxfhF#)1mrgG;{|OX^?/b)x(#EY1#$hy1;e)?>/q60r7wdKt|8c%f[');
define('SECURE_AUTH_KEY',  'ajn5.bM&;cUQ<{:zUw/m&&JK#4b|:4/]UYZ8L.PIPI_Sfknjv+*T.GyCypN].Z[x');
define('LOGGED_IN_KEY',    ',r|{3kPY6{IiOdNSG,5g-!I~tam&*:~u9Q4h7e8 v&,LAYGj4ad,1HCAOx&BT:q2');
define('NONCE_KEY',        'lTit/X/I*%XZ2AA??axp>vE_5x(-QI[Mub+<A!x|NuNuC/3=1>YbQ[p>,~[tn`%=');
define('AUTH_SALT',        'eS<nTV}2oSNk>[uD-Zw|Nn7Yuz$AVk;.J6iXrZ~wQxFjpau4GT0jwIQPr*zz{A&X');
define('SECURE_AUTH_SALT', ';y;lUQ>07Bn&[i%5C  @d@{=,%_P]@$w=1t81@y2;J&YSNz)QYX8,<VrSAh#&WF7');
define('LOGGED_IN_SALT',   'Mo+-&5=qp*JjW~.B?E_loMEc<8xgh:K2pb}.MG?,9=pR  _FIDtkKJ&8PGLDrhf1');
define('NONCE_SALT',       '<zzv_v$Vnt}&A]YF*@xg)Ps:9ITM{XDkJnV]A_4wzV2^p!t*(NoZT}50rm/C|hh3');

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
