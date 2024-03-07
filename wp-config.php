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
define( 'DB_NAME', 'site 1' );

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
define( 'AUTH_KEY',         '-<C.:cj;k_ nJF=HwnGSl#:!9hQPE:mo`$;PQ[I|x]h;9_jyLY<d3=*!5M j=1/3' );
define( 'SECURE_AUTH_KEY',  '<;67.P$%6h ds3tFU_,[1IoUq]!Qu3tT8KYYs9SjCiX5/ xl`u{#>v[K+id;sH=1' );
define( 'LOGGED_IN_KEY',    '>jDS>2;)~xg`zQuKm[$xxjMYO/s`3F5P>v}zfo,&u{,~{h+$?gA(Fq?Z[jB<r/$6' );
define( 'NONCE_KEY',        'I/D)XZN6ZUs>1s*60_]Mns8JTb6ASG/_sv@Nv^HH^XV&T)!w5;q@]8 Dkge,*(M>' );
define( 'AUTH_SALT',        '`&9>ql-;61`o/WIqf`0JA.]Y)Rs;o{|^7g:LME&>^NT6%8^<`}3{+!}<Cul,1Y*@' );
define( 'SECURE_AUTH_SALT', '8]mbIlFQc|+),6,P|o|0y>!hvRq[Q<}AxnJfV[N^?21,5xYN1~*)ID BerKD2ab>' );
define( 'LOGGED_IN_SALT',   'Y<WO(c8N[;^@zMJ7HPei!fwDB~*}#K@*MtDC-#V4X#1t^~{t.D.e]RR$fIsM},oP' );
define( 'NONCE_SALT',       'P29ndYI.B_t@T-c7L`[wP.|!Z;.PeBZDDyEq8I%:l;dVZ,MiSWQRPzww_$PJMUj7' );

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
