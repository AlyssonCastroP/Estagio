<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'KEygEE:KUGb9Mrf18#t A9J*-Y;owT&|;9jgQ=|ED5B24UA4N[D|]f<NB)2Q)vu2' );
define( 'SECURE_AUTH_KEY',   ' QP<e)+dQ>0wW13|OmPv|%dv2,xOa&[a2k?+%wg|{RjznbxteoVl[Je@h_+$Fc^r' );
define( 'LOGGED_IN_KEY',     '(6zTGd49-bX<_Y1qf+:{+1|{]SM5zLjPIL,k{)kz5$<=KY#WuIo$$W<@,wpb{.;a' );
define( 'NONCE_KEY',         '=K8We){K^m+Y2<wdxvfyZn8z&<M/|`tpGQ_|+:lx%Nk9:%3#j_$i:RDGuBJ:W`KS' );
define( 'AUTH_SALT',         '~K!NeC/IH($JG|jNg$&Xhc0P{!~Nv~25hhBtzi T_)0e*kJ_f(NDY:IOX?6Fu|am' );
define( 'SECURE_AUTH_SALT',  'M$tX`FkJpXwDp <~guBAb)=J7iWr{AOovAm:AEaWw)Ab]V_Wpm;C(Yql)(UQXIVR' );
define( 'LOGGED_IN_SALT',    'o3nNjPirp,u:)XYn@?6`GfDtDu0$v~!--xx]<[1 JBkV!x`Zsx,fq6ZG;d;WrP4U' );
define( 'NONCE_SALT',        '&XKov9tB*}k;f3tE3v!Stz(KMlh21Fq-Au6Ui:$uCM(<%q]-=o]&j>GP}@yLg.@f' );
define( 'WP_CACHE_KEY_SALT', '//j.wS+^5A<T)uZ5kdff}4>-xtBqw6zAjl*STF-}*FS.:OdmJ-ua[:)gs[W(rx=)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
