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
define('DB_NAME', 'wab_cedreo');

/** MySQL database username */
define('DB_USER', 'wab');

/** MySQL database password */
define('DB_PASSWORD', 'w4bd3sIgn');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+D@~2}mrSlh7E)nbO+]D.p+gtg2+0V}I7qo&PVw3Z(_Y<VPNn<_9xT>rsEmeyD]E');
define('SECURE_AUTH_KEY',  '/?n6S2y!qP)-2a+GqI@eau(68,):} sz|wg~{V*RvzUND^ILkd0w*h@Y_c^d0XZK');
define('LOGGED_IN_KEY',    'r7x?Y^8ni0^s!*;-w%JjSd/G8ZcZV$`KP+=9@8qnF!u9+(*Q)zgY8_-|TO]EYcHF');
define('NONCE_KEY',        '^;Gdu.mo=NFoPunYp=ypVzP+RVT~mWOkla;j&gIOrlP50_5jX,%*_I )xPc^*7m9');
define('AUTH_SALT',        '6y@)[[|9!6eUTEB/H-<E|-kLQh[ur|^@-{4Ze{U#~$dP-~vBg5|Yqu[A:qFfxq@)');
define('SECURE_AUTH_SALT', 'UNzMvM a1s/qrk;RxzBk<.9,!6Ql)|P!;WlNN*Yr1Wxhan<-hu)A^E/m[}B3{?zF');
define('LOGGED_IN_SALT',   'oui|ul-}8=%8J-4H+631#)ghG$`6cy f5YONad,?-CMgQR2j*i-vjZERnE<Cdv17');
define('NONCE_SALT',       'E^(j6sWkV+ QpEQ%jGWL0RGLX@e|UXl#;Wi)Xy7nKR&>4z(GQT)E~&J#=F68n02r');

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
