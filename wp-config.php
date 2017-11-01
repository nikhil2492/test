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
define('WP_SITEURL', 'http://nikhilpathak.online');
define('WP_HOME', 'http://nikhilpathak.online');

define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'nikhil');

/** MySQL database password */
define('DB_PASSWORD', 'Creatio_mgmt');

/** MySQL hostname */
define('DB_HOST', '192.168.2.2');
define('DB_SLAVE_1', '192.168.2.6');
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
define('AUTH_KEY',         'w=3AcYGLu;aqHw%EPGL7*giX}]Wh8@:yF?-yqm|bW#< r%^5HpyM71&Rm;=Wx3F6');
define('SECURE_AUTH_KEY',  'w-SV$Lbad)8Hq}qjU#b-4a@`b)grx 3uA/9qSF;d4>ratA9=O`i.u0=Lk<V@BYpY');
define('LOGGED_IN_KEY',    '9hh&LMg2safG{zx{)tQjI>{m*jynMlvh$7EHLNG:{m>@H?zQ=(h5{ZX>(>[qV*{`');
define('NONCE_KEY',        'X< TR62GgQpFt]Q_RE`ZCa/-Td@R_^GV_w1m<2HXE#z>u<r]SHp&pagN{}e;w; -');
define('AUTH_SALT',        's1626L7tf6cS^F<W=%!daqT nHDd?!T0s2)om{sEg}48-+>*V=u|7.UKym@lQC_5');
define('SECURE_AUTH_SALT', '6CI~~]r{XJOsywcw#U}x[6Z6A|UepV]ZY`Mv>JJgP0%_=|^M3n<GC(M@a(ai1MCB');
define('LOGGED_IN_SALT',   '8C&Bg^B(1+7-)i({9P] pbFZ#A#-dlZ/DA@[|{FYrspSXP>9]R/Fy ;dz^92SO@t');
define('NONCE_SALT',       'zy_0e@k7/h2Yk%e+}$T!.bKL=6FqQ3Yz=uKekQw2zk.ZKv1#3;DXdEVtspGW_o~3');

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
