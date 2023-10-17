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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'games_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'bR/2*?s$WrZ+)wHB79:DD1aDLqW$fE%znD]`#Nlec0Px#U,b04hkUr(&R,=|;GF ' );
define( 'SECURE_AUTH_KEY',  '6&#Di$`P^%XavWwORpXoo$D,Br@>W1uc6=[!8n;OziFO(|nWZ IdohPejik#i%u7' );
define( 'LOGGED_IN_KEY',    'CMj`6f=)qm@kLc*G.~vmX)~T[/CK$m@w;2[bGo^XV3s{~0r.!a?F)Ta3 [L5{3c[' );
define( 'NONCE_KEY',        '[sI}GTl2VHmln{CLIS+tj+NMIN2#0*N[B%rwoW6w12ci.p&}_#9>gO:hS>JQb)Yx' );
define( 'AUTH_SALT',        'YDjsRSBJeWru+qVzo4{)awi1T5C9RPn#HH;zBS2PqhRWSov -Ow^=*sd9]7E:>JB' );
define( 'SECURE_AUTH_SALT', '!WR=bj1/5F5@s0n!-m~We%@(e_.sKLabwHf`~,-XoS5jO$R3]5_l^7cT3%LY&&hk' );
define( 'LOGGED_IN_SALT',   'Rm|^N< o=:wa7~+3ung,<$ur6yJwui[JWBL?a/8-fd?#+]J+mB4&Q5r/eoau{HdF' );
define( 'NONCE_SALT',       'yBjdzW`WQyJ7731U$}&*HMQBMZO(Eu( |!+7tW3NqaS<*kJ:V`_0y.6z&<<JE }:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
