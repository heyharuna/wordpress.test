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
define('DB_NAME', 'project.wordpress.test');

/** MySQL database username */
define('DB_USER', 'wordpress.user');

/** MySQL database password */
define('DB_PASSWORD', '3LMpZtZlagYpXrMy');

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
define('AUTH_KEY',         'rR4l |fFaDPr{4pi1qk}NLvn9z>nq jvueHn0vwYgqjqlQ(eMez(@6V;6.qzo=KP');
define('SECURE_AUTH_KEY',  'LO`LPC30~H3A[7krB3&OXj0nKo~C92PAi//vb`,(CNsANGXo?ngh?8!+1^zC7^@%');
define('LOGGED_IN_KEY',    'l KF>mGC{U3MZsa|2dd?7RAG>,G4(4=|4>!Q4o4fipB`L/sWs~F~K>%-xQ!g s|k');
define('NONCE_KEY',        'e_mU$QJk*6~si4.tcw#xU=Qz[POX~cTwO50VU=(_PVat+Hh@)SQcQriS<3[QWMoR');
define('AUTH_SALT',        'TfF+?UApl7*b>1y5I~Ojfw8KP%?,X/GJ|V@?}1Cj!wqGwWlMX|]ako|^6<[q*5P#');
define('SECURE_AUTH_SALT', '>f9ZyyB4`d0ES ]?Nb`ud<ksOgE$!=<EAz%)S!B)aqGB4ayR++a@`E4,]A2@&hqG');
define('LOGGED_IN_SALT',   '#P93k6-`F( 9/h;F#q~IjtmfI8bX*%jB{Z@q;Qjzqal<D7Drc|rF3p,O%4}Sm4}K');
define('NONCE_SALT',       '}E |fOqu]?B>lU#z*FK)Q*gRL?zX~&3q84{W9A-cxCyy i~ppH5@z+n1xOq/xI!t');

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
