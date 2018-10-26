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
define('DB_NAME', 'wordpresslearn');

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
define('AUTH_KEY',         's(K|8:ZnIak4!] ;@kY=YB8sm>E%G%Q%_*HtS6E <;?9Ocpmj]]csha?[7 mY{a+');
define('SECURE_AUTH_KEY',  '1N/&]3[FS8*D5:pmnd&hqcOk4LKPu+b@$L;7Uf/ys.,%zms8Ya;xa?7b_Xo6Iy#Q');
define('LOGGED_IN_KEY',    '?Q/Kwc02ke#p- _8Cu.4k^t`d7NtxTHd`V* XqngD20Xl%`Qkt/m8G?XZ&/$XZiO');
define('NONCE_KEY',        'dnWdrQkKhglTq7a>!CA9*%[0K2tqZ?604IHg7mC{la4W=hhd)`FcZ(!g`{x 1xP|');
define('AUTH_SALT',        'i;jw^#(J}MiG6GdQ6}j70_qjDA,&U;vWj#/^A_*m9*lp?hED!)snI7lEbTlY1i0r');
define('SECURE_AUTH_SALT', '*J5x^}F]R:=j;_dJ3,R=Ou ci9^RX*9jv=DX4+,@#k{^oWi-<LF~zg,]k)K*>QJs');
define('LOGGED_IN_SALT',   'l1FE{. G`B_SK0NL2kj54/)-h4d]Wp{QmTnl&zsjnqT{U+4A%(S<C}X+E&mRD2v(');
define('NONCE_SALT',       'c/c!}cigz#UR GGpEZLE]B0PQPGe4:_H6}<5CoK=d(W@k|AL>Ux/1NUZ)?;ZMIm}');

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
define('WP_HOME','http://192.168.0.127/wordpresslearn');
define('WP_SITEURL','http://192.168.0.127/wordpresslearn');
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
