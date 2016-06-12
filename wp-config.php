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
define('DB_NAME', 'CarltonWP');

/** MySQL database username */
define('DB_USER', 'luke');

/** MySQL database password */
define('DB_PASSWORD', 'carlton');

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
define('AUTH_KEY',         'A-^I(FkoUIfILODau3h3{B RB?/7F(h4#I#Ubf5q2#<rpO&QY39qKOC#(~XD$%LH');
define('SECURE_AUTH_KEY',  'CWF5<q;jS./kzc0,=T)WX(Q_3)F0QT~egdNN#72fHLkL*T$A4_]7t7~=dZDpGJJS');
define('LOGGED_IN_KEY',    '8w9nVT|8T~R^[I.=N@wLfOe(Y,^$=[kb1S(Y.K:CaxW7g&l;d>a.j]o&38lZ!?eO');
define('NONCE_KEY',        'QclN;jndQ|q3tn^!M*`e;/`v82gniv^9Djn;H1]s[C<KNZAAP=B1h-(6CBq.!9[c');
define('AUTH_SALT',        'A2w2hT*?F|{R36O1`n0L*?v@DRCPJXuh0,fbJewclpD!uR6]OZ}!&|LLPR]27G;p');
define('SECURE_AUTH_SALT', '#A;LR<Ji)tmK&e-pn8cv)=n3oW0cEFn^6&Z^!uZ!6o0=H(%:^KNiyW_VyZD-|01S');
define('LOGGED_IN_SALT',   ';E{MVu|kT*eW/zr,Y?JpSx#]nE<~&hiVYS6GnALNU.` k<MIWT7k![L:vGUN99Sc');
define('NONCE_SALT',       'Zm;uueDpdd8H6Oc+0kQ_xCs|!{V-_~Z$f,cM9zr@xxRYcVKGa_YU#atVCk~Yyv+g');

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
