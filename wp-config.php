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
define('DB_NAME', 'icon');

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
define('AUTH_KEY',         '66wTBFU7-_-nz41syAfV}f~kO6|^wYX^Q,Baptwsc2|,!5LJ`Akt]c?<fN{L&sL`');
define('SECURE_AUTH_KEY',  'vBc]cN9$h6OV[+tc=ANPRgyjNBWw]M4B>_ ziZ:%0c5Ejv q )OH=<[w%&:ZH0o/');
define('LOGGED_IN_KEY',    'P9kMleua3a$|)?tHrPAPpk9brp*q8&w,u#J@guT,(H[<16&mrxb|_RI9-;v-AYT<');
define('NONCE_KEY',        'W2NY-Y>0jhT#z57%Gv(/`w#;}4>Y6)!=(uW~Ku~:K[l;G2Q9|fg]Asg.I,,Y.c}F');
define('AUTH_SALT',        '6Ak[rfjj2S:Enawa1@5sN<q?e/m}~.Lc1IfBKI:s,RQU~S3gQe8wvI~%xFL4dKW0');
define('SECURE_AUTH_SALT', 'r>kAq,H1cU*1xs7x.p;jT<YK,3-pUC~/<l4E_wd/?GBe&y|zM!@ijc~3`mNxr#bW');
define('LOGGED_IN_SALT',   '[8.,3^^6Mszb#~/Et&wj`Ha<mKFzV+OEL{y~_:+jzni9NZ.-T2|ZVJTk7^Q+Qxqs');
define('NONCE_SALT',       'i,7c&KDM7j>bB|atd@HT4j)l6XHfH]j4b~%nNRP!92pXPWgm>OS@[ie#b5w(+K^w');

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
