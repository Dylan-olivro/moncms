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
define('DB_NAME', 'dylan-olivro_wordpress_1');

/** MySQL database username */
define('DB_USER', 'wordpress_df');

/** MySQL database password */
define('DB_PASSWORD', 'c0ioI_P1P5');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'CK%u4kwijJ7aLkTmdQ)h5u1*(!#&tw(b*cXwF12VU9nRXtAb%e(w5WzpJ5mVs8!X');
define('SECURE_AUTH_KEY',  'rb3XXZ%WvRDZpVM^%vZt*aSn%J5Lu@hL#hap&R@k52mNdsXIsNM7cIVCXkf7yxZ!');
define('LOGGED_IN_KEY',    'vkl3kcBCdjcPcOeW61pUZ2pjB(HXnc)9YAjAQhIkqscJZLbLH(H*u@&Da!DPb4Mp');
define('NONCE_KEY',        '24q8A8EVmP9BS*r3^mFhTSHqs5CLmO(4&*neJm49E98vK5^c8PM3bcQXniu25tvH');
define('AUTH_SALT',        'L@1Spkit@@aWGC9JC9zxcgC3Erh9498h&V7oCx30R!O6TeYLAw!8EhYqd&4z#T8v');
define('SECURE_AUTH_SALT', 'e#SmTVPtP*I#IRGZ)hDPfwCoN3MyLl1r7ETHgby4L(xfDlhg1qd*TyZ1P9jCzY3k');
define('LOGGED_IN_SALT',   'jWDFlmw(pu!ErKNz9Kvkk#J&GanWD4@&QIs0bTNkn!76Tu1f)wEY3*Vsv%i^QfQB');
define('NONCE_SALT',       'c@ws@MlZ6nJTVI&*JE2tRr9(YTCuUW(z1L%xOiUr@D*5l6dYGWzo(gLyfIk2&Psu');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '89gGbWO1lQ_';

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

define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
