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
define( 'DB_NAME', 'littleprincess' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3060' );

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
define( 'AUTH_KEY',         'UInF4acK&zlOq5Kb2/M@?+A>~be_ZiD<qoK.qLXeTrd![$Lu,n%Vfo5t9I%Y[b>H' );
define( 'SECURE_AUTH_KEY',  'p.hw{Z~oQ>>}D{8<o1pdRdYws4iGpgbx+X4V&7-gk*B9W<U#h4y=v~:qpm1:YDl7' );
define( 'LOGGED_IN_KEY',    'o6z]*Xt?(d%Jxc!AC[evVpSQEoJN.SI0[Dj*w09L3#S!C2Y6jUjb[tv$u0sm=:,.' );
define( 'NONCE_KEY',        'ao_)6)Z#lFJ.:0(kiq-[(dq!{v]51nWaeq:+sDZwMA87U,Jx>P/IZik321EteaC}' );
define( 'AUTH_SALT',        'rH^2&}I9/:iJ8=q1BM0]QvQsCUP[/M*`YGirFOcAkuSJ=fCpvoXau^3K:o:a?%.v' );
define( 'SECURE_AUTH_SALT', 'ON3u6X# YSL^sf0[O^g&s!y&x43$+WqFa@(<~%M}JOe* z1pXL_z$<.H$U6D(|}R' );
define( 'LOGGED_IN_SALT',   '0oQ.kGDqdn_<}L=q(i}b{~GtAW/Z+7X3M!!H}IAZIkf=R0VQm+}bnX~{(O3%-W}W' );
define( 'NONCE_SALT',       'VnI[cX3k!Ir(ftbaige5Q|x%mI _#x,al]YGq8vP]I5$HFb^.Iv@i~jev;FuS(HJ' );

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
