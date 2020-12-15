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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coronagym' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ehc?;S$`p?FbXY<af/Ih{J $Y;_B.-~z2k1;~`sPc-82b26h(`I[ni5M5->eN}T,' );
define( 'SECURE_AUTH_KEY',  '/5`XTbVn6Zbu9-#!z4m1#x-Z3YPMJmoqfXGmIJZkRzr4BwzQxgQ_iB3iq6@VWhLl' );
define( 'LOGGED_IN_KEY',    'aXYq15P%a6Vjoc/uvu!<KQpyKM3T xiq;/1VH;8t7mD!~0 ,:)|AV.39<u^?_?E7' );
define( 'NONCE_KEY',        '6G:46mryv*XloIr~{5KD`l`A1/b2(L76zx)ePLvNj#aucZ|_(1Ph8z:#F0Gy@``;' );
define( 'AUTH_SALT',        'Sz3]As<i00Eo6S]Y[o)(4_+*OH%pHuX>~UrX]G?&e3l-#k}*1&W@u#2DW/FYha@n' );
define( 'SECURE_AUTH_SALT', 'JP3w+$)+J45F%)my+6gNFGKD$l5{q|g$jJ!.(37-?>#yqXqAEg_BZGz~(YM]%!j-' );
define( 'LOGGED_IN_SALT',   'X;+4H$78.TCcB#pEtH+K:KFqt PB%fPKy@=kMbh0#oSYrBz}A8v$c6}fBs[t6b+`' );
define( 'NONCE_SALT',       '.?o4s8MaFw>}OiiclL{?TS/aXl#k_I8zz_OLUfa2cH1,|J://)skaLC1Wn{2ex3(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
