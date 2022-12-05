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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'panachinaikos' );

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
define( 'AUTH_KEY',         'f<3}9wfFC`1cr?6D5R*A0EWd<^,Hty~}vXr`<i  BFU_80k42b&|l`G7[`$1 VHg' );
define( 'SECURE_AUTH_KEY',  ':r(b)n{|/uuGu%ArYt*M9~xP%DNIrR<-]s.?wuC!VW2(}a6%1Q5EQ&HeC%&[PM6U' );
define( 'LOGGED_IN_KEY',    'xd>?o0TnFp41T8d=Q!P+uD^84tmGLJ^ZF7&e6HW.8?[E{/3F2B3Xe`bSf6|KO-IE' );
define( 'NONCE_KEY',        '3L-d&+N1mhqaiVBuY?tlT@Dhh3O&+}%,7Ln%I[6l 1f,2~(Sd@Whm|t*hA1j+sMb' );
define( 'AUTH_SALT',        'sQ/8; |q2O|Ff(W?C].JdUV6}7&XiYQ%fr0Z7G]<xGRkbj^.Yu_!YZ;KN^7rl#I9' );
define( 'SECURE_AUTH_SALT', '@{bE)gxjzcEp{rQbBU<t~*>x[{}8B0}R WmV^[k<E>,M/^79SLIK6U5%VU,A%kcm' );
define( 'LOGGED_IN_SALT',   '^MEDS%zNc&!sCZbrkpymgR^.y/x~0dUbcvz7V`DIQk_jdZGq)mrbga(K&wJI g>d' );
define( 'NONCE_SALT',       '&FwkQpvT&dbt+=HWF@;Yb(<(us[1g> kl2ixr$L!F$^H9 ,0kEq^+(9:&@*ns05|' );

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
