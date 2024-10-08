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
define( 'AUTH_KEY',          'dbBJIL8|1 Ez~jSXxDg5=[w8!OF!ZTXVU ?Z]>6(.^9C}QG5m;0?J+%N 8I-h`XQ' );
define( 'SECURE_AUTH_KEY',   ':Ir10WTzHqmYVqmnZ.DK<9LMvm9biKXF/U-@CJ`5iOIr+R#[vt2$/|b-I}8H${?x' );
define( 'LOGGED_IN_KEY',     '9mu4$I@vJ04x+FA6<IMG*%~1g?ErCPI5>la2TSAh|I6b,!>E&^^Eg7%za2^TPPm[' );
define( 'NONCE_KEY',         'nt3W42a|372@W Zj#@OjWe56~Nqifa,{ysF9SM;MMbg/]Xqn!4-q^;a<Ni=g%XIg' );
define( 'AUTH_SALT',         '&WEHiR hZx%}PfhNQox ae @Su8:Gdkf_4+(qlx$Eb -1eIcMf(~g``:+)LN;lX6' );
define( 'SECURE_AUTH_SALT',  '6yTo0fc.,iFY0$eb%$#BUrzh)A9csC/rqzzT+/!OsXsZbW{_BAP@C9Qm ocRG}7.' );
define( 'LOGGED_IN_SALT',    'tCq+]7rD]X5fv:A@@dMb3n;D]CEW{npG!Gq~2vDr_.H$zItGZ7up&COtE{tBe>pC' );
define( 'NONCE_SALT',        'l4su-njcn% ^=87]Sh#-{]dud.aJ[uUr1_ou*D1-4{FdTTC$z3DY8BU53w:zM]XS' );
define( 'WP_CACHE_KEY_SALT', 'ZQ<c|+<U-Ms,C@hzbO}pIUzlK`bJ0:(D>i`C-t$b=40Q[J#Hb):]g?yH&S-JMQ&~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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
