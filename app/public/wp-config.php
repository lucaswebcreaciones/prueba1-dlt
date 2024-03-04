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
define( 'AUTH_KEY',          'iijbvp@qO7QR4:-5CMKpw)[!$C0m%z<`_QSH]/2_e;[30n-P:wf:^H{Ns^mL$(XJ' );
define( 'SECURE_AUTH_KEY',   'kg+4Ge3`6X?m=]~ci+LWsBZ1fmD$Z?bt}!>@z50NhFRb+enX4+OZ;94y#|TokY5k' );
define( 'LOGGED_IN_KEY',     'vfz!eJehNoMw&-Dl@<PtsfF[nK@ja?Kt<5v[mbcIS()AGH,`BOvW|9j-A^[<[dw7' );
define( 'NONCE_KEY',         'N;?+bd#7[+DBGO~@A9.J=/(X`K3bjOj8_AgTk]`p3VY)%J^uc=9B:Vga^EQhlfMo' );
define( 'AUTH_SALT',         'eZl%E=F3[^c*#7q+{%-3L2J[iS@}1dFOGT4P]>NU]Yh0O|h1M6a w#Gwl[.,e0LB' );
define( 'SECURE_AUTH_SALT',  'swu2yLDE+bbMFKnxo.4*0=F;=t3?; :ieQT}2|yh42>pX2`c.[9lkpg..%RLboGl' );
define( 'LOGGED_IN_SALT',    'dCS_X:_dbq#SJ2vo%j&Tc=v1,UPnZ_Nu@w,3Z#2p;ow`qhuGU1s.ob>Pob!Q+%~E' );
define( 'NONCE_SALT',        '/4+G`Lrvgj#9-8_uXMfi>Oiquydc.x)UQD_8|924(^f.}_jTnpRl6i<RCFBzG%K;' );
define( 'WP_CACHE_KEY_SALT', '|1sA>`ApLW~9#Q;D_}=glDuUI I?tc-@]yHZQdQRI9W^2]VtxbAvcTFe<+j3_M(f' );


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
