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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '6l#bsA,`9[XkzG^n|GG&EvuW6]l]q6en{MWA#gf:^QS]$t!?rN8mwIAy`X~37O9G' );
define( 'SECURE_AUTH_KEY',   'ma&Hh+ 3l2zOk&h g#LGCn}3v&c.JYRk^yp;f~;E}0(@/b)#3]{]RWF;mN_(Dj8:' );
define( 'LOGGED_IN_KEY',     '?<aP m_(RSSy*faA%Jx|>CRu?CxJUQzMjTe7x9mCrog/Tsq34UAc83qh9|nHpU-4' );
define( 'NONCE_KEY',         '(&NZA&&m=u<D>noJ]K;^Igl.~{Ib=olXW`*E&-,xwY[ud/KV.qzCr:~lD4Y94fD$' );
define( 'AUTH_SALT',         '(vhI=tFd.0E<D@>],.SiBkJ,c|lcX-pjdZ(=LstG`tp@MV[wB=tVI2>dsVtOV@T+' );
define( 'SECURE_AUTH_SALT',  'tckV,:=>Pf}KxQkJ+cy;~P,EfFk=Txu`n~G5nS$h=/Z~@83`6$ND8 @NTugeZC5g' );
define( 'LOGGED_IN_SALT',    'U@>EZT)oN<0D,/%wE)05v%^[SsRs_}%qygcM~z%3;Wx`yW}>c/*e[KAl=2g=cqO~' );
define( 'NONCE_SALT',        'Lxir=<>0KGEY@k]Q!o/y4al-J|.81`o;gbhxfGDPThh@4)Y 0[%bw6*5/=5yD.o>' );
define( 'WP_CACHE_KEY_SALT', '+Tx%7,A_B Hc)`U[*0aTZ(rxh#O%MJeR;|n@U:E~~k*z-09u9|5J8dzozxV&OV&B' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('JWT_AUTH_SECRET_KEY', 'o{c*KlnOf>K!hAb]E&8p|=fkCr7nJr0vP=;X-y0h |#=Xm>W^;$+aal3-dlT;:HY');
define('JWT_AUTH_CORS_ENABLE', true);

/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
