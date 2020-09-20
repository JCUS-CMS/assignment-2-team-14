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
define( 'DB_NAME', 'dbz8p3r9b8a5pf' );

/** MySQL database username */
define( 'DB_USER', 'uhd5tqn78vmtp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'z2bhaxgc93rt' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'd_j*t!H^#&MDg>kT<vmvZ3Gpa6w*ITGa|rvn.H:}cnTBq$mnSN9X$kuO!FlM1aET' );
define( 'SECURE_AUTH_KEY',   'E+a:L<?GTCd?I x7[.?4`.@khh8iS1&}p]ZD@=tWmP2nEcqgx-sx:TxZX_pr}~o0' );
define( 'LOGGED_IN_KEY',     'TV(1$2K$P%aj|>TF-MW;iGge4Wk1$lAGyYq.u(MYX.b%q4dA`|[rw^{tF5Qn*Gfl' );
define( 'NONCE_KEY',         '3GFf73d4s1e*UCz8FuBX=E( WTwU(J;PN%sHtyzzcC[8 t)q6Uu/tQ3IgTWZ3f56' );
define( 'AUTH_SALT',         '!_r^]?t{=8pU]S?]?Z`t}Ncx$Aj_m]JY6Ul-!on8w!A-4lSZMynq:nT^n0XM0P:|' );
define( 'SECURE_AUTH_SALT',  'N$NJVI(*s*X>}r04buSP W?tKhTH!^x^Kad#cbBK^ts4,tAbL;AiR89kg#99M54a' );
define( 'LOGGED_IN_SALT',    '?i7Z$+#9/#0bxEA=*l>?k9vEP@7YtaaGJ:H|mC/W#NlE-? M`N3uwMe.$([*RSoD' );
define( 'NONCE_SALT',        '!,RX?wML.T^Wtq?]VDI0J2;`hq*n ZxpZKSN/~^MK H,T9Ria$U!*#/Qpl}uv2fl' );
define( 'WP_CACHE_KEY_SALT', 'Nu6AoiT=:<~t7ZdMN/sSw}E ;TI]-W*P @+X(u^0t&LosbWjs 1e{lDN)AKVJory' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gtt_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
