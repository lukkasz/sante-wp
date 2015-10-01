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
define('DB_NAME', 'sante');

/** MySQL database username */
define('DB_USER', 'sante');

/** MySQL database password */
define('DB_PASSWORD', 'sante');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Allow Plugin install on localhost without FTP */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-rrdLD%Or|9C k5v(nW`Kszo;;xC^(Q~]<!AE;$U-= yWw|g4|}u&o_G%BjD/>YW');
define('SECURE_AUTH_KEY',  'vDcHxcj|QFcMNI|`neGb#xGDi&-*+x5|lI%|y#/X$v2lN^=5&zBh*5ZaG8A:sta)');
define('LOGGED_IN_KEY',    'M3d|:OPj2gCk#$g02GK4qgB{*-^dN5LSE|~)/Ubomr-$+-7} 0TGF$|+Sjv!]5K+');
define('NONCE_KEY',        'j)y(2Z(W.per-Db2O=;5>YN83XqiX2!Cx.%#/SI$%`;[r0S{Rz=1Oj0<!TN5x,-c');
define('AUTH_SALT',        'VaEjfJ-u+T77*$m|mrneI1:MAeV;#o{u0-zVcm>nR68,br|$W*]DNck[.(Uq7p=m');
define('SECURE_AUTH_SALT', '~]PYn+w*(l1-dAi^3IO}?~+M8W?T8kW{#Dwr^@*JW{|h!l,nPA&+(o<K$q]w16?a');
define('LOGGED_IN_SALT',   '6!$-G%|%|(1TX{,ttLH};z;/^e|W|e}%A_p%]7]47_YueIe1c|&U,[zPX?%LQ=SJ');
define('NONCE_SALT',       'oIDG<p(DKPV^^bx:g5YjwIC._OCm46EyqT5_7|*pLAG*,%7J, (Nee|nQ`d`t<r%');

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
