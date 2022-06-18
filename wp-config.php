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
define( 'DB_NAME', 'word5' );

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
define( 'AUTH_KEY',         '*Jnf0JlE$9j){tbyOANu*g*Kc)*.>m .4T>=iLtAhfopnt+#G|A4>U95}w(8mI9S' );
define( 'SECURE_AUTH_KEY',  '@XCD</5hI^^;jeZS>~rCm]SY5*lIZ*Kx&%8HV!$bFWgyK+6Q|4C$f)c=z2;-:YY(' );
define( 'LOGGED_IN_KEY',    '6InTba.{>bE@0. NNl&=oDT$ZU7-Va=[p=$RVlG$Nm>QMR~k}l28#cWS.H2 ~Zn;' );
define( 'NONCE_KEY',        'OjC;$[.jtV4:^9xoRi{YB.sZEgmSK@?8o7#:z]P1zALw99(e<`nAH*VR=lL3!E^_' );
define( 'AUTH_SALT',        '>#8|tVdsE z<*kR`?b_ V-79xQd}.nK<u>?SE~W)VK8o@S00% 3%BuDwVGS=jYZ7' );
define( 'SECURE_AUTH_SALT', 'ge BprXC9{xm-b,+*s.vNP&*lC5V4LC8IH=o~m.`MjO^6Zp*ye*in?y#*R,!kW]x' );
define( 'LOGGED_IN_SALT',   'V_gwrh/vf4Q0;7h,r5~p..}7M/SU=VSbj4P,0({g~4vP%B,b1h0:mj@M[UATbzeq' );
define( 'NONCE_SALT',       '!L`n1x;{>vWZp,mmn4jdV{&Z;~EV6gJ)Gu0:p22`1ew[O^eXW1/|X9K||-RDh,d(' );

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
