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
define( 'DB_NAME', 'homepage_db' );

/** Database username */
define( 'DB_USER', 'kunyoro' );

/** Database password */
define( 'DB_PASSWORD', 'Ayoterbang' );

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
define( 'AUTH_KEY',         '@.njJ/(h,ZcKFh 2rC=ocB:bq>P}Mg0s@L;Y/l)29vVh!Ob(_fHtytwvQ$Tt#xdT' );
define( 'SECURE_AUTH_KEY',  'k**MjF(EHIiWuz^IO]vu5.w]5tau_Y-}=o&n(nHak<t|A3Jd5)R+E,n|P~7zHt`#' );
define( 'LOGGED_IN_KEY',    'J{{WhSU9`{a$}3mpO3iCfO6bq$,4=8p#|LBbwfc7R<9m_o+C@n4Y__#3f~w`z]&2' );
define( 'NONCE_KEY',        ')S?7BaDj@Q#i4N~D_yL}0LPZ*=$ifQKf}aBy}-x9OZ;u%A84DoO7+o^BL5O?a+Q}' );
define( 'AUTH_SALT',        'Lj{%;]dN6MOO^6RFz^,_gRw:)f!$hW~Y8naHRLf.p9mCdtDldW>;i$pL[M~v(PoD' );
define( 'SECURE_AUTH_SALT', '6*]4J&~<io&4yW%#ea]3ixvhT(r4x-cz[PvV-J0P;mir%r2LSfR{53Z9%I$Y~#tq' );
define( 'LOGGED_IN_SALT',   ' IktaS`V]F0ib7{5D)N?-95&w!|~r[SMA5&@h@D W+yJ@ H>gTn7L$B6m@%AS[Y~' );
define( 'NONCE_SALT',       'ZJ_]t)A`:RU_r^{SD$j{Em(Pu)6OGvkA=,B{CWe7_96t_]=gm,9|,DEyEV-i&Pl@' );

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
