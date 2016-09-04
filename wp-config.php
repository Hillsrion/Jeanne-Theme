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
define('DB_NAME', 'jeanne_vitrine');

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
define('AUTH_KEY',         '/0F `i>lH1APg|{TJ[Fs6RG|KP5,E*JMf}K_mOhYA@UR!4dJ`w:5<OBrf&rmGl*+');
define('SECURE_AUTH_KEY',  '7Psjf.nb;OO!uC)5bA8u:3?<D.I.AM/mk{*QuhGjqb AO)MTS[b$.wfuNh=i,k>5');
define('LOGGED_IN_KEY',    'jDzHJvL*|S--IL6Q)KW+[f.>jB4xX7|V1+{1&[yq7Qv+Y(x-NJOm2tOz(-f}(X=|');
define('NONCE_KEY',        'Y%J|2QhZggH-=l$X#<0)+|H*G.6I@vMBY_!N TA0,h|NM&+BB=9k%;)e8P)s=g;i');
define('AUTH_SALT',        '+a]UC9lD)O(?yv 0y_|+/L_y>6pb[|g}<x6 x4+5bYM1JyilW;JmnUQu-cd3-]N-');
define('SECURE_AUTH_SALT', 'BzzPt%{|w+,e)ALLpQtVo{VAVtDVcl/P][!zk->ZEs.wL?kBB[iab+K@k)-ABp?F');
define('LOGGED_IN_SALT',   '8;Lf@M0=0KeXmL#oLSu@+K3<UK!Z{}2Lu2`;KO=%Azu$lVZ+ *kbv5$xa-*nfif2');
define('NONCE_SALT',       '++C~NsflLNg2kdzKR%Nt3kJldQ_iC>+%AIH$[amIrIPLhieeaQ8HWu/YzOI%,~-2');

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
