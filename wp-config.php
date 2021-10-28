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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'UC_demo_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '4463<M7M`X}R|B~}aA~_A:J-0zX-2:<v 9iUM5spuli]jDCwR4)q/pvuW`>@QyaF' );
define( 'SECURE_AUTH_KEY',  'MyW&uxBbq$=ny{lCe8.t@XiVM+`V31zHSaxt*89~WLmKw 6~5vMNO6Sme5lB{3(.' );
define( 'LOGGED_IN_KEY',    'QTeY<aV,vhF2ZcC7(gt4**cVE: /Iaor[4}&eajfah5-8g>1tvby^^P?NZjl)3WY' );
define( 'NONCE_KEY',        'S8Z%2rj6s:s{C(:2&QD_e -Qw?={EzJ8&>sLZj6{l]B&5NR>CZ Ubwfa3(~-3y&E' );
define( 'AUTH_SALT',        '>TJHPzV_<W9XV1snL4adqsm2Md/{<3>vfpGP9~mblB%jp6po]%pS,=JD/<?!h:Ab' );
define( 'SECURE_AUTH_SALT', 'TNL+B#cm^c3RUo1d6WK(L~Oc^.CqPf65`548YT{!tK;-S-karLs_qmpc)7J?}G;+' );
define( 'LOGGED_IN_SALT',   'vi0!c=?Sy}Mly{w@KyF;`f+j(SD5DVL~#);46n{a](5zbo$0PwaQus1v+n*eBU,$' );
define( 'NONCE_SALT',       'o2cpahCOkk|Zr_$,tP/gYD=2TX)7:}d0WmjH^O5+;}ulA9*8h#N(nhOP5NVV1bgc' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
