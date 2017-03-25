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
define('DB_NAME', 'yhhf');

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
define('AUTH_KEY',         'HR5#<Nsx|e<<!$:e-c[Un(#kqa]C.ywG0_aDYe|UAgmAiWG_6O|hroPGlM=>[3j>');
define('SECURE_AUTH_KEY',  '.2<s-0vN-z+[(LIBxjad}]gyMGKY8*-`@]gPL!T>Z*`[OktEt=^vGx>j:|Cg,sp`');
define('LOGGED_IN_KEY',    ':4]sX+_TQ.DJ*%_ g=/+[)|`@6/3R=`du<c*g$[SwlYa%tY?AJ8<`@woxK%Ez7B9');
define('NONCE_KEY',        'k@=Sr-^+I~<19U<oH[UY%0_73R4cF[&`J.Zt)]>^nKk<$u-A%[b&eef-4]wWM*Tn');
define('AUTH_SALT',        'ZF`XcnH)_=Gi0P=dohy=rphV(JYO<pcq0~]T6r$yIRKR5oc{bc1>lA>CvtB_]d=8');
define('SECURE_AUTH_SALT', ':Ih*1z3(eL,B>Kn<y0^Y xkl}Y#Poz.)E2]jEY8mwGvVDXHZw:ss-HE5wFjVf+ez');
define('LOGGED_IN_SALT',   'oKoAxuy};`+Ffa]r57g7kb:7RCAI*^17Wp*C&2(>}r~KM&m)8|Xs}r9BI#iZAR@b');
define('NONCE_SALT',       '7ru0$2SGVa(mFptMY_9D->1TLq@fTpcPVue@D-Y9I@>4zV1M>ZpNB-SI5yC0O8w~');

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
