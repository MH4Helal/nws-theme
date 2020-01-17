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
define( 'DB_NAME', 'wordpress-nws-2019' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'xv3Aw)Q{e.IvX} Cm?/!+H[H5WPs*Z<cVKl.CvdK5]tR%;?Yj_K} nF<jk2PZ5D*' );
define( 'SECURE_AUTH_KEY',   '%Cd=a>cMu^[33YUK*:u;Sp~qEw!mqe?wq*}E-/tT+j,<&(5QcHrKj<[&TkzcZmTg' );
define( 'LOGGED_IN_KEY',     '?>x-A}7@&:CK[k3Xv7M?uCA8v<=9G``^oPL0$guvem(8kw/=$5h]nYST3Xd,/qTA' );
define( 'NONCE_KEY',         'Cm0J[{A=K[O$(vzRD|Ey;p4OiY;5 rGr)s0Vc=SaE0_|Ed`#n,xxt9RpjosC2br{' );
define( 'AUTH_SALT',         'H0A@/{MB@=j$o-43*Dwh_]?feLKuu6$/0>HG gm(q}ZvmzRA|UF>]6)b<qinC/B@' );
define( 'SECURE_AUTH_SALT',  'YMASS[[Vihog[DlkeZ*AV-%l:[5A xb3YP?_*bX,m1=Co0$b#!r(,~l>T/D-k!Yj' );
define( 'LOGGED_IN_SALT',    'WN:?+2e@JE:-C@}A8&c.K}^2~N8BzhlTZ*@Tbs2@zSKL*Sza:&!b/XA$oNWV/A#4' );
define( 'NONCE_SALT',        'N5>jeDPE|$8G0%zrTD^N2:r/mcx^N^G!5nO7|{p@7SZ#g^ -~_qI2W.UuB!b=[9X' );
define( 'WP_CACHE_KEY_SALT', '05.hj ncpG45^%H#nPms,q$o@`c$Pv*qP~[f-m^8>p{v{`::Ua#]_<Z@VcmZo-LO' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_MEMORY_LIMIT', '256M' );

define( 'SUNRISE', true );
define( 'MULTISITE_SAME_LEVEL_SUBDOMAINS', true );
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'blog.nws.co.uk' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
