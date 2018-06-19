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
define('DB_NAME', 'gobiernov');

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
define('AUTH_KEY',         '`G8_<9#C+vdcdpK;>MXhe{zy:2HmAJ(Sfe2D@9c6_4p0_i-BpcbTI`C7n7*?q_K8');
define('SECURE_AUTH_KEY',  '6b`CCkW+2eL%k)+wJj$wABq]/zkdB=w{Ox)m3D~+#XEoI7:jaRUR(ZkW+X<=hv#p');
define('LOGGED_IN_KEY',    '&QA9UE1. N)*O>=Sn3>WI,+K)7z:i&@4uwdY,-`wjT|@:P#(0%7CTCx p8z#kU!-');
define('NONCE_KEY',        '@+mV^Me*fP@E92^2gw<u$rl]K)0=a]D3eiljIlzsDif6c$gTueD[Be-ATY448N|;');
define('AUTH_SALT',        'roU.Vpt|_r^`mVvuU[9oqy(nRO%}s ,wfP=r^.uU9y5E;c/r[vV-[Qo+o0YkJOJ/');
define('SECURE_AUTH_SALT', '?l!_M2RQDqTGm$K$2P+=mS_7<u`GIw$e$$|.$<~UQdUS--$sh{,FOIWUa|1BywrN');
define('LOGGED_IN_SALT',   '*$](s+#0dm-lvkfe_;]eFjs~+Ha0_5/$H0 Hfw|yGn!!L;=tp#Jc8qz$}/!FVPFg');
define('NONCE_SALT',       'tP)R]@Vi;fK4FHk^:T4h5[q3KA-CK,e8-]uF-wm]=uxY4r=>F4{?MLr2(6J+5HxV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gobiernov_';

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
