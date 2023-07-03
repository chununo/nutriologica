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
define( 'DB_NAME', 'nutrio42_wp' );

/** Database username */
define( 'DB_USER', 'nutrio42_wp' );

/** Database password */
define( 'DB_PASSWORD', 'M5XSQaC8T23jgzm' );

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
define( 'AUTH_KEY',         '^V^=*DJeu-b/~V?R6|>i6JG.i*GcGzTF%+xe*m[_=||3/k,R!>KuDul(%P:uR0rr' );
define( 'SECURE_AUTH_KEY',  'jgGT_R|8YQZ;{E?*sOJ`@]6D%0khqEh [b6a=57U=e,@lp3OoTpW&$imN3W16CN:' );
define( 'LOGGED_IN_KEY',    '18?-f_?TIiTO(H{&92}&x1^/t:q1a=n@p.<_to&61#Y|QLw3.u[7&?CAnJ^*4m-{' );
define( 'NONCE_KEY',        '>8^VgsA(2etTHO?*`8$rHB?JWho4@UC{oF.wpLl8NhfVe,I|tZg~2?sM=qs)QRw ' );
define( 'AUTH_SALT',        'ME9i9T5?0@U4HyM{_,|C7S1K!-.S2KTaG]hB._K8$b>ktX&AgvD;3CqzUvpt$i?J' );
define( 'SECURE_AUTH_SALT', '6`zh2xlP>@;pjs_K1*rR0uUf$AG4~v# &K1Knh5`|]r&Aat;;Fyx|}QmF?DT`./l' );
define( 'LOGGED_IN_SALT',   'NyT8|WUhZVeN{3mf%-LLa,tNc4`}_)D`X@(+<^Z_sbL5i-LKOJW#z^<*VmX0Q,>(' );
define( 'NONCE_SALT',       '@M^<K. hq51x54f5%l<%Qh)b+|B_`S1Ov|?]Tps</w;sp`Zzsy25=<#un<@UgqF(' );

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
