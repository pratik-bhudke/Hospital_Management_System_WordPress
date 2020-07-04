<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hospital');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'TPlsX9mHv.#2~N}Q?{+hi>`zpYudj+J0d9!`3cN>_U/4y?D,sb.yBUd@xAwPO] l');
define('SECURE_AUTH_KEY',  'dN#YnPONM%icb+J,0}^nX[7p_nl/XCDB9YGTN@enAXmlB.Xy8be<R.bg~6/D4*N]');
define('LOGGED_IN_KEY',    'eGy(l&AQAs*YXTA,D?Jd{ndRkmZaskH1dVGgqdzT)d9+#vhdUVO: aw3g}0/oth8');
define('NONCE_KEY',        '!f@;WjwHFNRrUX ;jf&ne3uv3u-`tQO5pV+a.1@BR2,[IP&B&Q.1GFiJXp5e.IJj');
define('AUTH_SALT',        'Js8]Nze*yWZPE+&WvN,vARhIX=+y{vLpd9Ll|%LbLbgrRs.e{s8#VF u<O&(.>j|');
define('SECURE_AUTH_SALT', 'F/|C]n=4FV(-V?uk1@L9p`{iHuU499@L+xfl!e6::wPhoFSR<?lLD1Mi; cO>7KO');
define('LOGGED_IN_SALT',   'kK)$<<=ZDL~~$$zWU+&GHBKnpTwPEt@l2AJeHJ,sd!_~-JT<Y:vs:]3H.o.+4!m}');
define('NONCE_SALT',       '%<f{C$g393`3tvl;<[_1o)feuFa#-#8QQN(t|K$O#(FPvu}uBu:.|Xa3|4i+k#[3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
