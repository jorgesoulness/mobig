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
// define( 'DB_NAME', 'db_mobig2021' );
define( 'DB_NAME', 'db_mobig2021' );

/** MySQL database username */
// define( 'DB_USER', 'root' );
define( 'DB_USER', 'mobig' );

/** MySQL database password */
// define( 'DB_PASSWORD', '' );
define( 'DB_PASSWORD', 'Azi8914less.ñ' );

/** MySQL hostname */
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'thefactorysw.net' );

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
define( 'AUTH_KEY',         'SGu$K981)u@fPOU7Qo>Km. -HJJ/O6[w-KFa:w_srqx,heV>GE5l[B9>H;YtS1|r' );
define( 'SECURE_AUTH_KEY',  'L[AzR@}]yMju(;xCrN6ino/i6,-_twlr||-r}-,8ped{)Qqq7re[]t+{_|uIvV@s' );
define( 'LOGGED_IN_KEY',    'q7.wW(@!i8%{3`m-Y%+!%n9tqmB|WAYY^,-ibnZ*)Qv.n`gv; K:eWpW50KNQgix' );
define( 'NONCE_KEY',        'nXk01Z:~2,W}W( /;]f_RBNTzovZ)K`+(`GF2,q%3*v^TZ*9J~ar/0@YBMcbpy:(' );
define( 'AUTH_SALT',        '`QkGQ)87=+DoyL |,R00 GT!u5=LLDhK5]>!N/n/%1H{UY^&$%/A1|Uh|P$q%n-}' );
define( 'SECURE_AUTH_SALT', 'nGKnO9@%?1Av+CN`$pzOC*%!J!k9s@dg~/F9~r$IB6;Q}gC;[i@sG^FfE{V9Wh3S' );
define( 'LOGGED_IN_SALT',   '{0Dv>!z!u#1~3o!vMAyhsOy)=NM@FD8*,H9MUk) v9ea5p@$gQ-BY>$Ifo5l}|QR' );
define( 'NONCE_SALT',       'WfhRqm,}coz@;m&l+=tXG+stavC}::$hU^]iV){!VT}^}]l|HdCf6`izx*fn0g9{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbm0b1g_';

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
