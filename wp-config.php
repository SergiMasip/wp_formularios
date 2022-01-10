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
define( 'DB_NAME', 'wordpress_formularios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'K:lg4dR>RE[8T}I,W*zPn8>Qkm.V.6xGNpqw~D>>{_)dOa .d(#`Bko5>>GBsB]*' );
define( 'SECURE_AUTH_KEY',  '$#YNR/[Y#A+}tt4|l3?4nAaF&._m ;?vz-;@48C;@!iB:0K(NNkTcCN/slA]^>#*' );
define( 'LOGGED_IN_KEY',    'y}2vGp{cYG@ej-s*+v%md@%~NK,,6tYHxFp[?(?gN0r4oy-fg^IVj8fS6Zx0Aq?`' );
define( 'NONCE_KEY',        'dXXfn6D}zve$>U7F/$;QKV^YN.txB7w`9@G2V.,DEn%vJ&zLIRkHpfIm#Lk_+8(#' );
define( 'AUTH_SALT',        'gM=Mouk.X%J=y>H(Pu5_U|e8wo#BkxnS]I;jz%r43apUx/*J&7.R;?|7hw&wR2VV' );
define( 'SECURE_AUTH_SALT', 'lb&zmNg|-G>THf<A4q*/OHcp;U0#Hqwfm@^2Z,Zf4Wp*7uCo<zN[K`^+QlSbjK5:' );
define( 'LOGGED_IN_SALT',   'G<W]k#IrW6}L#.E76+XlVPRfqH6Q@)nxdOsxC|xj]>@_0L%<gXA1UU^Mg52Y(}Im' );
define( 'NONCE_SALT',       '2oANQZ^j(7imcC{GcVYKdt|hT0/lCBj/WFMxldEDi5.HOV>vpgdr*YnokQqcn^b+' );

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
