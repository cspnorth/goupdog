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
define('DB_NAME', 'goupdog');

/** MySQL database username */
define('DB_USER', 'goupdog');

/** MySQL database password */
define('DB_PASSWORD', 'goupdog');

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
define('AUTH_KEY',         'x;ar`m_Zz)dNzgn2(^Y(0UT:R,cLG_<,fg|H}#O?(E=SK8M?h-IIyL_x#!AVmRnX');
define('SECURE_AUTH_KEY',  'F!c$(OeMU@99AlzMwPXDgQHtGu`0w%SNc!% (sJNr1|g2%dZ:#%% J 6K,E`XOYF');
define('LOGGED_IN_KEY',    '!v49!-0lX/?T0rnzHQ>6T!0|98c]9K-ZKByqeb2^4,E:wh9Uc*&+8O0Xhvw$xBYP');
define('NONCE_KEY',        'BYUCgZQ(g:hBzz!%Vf9fqG)?FZ-%V,*#4WOEa=!W_h9B7.FEuY<;2FXo=U*+zz+w');
define('AUTH_SALT',        '^LCjW5 t!P;^mN^CZ@`&[?iJ9=.NO`1LNx!~wS,r6S8Zn#kx}-~T0[[bMDz9=M~*');
define('SECURE_AUTH_SALT', 'lvh7t$p>f[i7Y^~jbaN5+a2/JISuDa DzMj`blptQ$Q N{i4@qdb|=Ws ~}To6FI');
define('LOGGED_IN_SALT',   'f0%be;oLiDOZSp{~smZAJ-=q:jOvI87vm7W319`:2.MYnxSb/EDH!X5BUtc~dAkH');
define('NONCE_SALT',       'jfB0!U6qoWU3Fk!gk$]=C[*1Ny2x)h*fTn#dx4Ja![=S~ >uNJ_J*[tbqaeoj|*Q');

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
