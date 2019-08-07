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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'php-info' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         'P3tEWTmcrwdqW,0x a[Qzn^PA3<$CgS7bWBP`,ApE_%X _@}-+5Tioj2:Se}$:gB' );
define( 'SECURE_AUTH_KEY',  'f.CBuX?Rp&1>ioOR{o8f6Ekw&&RR!=gmdTRZ{_nI?N>2}`g<+1shF203_xX@NP7h' );
define( 'LOGGED_IN_KEY',    'B]F>o(}X8:r&AJ_/a7kb43[^HWb,oPyXlvd{,D88M0]~Z|yRV(gvbyE+2JwQxfd(' );
define( 'NONCE_KEY',        'aAVoBUyiuc!umWY<4iz{CC2^ae+)z$-u1~|ER=vxoMh{Uq{@b(86Z.MX5a4:UXon' );
define( 'AUTH_SALT',        'jlT!~nk{6gi8Oe|:1<=}jC]gJ,3M SHjP)o5)[YH0/=+FvPQ6-8/QJ]9dwuWzHc>' );
define( 'SECURE_AUTH_SALT', '~TR05T:NhRPRegyceG3fj54g|D)`p}TjQr_+tvW@TFkR>c504xkML0[[KkeO`wkq' );
define( 'LOGGED_IN_SALT',   'FW@A?+KE J.w2V(zS(<3s)S+Y=Gt4-wkog[s_C)T_h$WYE35Z$FxwbLHSR~GeRVv' );
define( 'NONCE_SALT',       '|Lgl3s4gu#] spsc92@mUGk%ne 3ylgS#LV.U}DY=DBZ93mI:>1ai`E @j-wtwD:' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

