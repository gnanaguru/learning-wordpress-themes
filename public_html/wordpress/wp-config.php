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
define('DB_NAME', 'learning_wordpress');

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
define('AUTH_KEY',         '$/R(9s++>B#(Xu| yq3p*osTJ|Iqu.oq1w]C|1|[@)^gI==xbGZV$:HChze^qy.M');
define('SECURE_AUTH_KEY',  'Ms0~}uUUr[v??YgnFj#S>w6~D?QASZ>ml^=Jo8a#vo-0.}RUck8}%sHv3O1$~hN%');
define('LOGGED_IN_KEY',    'm[g{/x=IcaR)o S<<.G7JE>;S3..jea8Vx*#I*Dn|SVHo5Jc5_A1_^`$Hbi}x?X4');
define('NONCE_KEY',        'VDQa)KCgMi4|*y=B?Q-3urhN$U{w%fHoq{_$b3NKC|3MeGeCTn95`PBto@YAfFJ`');
define('AUTH_SALT',        ']f:5MUqN&.8}W<?)j[jx}Gz`Q&>HI0VD8/4{LLc_o65_jpM-Z^QP@x$b+?4G3Szb');
define('SECURE_AUTH_SALT', '-P_}vi>W}g$RLIKU$w4*ug+pb3q6KjHT894lB*x[7L546Z[O){9pQ?IlYu,8s|F(');
define('LOGGED_IN_SALT',   'FvA[6U+Mdd&U<vZp+2M5Ho^.zb]@/[u33iThO-{7!Q1-8d-@c,gdOQ(yxC2A87>M');
define('NONCE_SALT',       '|OhH2%s0?H}[it/7LJ|)v(=w`n:(H<x)7= x`fOQAEHKzM<knL/D|P|3xNB)5o;A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lw_';

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
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'learning-wordpress.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
