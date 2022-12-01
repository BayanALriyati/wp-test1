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
define( 'DB_NAME', 'project1' );

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
define( 'AUTH_KEY',         '0y;}Lu`r@%i]S=w9b3{{#Hnrhi]iWs&[{w(c:5HFbuLI2L_&[|_r)kO97d4+sc0!' );
define( 'SECURE_AUTH_KEY',  'v@dc@D+0j=x]5e$~_8t91!oFzg0BeS=@mFEztqXlO)]>h5d^z$]!}_:K5SnR(<e)' );
define( 'LOGGED_IN_KEY',    'F9]|R[$/fem3@F;xDHNtCe4vR_86u1Q3(KZtwtPdGeC^Is4:n5y>WU[P%7:#Li%1' );
define( 'NONCE_KEY',        'Hb*p8zD&F0DX),Yq%}153XO~?nlCXfvsWj{W^Q/TZuki[&CgSQUYJTX}]Yq-}M{-' );
define( 'AUTH_SALT',        'F@8/:g7Cge3(qiQ{d4)**hML)Y[|6Ok.$r96/3zXJ<E:W~/wB}WaR/>F%FSh]8l6' );
define( 'SECURE_AUTH_SALT', '+BbGy9@sW[WycseQtD(sFSgkW]V9Wbh4`r4p1n`X2P7b%8=^+xCM[kRV070WJWPz' );
define( 'LOGGED_IN_SALT',   ' v%,;^q6qCSS0F5@ #UMa^&#,-5OKf_#! <kDNs=<v6^bv=9M1f#lgjImrVR&L53' );
define( 'NONCE_SALT',       'sNunU|zh>_B|nM+1 ZZli)c%&kPT =3J3kaf:{KiP6B2a jt{(d=167q4sEx?0a|' );

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
