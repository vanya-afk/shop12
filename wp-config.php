<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop1' );

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
define( 'AUTH_KEY',         ';!SpOTJrp]rKF_(9!w=|r}Z=|8/`Vj3>Zs6Ci AuNgghE]r/C~Z?.;sHwxZ?_ecr' );
define( 'SECURE_AUTH_KEY',  'lMY9khN,U3#36pF>pe#SnTe|fr.hC3bGE>lP`n&*QVyBUGTU?vuWAfgDdKl}s3aL' );
define( 'LOGGED_IN_KEY',    '^_6p NYecn|Pk_OFb[D$b1@LWVI<pX:mzcx-ONQ%JXGGR-6;$te$%`TaN*0><P[8' );
define( 'NONCE_KEY',        'R/-<tI!Xv?ns _3>@SECxf01(`9l~H1t7Ly20R{i8uosGdx@m;S$n~*Fa*W;Lxz4' );
define( 'AUTH_SALT',        't?|bTMA=}:XZ]jy%;rXDq@D_ 7MO=FWC#%CIh53G(,;V$p}hm=%F&_+:4mi(y|hZ' );
define( 'SECURE_AUTH_SALT', 'O^{$qFn[%aQo%5$ach.^vEzDz^SAo%Z;WORiPtf*h`[??@>`&SXsU+iFL?N@H{v2' );
define( 'LOGGED_IN_SALT',   '<6fL?TtLXXnj_z>ieuI<^uSXKdu:`WneBs{(a`DjKUX!Y=RI$8a}]@(mSC4Fz!L_' );
define( 'NONCE_SALT',       'EPl0FjU>l?DUo<u_c5qA+;+:V-2niS/5Rpv3AutwG>}VcaS~ssQP.L2Oo<hT*pMn' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
