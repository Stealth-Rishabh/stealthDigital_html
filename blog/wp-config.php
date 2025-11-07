<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stealth_digital_blog' );

/** Database username */
define( 'DB_USER', 'stealth_digital_blog_admin' );

/** Database password */
define( 'DB_PASSWORD', 'z]656Z}X[~Z3' );

/** Database hostname */
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
define( 'AUTH_KEY',         'BiqZa{ Tc>//wDtx9JRT+^AX9f,u>%$Ku<:~jdTelKEQgJ^{_8TpSvnzJh;ls=X8' );
define( 'SECURE_AUTH_KEY',  '<FW<{m0v99}62?U%:9[YSb^0~f~:Ww/ uN7ylty(/FqtC_C:T0VMvSJj_p;<-Ws^' );
define( 'LOGGED_IN_KEY',    'NhYYRsFKC$sUGs$JbFO:dTTrKs6]E*U`n$lMJqfXb^@z/=]Uc$x&f`k5Ltg9k` /' );
define( 'NONCE_KEY',        'j8#&DgqkmyRD5L?n;eE@q:z@wk2,_?Tw4>4lU,&`zxT|A3W%!G8LRRILk6|$ac]l' );
define( 'AUTH_SALT',        '!P?.jD`lI1bJf01MhHAGZ?Q)bHN(d0G-vyOtCqG<@-T/(Bhe.V^lx<M$iTX9OPjJ' );
define( 'SECURE_AUTH_SALT', 'kXzET/u?a&%1y6ley8H$fm Wx+8jnz]x[<+X-Pn@ec(Vb4{CC0@9.[inv/)2KMGk' );
define( 'LOGGED_IN_SALT',   '1*(xwFNc+ojX-(S6|<|DGi3i=,x^1]+*7zydht KFk1f3a?1#uz%T$_,.H`Bh3Fn' );
define( 'NONCE_SALT',       '~lWz1HAiYInwwk[%eSkb7]=Y}gxjhLJ&!sV9XGzs|R2>5_T/a) !dH@ai6bx)9o-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'stdb_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
