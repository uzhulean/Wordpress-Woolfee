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
define('DB_NAME', 'woolfee');

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
define('AUTH_KEY',         'N)Q!fq42oBwXz-$1C$p3 ?0%z_tM;x4dS3hu0=#^!y; 1|AHYlpY[hK*[tG&/T>b');
define('SECURE_AUTH_KEY',  'c4sHIlfS9szmi`<vAW0}]$cM+.d9{7@ d::]a NJ~PZsU/saWA%R<9?S nz+D[ce');
define('LOGGED_IN_KEY',    'hV<gsgBi;Y`rUkGZY7}7S;td3_O-)zP#?J<VqpkRW%Z5Cd&e|x9}+An|wxq0S<i{');
define('NONCE_KEY',        'F)G,DfylJfa2:s;Qe{<i*L9>S=7O^[y40~.t$P+%y;xKA_UEX_B/~1vU/m5P!-;N');
define('AUTH_SALT',        '7gyX#$AZHaxU/^ .6<f&-wS,a*W6$5I#m#i3#PP#Bpj^}l_#a${0hiRY~*dHlZcb');
define('SECURE_AUTH_SALT', 'shxbh<v*0P=J5<4o(j0v 132_=Wb_BY462aFLmzCFg+pSsjpSsfri)79]~nJBn}w');
define('LOGGED_IN_SALT',   '-Au6E TZ?5IIX#X VT@eG%<H6g4:$i^,D<kBDM]+gqk5w*DYwpgj>:ej}Fie5wlO');
define('NONCE_SALT',       '(s-zK7ls}gvBfkyMx}/8bA>>*H}b( EL4$s,(u/tK^CYX:]z^m&pt9bwu0:6Z)V{');

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
