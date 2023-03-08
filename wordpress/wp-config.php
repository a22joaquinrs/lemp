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
define( 'DB_NAME', 'dblemp' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'abc123.' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'hG.2^SlNnI ,[ivel)6cQ-?@yx+B: SGltD7~?`^;:4TU$GAE29~9FxuD=rLdpPU' );
define( 'SECURE_AUTH_KEY',  'W>0RA4 gJgl4>36gbX*8{$54!6o|}z<%HP}7`oh^?GIwYI !l+EN+*!KaSLn#48*' );
define( 'LOGGED_IN_KEY',    ' j6p!9B]AYxdv(erTSrW4j}E>9koT?_9k_ngg]&{Ng;qOS@Em)S^B,!hH%#8xphN' );
define( 'NONCE_KEY',        'Ped+xO03~vWXIm9&e$zxntt{}*X;`Y UHTQh8=8*?O9DwTl<6 ~;E9-#|L{Gd@zu' );
define( 'AUTH_SALT',        'm7!xn.3HRHu<?ZIyK(eh_JuF`3.iym-w,zw1a<OsK[&o}w#$S!wAGQ5.*B13m&7h' );
define( 'SECURE_AUTH_SALT', '8Hlo7iX_p_D$e[5Mul pylQQnTW}6)d~YI5{@#g6zqv{r)6Axa_gLph:iZ|fe%YO' );
define( 'LOGGED_IN_SALT',   'I3%XC,nCo<sQ8ai6i_f,X.d|xx2IrT9i8I;h|#F_Ey^/xs^?*<~@2&2,*!Er%^RS' );
define( 'NONCE_SALT',       'C6~@g/fN5`oCouAk^?[r|n<P&4q ?wNTQ.(x6]l-%<:Ws@Cc)CZ]8_v$VA5w]Ws[' );

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

