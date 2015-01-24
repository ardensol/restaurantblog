<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
	define('AUTH_KEY',         '9nG~8RkEK}Lp-50kk!iw*Ze+}YtNb>IM0OtvmS>-qvL,IkT|9jnA+(abXW*]{8sF');
define('SECURE_AUTH_KEY',  'T+J1NO @|AWVlP<Kx1/<Q9rW6_VpvO]yOF#AF[x/qL`:fVFR`f$gA{9iLtDD-m,R');
define('LOGGED_IN_KEY',    '@t|I)j0Zz$oAfi|-*fxnpNNE~c[s93qGt+=T8Lp=(TDy|nF75rSU$v#69=:kCdP;');
define('NONCE_KEY',        'PH8V%#Xe=?>%3l[7!?1{AVzykbDx#xe#7,%uq8cJce{*MVME!nnC`$mrIj9O^4[~');
define('AUTH_SALT',        'Jz}z=6nRsOfh}NTT9eYoI[KHi8UI#k[~7||,kFyV4<Ik7@H<|C!.+$o$_<m9sWts');
define('SECURE_AUTH_SALT', '||{ILHO,Fyi!!*/l>Lax,+k22$x4Qlzfb,VN||pu+GbIw+Eu|[yhY}q>uoXB~gy?');
define('LOGGED_IN_SALT',   'cFz4)bS-1g1_,P)G )> ozM]d,%S|-12<=x?|)_2{+YU<o|T+g/C_Z`yY!]5.i(|');
define('NONCE_SALT',       '|WNq-VdgA>,zt+G<u@|%=&p$;{-]#<Fp@-7f:?jylXy`D;MXU[O`,8Y-96?h~kO|');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define( 'WP_CACHE', true );

define( 'WPCACHEHOME', '/app/wp-content/plugins/wp-super-cache/' ); 
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
