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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '=!mQ6lxS~#0/{rv6%XIX#a>B~:S QGQ!^0(Tm0UBxzGPP>&vg{<n{Pu|%:^iRm_>' );
define( 'SECURE_AUTH_KEY',  'Wm-L^9YT{To3{kxhw&d(#oL8+x],eH-%KJOLBrtwp$)|Ah4h-mm%..CrRs?Ay:B4' );
define( 'LOGGED_IN_KEY',    '{Ib67lK+Z~Jr4/[Gl!@}bNf=;a0;X;YZK^^k:q8pDV+n`?`*`1hTQc]tUCP&n+9U' );
define( 'NONCE_KEY',        'zQzE0w:IX5_D<pQ:KajB/|3EOi?PpVry`6A0mgn0M]`+yT]3moqJ%!5j:FMviu3!' );
define( 'AUTH_SALT',        'd8*:kJ}=-hXh 4sIvK2i}FU$m~kTA+V >Zg>S/~krnUFaR,coNW=|gdZ!f{u0i#8' );
define( 'SECURE_AUTH_SALT', '%*O/6NB6Yov=v)y<gO2(lWVgkjX{TXWu$W]z`ac!j8Xl0G&0RADiRSZyNvCV)AFV' );
define( 'LOGGED_IN_SALT',   'LVOYOH0mr46w=BJVJkrpu3r4GoObgT(EAem=.m+@hgiFpPCLj9A4vA@4|aW!F$.J' );
define( 'NONCE_SALT',       '<DB_jD`FVQC)|~3r~[!EFzs/deIb*P,y*l`(gB&6l=qG*/Jmj4OR;}@P$kx;E4qx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
