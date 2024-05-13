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
define( 'AUTH_KEY',          'NJvBI&0mLo1$@UtPKk?./f<(jB2Wh4-x2}9w.]nciLHPis,ioz3)SD]0GyvmqGep' );
define( 'SECURE_AUTH_KEY',   '0i.JQXMIp~o&d_^(LzwMrz:~;`qj}coy2:d^~z,0xizSioO_+#-wJtNYkn:/r:2P' );
define( 'LOGGED_IN_KEY',     'HW.C=_Tx1<ge),S?lUwE;G&7&r<-D-#C#zY1E}tQx 7Eec1J]&thjug5O=<$u25B' );
define( 'NONCE_KEY',         'JNFz33m{{oMc:])tE;3H.RGKq-}]6SCx(}0|<b(9h.IgWz9 !8#7t*yK#uRD`!S*' );
define( 'AUTH_SALT',         '(|!/BOBlv-+(vkDQ%dCWs--9i-Pk/Rk.`09QE!!{,&{!#9pt<r9K9GCQ7xhBj?)>' );
define( 'SECURE_AUTH_SALT',  ':dn3LuV7w<c1EOZ+[2&):=w&JXunWwWy`_>pt&K6~IB3}Fd%&]3`.C].N^SlW0GN' );
define( 'LOGGED_IN_SALT',    'PK#!l3+:(EDyL2d)fF6jY|0thYj1AA)3TX0e_IAuVZOA[WztDe93Z|7^y4h}SDX.' );
define( 'NONCE_SALT',        'JWt:@]3Mf. I5lt#4eG 7L$a]j73M%2[i+,R{JID`?f=BI-wd:Rs821#jV2%t3U#' );
define( 'WP_CACHE_KEY_SALT', '5#v;laN{8qTJIs]Rg{B$e[<O/4c?=&U/sme$)MEl@Gr=Xd|JQI6H^956pKkYind_' );


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
