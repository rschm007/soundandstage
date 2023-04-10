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
define( 'DB_NAME', 'dev' );

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
define( 'AUTH_KEY',         '<UAw0-wA>me%Y9V$Db?)U[)A<:C48P{^)7fp)$?+d}_WFPBgINAp$,_<UZ.bD|vP' );
define( 'SECURE_AUTH_KEY',  ':,fjGI]<dG$*p4)eUA&FJtS[53|I;<U]UtZ!s0X5%f$}%#)%Sf~S,!C)FQ`V}k{?' );
define( 'LOGGED_IN_KEY',    'k@j8g%hB%OV^UtxVwseW:mr%z2HWU=fP{^r/f@SqU=AT@tu2`S:1P(5:pY6Q0|I+' );
define( 'NONCE_KEY',        'QT8yq+LAgbMSb5xAgp(~(*o8+O?OODEdIHD&c~Mv6SWQR1xhxpv{`w<o@UfQ*TG ' );
define( 'AUTH_SALT',        'IM?YZ)xmZ0CWim.Lp.cGAFYE@1 ,99(pTKy4)Rf{`<{.^n5}m5,K{CCEoc]B,KR,' );
define( 'SECURE_AUTH_SALT', '%uwU&lvb$U%-Cmd.)O;d7i3XaNS-~%f^.`k+_MkR7R6v[6y48[pDW%xY[b[n(Q&I' );
define( 'LOGGED_IN_SALT',   'C8C7dwkw>{uLthS3:VSqM0[w+oOvLtEhOi<0G>=j?srMpwoa<I/|dsz~]34qu%!J' );
define( 'NONCE_SALT',       'N;`j,d0^T$}=B[vs>NJxWRRAycg_,Q J{z]Nxd,q`6pK<cmMgI5DRPN*SZ+|?<Ln' );

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
