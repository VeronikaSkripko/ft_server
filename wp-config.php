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
define( 'DB_NAME', 'wp_schaya' );

/** MySQL database username */
define( 'DB_USER', 'schaya' );

/** MySQL database password */
define( 'DB_PASSWORD', 'school21' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'ePXY31luCB/?,u}Wsa##ZJR%zZQ@c1nhSoO)-Nh00zXzOdC~-K<-hitAng@qu:L!');
define('SECURE_AUTH_KEY',  '=*bjQs5PE#yGf,Z0RK+e<KpgRcuL~/Jzc*wOD#0Thw#~1Dres^X)T}H|-|--#F!5');
define('LOGGED_IN_KEY',    'QQW}S&*7h+ t+/9$H%742D9+p0M?U^::^chhKi9T{_Ej52XYxGaPv>;a*# ]NS|h');
define('NONCE_KEY',        ':9Mg!Fo,!I tiS*m.QTuD`RvJtAJ-~CF8)&`S/CR[uR~%t@;e>C%!ay=Sau++#B,');
define('AUTH_SALT',        '(Y7 H7G(NQU SRYeNM(Hbo5!wl{09{t,dq^N]{<-oT=)=[Fx<E8zh?C+N4dS>6d(');
define('SECURE_AUTH_SALT', '2C]h8M+%>I4nC,6KVi~yV,W.BLrJ=Od4_XP&XQ;2n*/lJ-6*tfob*E:!`?,|{1S=');
define('LOGGED_IN_SALT',   'K<WNm_}+H9}a_cgb{GOFAT{QiD|vv[rO+!P4pKC(zEehV|0p+Q!x{mD|r9ZtBA*)');
define('NONCE_SALT',       ' ?>^XC#?SV*:Iuy-dzPdY~k%t]8Z.^X=T;e*}I}| &{+Qx%;:-n$_Ax Q{xNg,gc');

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
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );