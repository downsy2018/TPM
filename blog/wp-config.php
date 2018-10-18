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
define('DB_NAME', '_blog_www_theparentmentor_co_uk');

/** MySQL database username */
define('DB_USER', 'blog_660119');

/** MySQL database password */
define('DB_PASSWORD', 'xbY6Jp3KsP');

/** MySQL hostname */
define('DB_HOST', 'appdb3.lcn.com:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'it^)fX@IAWUCas0hs1De11#Ly^vlG@50CsCD4MUwlRF*lcr3P7*PS6@6DAG*Efdg');
define('SECURE_AUTH_KEY',  'wwwY8XhtNiBMpVg@kA8ZTu3LcdRNGTHl4)Swi!CA&3oMF99&R5m2&4NX#5MsLFj#');
define('LOGGED_IN_KEY',    '5oSqfFW*)He6ZyueM3V(O2Zs%!yFBog!e1UadUAY66OVVmRy@Sr3MiWtHxRQNo&d');
define('NONCE_KEY',        'G12AvCOBk3bUAhZdnq!eT36*&kyzy#c%URxF*uc&sq4S)wO6#E0(aJu^kQLJtlrR');
define('AUTH_SALT',        'lpl&mG&4!(amhXH9vqw@E!sJhmC(M&pgMPbDQLzhTZ%p9dfT85A%Cv*V3#Ot)kEr');
define('SECURE_AUTH_SALT', 'E9f!bYSLPBpD(6ovUy@!VPqFqGgCXyL92j#tIDDL8PQ00RhcJC!kkqBA3LZ(r^O4');
define('LOGGED_IN_SALT',   ')g%o9hEK9TlHzCb4FdY#uWZxgfSeMFX&SF8qZJ0OM2S)%PWmjS#FMtg3YKu5Bfeb');
define('NONCE_SALT',       'OFCln92Plo7@*G44(n(TdmOgIjj^1RNliBAafHx^TsSC5P1A&u%KWjyBx&4dQsvS');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>