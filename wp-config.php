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
define( 'DB_NAME', 'JYC' );

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
define( 'AUTH_KEY',         'R{*}pmbJ.1b8CAsoqERf/``i%q?0,D*25Vyi5Km?WixZT;FH7u<L#Miz4<oTQS%K' );
define( 'SECURE_AUTH_KEY',  'RcDE7Kp~^ap3{F3)K>#TY({z6-}o@@6jy6fp)`zZpg:,h!/&$+I*X=-hIbgOh >n' );
define( 'LOGGED_IN_KEY',    'W6sziTvN4&R}!nnfm~#>Y6>9SybGKvdrOwK#d^^)pgW:wc6?PM.24@HgamkFl]c-' );
define( 'NONCE_KEY',        'lm+=i;Jt?$_zOAS7`JCG)xyf1 Q0Y9/RxO!<|S|HxAItyN`9h6#-lB9Ppxq3pmQx' );
define( 'AUTH_SALT',        'SI}O(T}P7xg<sNt@U}e]]fD]S=]LJqC&<wb?=>4rZ/Zc[@~X1w<W@@o$gpRbS=&|' );
define( 'SECURE_AUTH_SALT', 'vQJWEK*MyI-QL=;T95Eys~&5#Jepf7D!|U(7(+E_vi.2e(}`o]c>/cRm5vWm<>Pc' );
define( 'LOGGED_IN_SALT',   'F%/H|PFS]Ka>rCHvY2d$hpnt>GB8CTFR<Zoy<^EHZn*kAVeI, l8s_~4nqpz>)v)' );
define( 'NONCE_SALT',       'K>(@HG6N//)vBv*L/C 3Tx!Q}ZecG|aYLrF9j;&y(qmr(/Ck`O_!lZ$oK%x+,gED' );

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
