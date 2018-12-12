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
define('DB_NAME', 'npTravel');

/** MySQL database username */
define('DB_USER', 'nippon');

/** MySQL database password */
define('DB_PASSWORD', 'nipponTravel01');

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
define('AUTH_KEY',         ']-wsZt*]J9}K9@p3J]_:D#dYP!J(Sg0x2;WM@mrx_rM.y3MN?X7L9abyzS[0bWw&');
define('SECURE_AUTH_KEY',  'H@CD|R8;6{(q5dY|dt!^}h}i`GCL,m$}#}DI_l@ob_bn!Qr3HVtCyrt.ZasGu]N?');
define('LOGGED_IN_KEY',    ';[~PnVyC|.]Sj7xYdendF`gsVbaKc5qi`=h$aZ @rj]T2zuFg$&F+j{Zxd^.3.u|');
define('NONCE_KEY',        'HpGgn(%-U3xC80&)bnsSwy2r=Rju|4No1vqN/%M5WLE]|N^~T9W!Q4CC`o|@(C?`');
define('AUTH_SALT',        'vu;ltL -%&PW< IYM=;vjkdeYl<7?RVzG[t2!C3cv=toYyyN5Q|xKcPj#Wi2{mk!');
define('SECURE_AUTH_SALT', 'Jj ,P^;o-jYU{_oqvT++G=G{V]SNxT~4`9<)J8|hbc2d/Q{p?/8y:&aaCNDn59db');
define('LOGGED_IN_SALT',   'p!<B0pMBMY7*bjnt EpWc~dH9C:/8fN ,($#PHNd(t?p4ox_<^,Y&dx72Uz-UWDw');
define('NONCE_SALT',       ']pm%3S!6.dy<*]*4e&8OC&J60#C!`U]@H:H^_J@un/PgVOs!=//Z/mu;ASintM)%');

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
