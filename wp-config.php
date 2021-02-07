<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'web-course-reviews' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#Dgw?o3@]/Q@Kg9AX%/j,%:0UsY@nMm%fU`PYU,,Mxh|X0.a;Q?R=?epTjWgxfpf' );
define( 'SECURE_AUTH_KEY',  '>3tVL~Q(:eE{sBH&?xZ5V0;{}R&{oZ?YfJu)X`|Qt}aCFoNY@i+7-_tH1.OMg$nc' );
define( 'LOGGED_IN_KEY',    '0Pf!(v;7_oD<3l#Ss?L1^jCj(D*T:=5#4NFAjk 08{vz%F2>TVYB8yT7E7<0=$q)' );
define( 'NONCE_KEY',        '`UWlO/oM}OGH 9L-VNtm8jplqF[_lNGi?w=[gwFNdt(PGdC7dEAtl6*Z}mN0ql?C' );
define( 'AUTH_SALT',        'nE0,cuP2}eSa>3xkC8>:)?lLeTv/Pe#:-v<-0YI,7F ]Gh.;63zz7;K^%aQjc.v(' );
define( 'SECURE_AUTH_SALT', 'PD]V7H7SEtKR-!bNa8uJk|#%)8$Gb:I[VBq-5e*Cvr %Wi-5nIumpzU7UUgjd+ct' );
define( 'LOGGED_IN_SALT',   'KD_?1nVg/]l5Wo5m-gN:?fb6%O!-xH!m;C1Rw,`})Z`DAN071JAf,gF$Xs>z*[16' );
define( 'NONCE_SALT',       'cH&A,5|#tpAb>s&~=]AkJh-&N<}xk r_[A3J?-ZD;[!A0a8.:9Lv!!S Ek[huF-;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
