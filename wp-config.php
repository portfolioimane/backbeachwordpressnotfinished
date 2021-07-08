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
define( 'DB_NAME', 'backbeach' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=~92rV[b/x#e69eC5AG@mx{9|S0DSU:*Oz3ifFwS]`Yb-u^98BT*a&O1REfyBj^S' );
define( 'SECURE_AUTH_KEY',  'Y/g4@*Q%8rG6q30,rR^1A2>yF UFZ0lX?-r`MT,P)3|T`0ARo[0Yz>CDO8YyO5{^' );
define( 'LOGGED_IN_KEY',    'OG1HT?}!3^t4rF|Go?KhOy_]Bf7M@./7ywjS!.-5~:M+?+1$WYyJ8L7t:LCYFc_>' );
define( 'NONCE_KEY',        '?IK(]lA-{Rw[m{PxM)*<whRh,%/=9?~QX7Jy$}2t2vXp5tHXNJ`nn.rm{?]jzTXg' );
define( 'AUTH_SALT',        'i0H5$/Lx mpm|g^zN&=ud!AgTvt r$Z u&d=[C=iS!]KJTXYd</09idPQ9c,myw/' );
define( 'SECURE_AUTH_SALT', '-+Eaikhw!oMj102V!QtH$x~L:! $@V9s9SnJdp5_SF(EXc^@|65R!#)2{d&Db%D%' );
define( 'LOGGED_IN_SALT',   'vR$00WN0*>ZI_zf_fS3 PsEXqP4S6lCy-%$bAKeq,;sTP_+G}lEp*2ZM~WouBvHf' );
define( 'NONCE_SALT',       'a!#Tzz6eV&$vI;5LL+Q$lBH}F )RE-Su,oDT*N/Zw W9_WKJ6o?uKY@9SUg>N>xH' );

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

