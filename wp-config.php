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
define('DB_NAME', 'meraki_offshore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'X!L_LgW/vG_O7V}IrM$ 4mB/sAO=b}P;*0SN2yb=$5RyI|P@x~Ll$&rE0I[k2<Vk');
define('SECURE_AUTH_KEY',  '/&lRM9+Cn?k[tAmj2QA!8B[Oy#Ay(.w`YMI!lW6SXRw&}a-`J;Lw7gSh{WDW?j`=');
define('LOGGED_IN_KEY',    '8Yn,GQY#<PC+%L%G]RuVdZ,K-4c%;txW:.Hb)Mc$B6YlKmI>DV*X~L)qE cKV8q-');
define('NONCE_KEY',        'JQ=T0#>+mm+,#FK8Godk!_4h%ttqtd/jtW!tkE-s[meWt&J]*cw0_RhQ|37b_NeJ');
define('AUTH_SALT',        'w+;AXOMGITg$7dQ@_M]ryL*d!X87jY:N$D]k{t3<{m84xVke9L^|@i;wC5g2` @:');
define('SECURE_AUTH_SALT', 'zx}k/g/Nh(Ipc^cL%tx3X7%6Hk0}*pRHSL1Toy${+sl EMW4)+r!8O}[$EU-lO-f');
define('LOGGED_IN_SALT',   'bo8kFp5.M/q,xib9YL9Y_[htosxAMa3P&NO[Kp=kCROz .7!>Z-(nEt.j+C!|Nr[');
define('NONCE_SALT',       'dE,rJioQESi`X~-mjqI[R|Vl!|6cs=r-h:-ai{s{I6EEv_UxKiT36mR/f[qP{(Ox');

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
