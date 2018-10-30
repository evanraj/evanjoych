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
define('DB_NAME', 'chaosentertainment');

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
define('AUTH_KEY',         '}SU,0#r-T!cNyE|x=y/<:0Y06cMEt[P-NK4z$%.93oRty!+g~I?g}=2Lnw@|~H!x');
define('SECURE_AUTH_KEY',  '=X[_0ddU=):^ce*rPBKwENHYcV3*N6RiRX.EJ, Cl5m,{vEQXEBmQBmf+EPMZQB-');
define('LOGGED_IN_KEY',    '5$7stI,=#kFx=lLTN){QAT:DI6JL]qlWi2QI*CU5>O=_1JPYe4v]qM8B[VSil.a*');
define('NONCE_KEY',        'JSaS/m5GSWyB/D1:^wtYS;[9=6L7i)xe2Wv7D ]4zCiE[XnD;qiJ)!A5cPLQ3GVJ');
define('AUTH_SALT',        '<``&Dg[cjQ@DbYJeetX(!xgzvSM:ibI.HN1F`I0/F*tQks4bJ9E1hkBw<SWl$vM,');
define('SECURE_AUTH_SALT', 'fZ`zw+{d{(2k=O=QDo/1{S-DfoozUi-$#ZX#)u2!yqd994=H |Q.^zk)`k_p#qt-');
define('LOGGED_IN_SALT',   '{YMDMj4lLPTK,rZ|axW-m~R|5Zf`PZ9w}3 q+Prew*q}*Ot38S#+!i%RXvv{4D0]');
define('NONCE_SALT',       'Bfv/w_DB.olJ@(+%n{[<e!8gfUD~UnBW%&HR6u(JAP66eTCA/Ob2vsV^4_,`u31v');

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


//for mail
define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'Admin@123' );