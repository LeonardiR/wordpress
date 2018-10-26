<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'db:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`-.;orGY{@/KL7)th=5`>ix@R_H/YXYG(;M9!Y@#2V;_aX^PWyQ^6ts)+%J4Y}+^' );
define( 'SECURE_AUTH_KEY',  '8p<Kj(O?%z3[]bY1rr<#B`sleE@6@C!zPFES_GI?m?gA8$Ohgz{uQC*)c9TA/mpM' );
define( 'LOGGED_IN_KEY',    'JQDLJ6 L-UEM|MNM#y%}>TIr?4&d0miyu`],a{^YEm@D]:Pwu8HEl^2GU[<+H8U%' );
define( 'NONCE_KEY',        'QR3#M]pfDq4T$du2pMmoMyM/%yYkdz%[{XdZrkvjTksM4F@VWSA_Be?:Vss$l/X!' );
define( 'AUTH_SALT',        '|T.k(tDwiF[b^jOM5/pIQyl[)WeF.roA7n@E|y3`NF|xM632lSgP-xo|%-+j}J@Y' );
define( 'SECURE_AUTH_SALT', 'e![_w`GXqLo26w!~,/!LyfMtrlz2Do`I)eh/`[)+w/0r{_IL)p>o>77!I7y9*cs@' );
define( 'LOGGED_IN_SALT',   'f/R=2&hHTjz<~uDu@gX(@JYgNA.x:|V1w_m(L}Jl~2s{U+GnjQ)[r}{JXbc_*[:q' );
define( 'NONCE_SALT',       '7<mlfccXPZRF5)!Ev>;:r!sExg|52BOf@cvocH2^$D}ugAIsoWkBrXA`IMMl<Yt]' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
