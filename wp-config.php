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
define( 'DB_NAME', 'promincowp' );

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
define( 'AUTH_KEY',         'W!P]o.Gw:%8TH8X6nV~zxpyrPVNfl`IL.{sHvsdTI69WlS4 Cyxz`b6!2OAuI~Kh' );
define( 'SECURE_AUTH_KEY',  'TTr:If}5@-FO|!KYVVply.5kro:-]>5Z#*yx]/Bdk:p-~Y%Y~lOR]nbS/>]/!N]M' );
define( 'LOGGED_IN_KEY',    '{.z8V2IMphaqa24-ngb>TP*|V6Xc2Le6@st4oZc/+<0IC#!fe9H`{?cpgY$rpj62' );
define( 'NONCE_KEY',        ']L `-a?IM4!6(-X5CM0M4?UTDr2HoG#!<!UJ5o 8nI&0+t^`,bf^]Cx&4~BD[aXN' );
define( 'AUTH_SALT',        'yp%:fwl^lw`(?$VJ:IodPmd`@f|P< 8K{/Esti+@T,Lxr~$E)F(vOY)cIXA:tNCx' );
define( 'SECURE_AUTH_SALT', '_>L,#i}igp&Plpf=IwW(x3}gx^UZ/ Unu%{ABxc,9M`O^@4hp- fQ1,Ijp3aV>Y-' );
define( 'LOGGED_IN_SALT',   'CffD=Q{aAAk8YV=9Iu)eFXX&9&JsaoG}jQ2b~fE#H7/Fp|qh|vTi-:MD#bF~r]%r' );
define( 'NONCE_SALT',       '@Y^yhkThteQTN,JXU9L->2uW}bW#AOugxch`u>tV6U01C~O_m8lstDz7WGIVA#v=' );

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
