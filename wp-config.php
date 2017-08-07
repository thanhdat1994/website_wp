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
define('DB_NAME', 'website_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!od(XaQszR|KEv$B[YsF0_U3qj]SNa`g~:`9WT[W5uEdEBy.<K6R3!G$zj:_3qP%');
define('SECURE_AUTH_KEY',  'wC_MGwEqTtpzY/u+^WMtfLt6e~p:^SJ1=g&sTJU39*V}{71#j(Xi@zabbzvcy5|=');
define('LOGGED_IN_KEY',    'n.Ov}z%6_su:U^J5+ff3-@9T4ixwLU`VP|t#3[jeV{j|3Ao2~,w3eqbxPQBkEwh ');
define('NONCE_KEY',        '::>|xK}S:`R:sdm5dhbt y-wp&hC0&fEjg5$]ONV7v|Sz/8|d>J~+Nzy=/oJsN)i');
define('AUTH_SALT',        'tK/bmo+9v`>:#L6rb>X=^bid)H9TB<DIC66+WEZ_Em5ENT`PR3/Yci-z $8r(ux3');
define('SECURE_AUTH_SALT', 'g#/s$VuWh>l]@ 5dt<H,6B:g]@-<]rC0jcb;EUK UzMzdwktZ#`9 +o[_L?Z*B[T');
define('LOGGED_IN_SALT',   'Pfn^<jKd.A]I$<QA/wm=g?R`f? J:J+4(X:5g6xMqT:9 Oas&3M(,VJz_3{Bc->r');
define('NONCE_SALT',       ' SXTD;K=@C]r_n{#ct&Bc]S&#:GARCv1< g36:?%9M76;KrI#u!%<pQC,~g<PgX>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
