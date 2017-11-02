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
define('DB_NAME', 'project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#;jwy+/y*~>{<]a%>2OFz,g&(g^Jat1=4b935=MYE:Jb,+wM%y=bEs7A+I!1|XG%');
define('SECURE_AUTH_KEY',  '^R>wwU+o[LHqT&=I~*wq!c+7?[0pC5{C%/8_n|&Lza8;:!P#$g{%]HrkUELe3Fv5');
define('LOGGED_IN_KEY',    'iz.@*dRnCjpZI>S,^;ravT|Afx3N|qND_^6v6V|s(2D3sVx;0r5V+V@Fa?W$c$%N');
define('NONCE_KEY',        '_0HN4Zic>?*]uLL/;O-~@l-&,r9lw4v`dOYWz yz67sdi&!WHWUrP&]~JeJd&aoD');
define('AUTH_SALT',        'Iu}n x{vWX{6;tKRKwI=Q=PoC1=zebHSU)[TR_O>w(@[k%<{ Z{t9C(EF[xK@FGg');
define('SECURE_AUTH_SALT', '_X71k:v80vZcyXt QnAuXK`A1oy:cqm<Y2~R*ME#Pv :6}m4k(/BvAky<W88UT2f');
define('LOGGED_IN_SALT',   '+;R?k4$JEb>}-$)kdn]qbZI.%_mg->K=?)f1JG)7(KLtxN2XoQ(Tz9Tq`(]7/[?J');
define('NONCE_SALT',       '5f<$yqM8c7V4qfH>;INMva?ij>PDD!B+WK~G~[4+k%1%:~*<yI~H{^-OCyT!Gn~]');

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
