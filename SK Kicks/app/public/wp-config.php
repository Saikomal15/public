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
define( 'AUTH_KEY',          '7hoW,fzuRzM)]5S<mAao*+XcTHp{?e*|K.Hrq[(>`MQcz{:pVlGZql62ok&8.x9E' );
define( 'SECURE_AUTH_KEY',   'h,kqB*NHfiFAv]3HO%@cgymn9_+cl(8oL)di`x<tV:hrgf^%uX|Y,n!^JJS!rl,m' );
define( 'LOGGED_IN_KEY',     '-lpK-,WW[CxUx;xtc^oC}5_9eb}-c.W|CjF+M(HlhR$,h ,hU+vYG+<3AN?NU!#N' );
define( 'NONCE_KEY',         'ozXlTPC]2|jcIj2M{%%C%*[`MNx#ab7|y!E_#/.eg no,{<TnWBVO-~?29`=UivY' );
define( 'AUTH_SALT',         '@4+/[JyNpksi/HIe;Bprz$X<+%7a_|m60y]C<%o6~CmOsEi,?`B|RmYXF6c}6<C|' );
define( 'SECURE_AUTH_SALT',  '0I3{6g3#z5Up[n T[@<}xd0}mTuapjqWO+Sz!EDAnB:vurZ<-m686p$M)w!jD3*?' );
define( 'LOGGED_IN_SALT',    'G9$_:Y3KDL=}ux5OWDDoEdDD@2A#0jF GkNWZ(E:(74jFqd0|ujv</5WAhwFU7e-' );
define( 'NONCE_SALT',        ' hp+cY|LW<UIAsFR5]$Yul&MrF]PI[ph|cc)|]g<ZCwP;^dWM;*$9!Dl}<bN^itF' );
define( 'WP_CACHE_KEY_SALT', 'u6-2J_3Nt5>k%|?]8[Ts1sn,J+_v(j@V$^k`V-^I`z} TN CU2|q+w#k+QXmO.dQ' );


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
	define( 'WP_DEBUG', false  );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
