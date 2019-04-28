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
define( 'DB_NAME', 'oren' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
 define('AUTH_KEY',         'F=/K-<dg7Dc+% 9)!#9->)8qAAM:#BeHlIX v`#zcH7+-%JjJS}wv#_-j0m}-y{@');
 define('SECURE_AUTH_KEY',  'eKrwO,.s=524&1W);8/Uyuq2_u#s&->x1pUR2eBzG|G)+T=R/_Su>nabY~4F|x+#');
 define('LOGGED_IN_KEY',    '~-cJC.;o}IE/7;v)t4/]jmQ^ezxFXON;#11 K3VV-UP-DALCQa#0CUW+c@=|-In>');
 define('NONCE_KEY',        'G2+]& &zx,*;3#wcFh+G{%:Uor^#G!4IuRB5gX-+`o>$DxPac:h:3|*6(!ld,m;p');
 define('AUTH_SALT',        '`<{mT^?NbCLX)fGRN[8{A7;`3_LbN^/C-S<i~y8hZJe-I0D92-r#-n|1|2|*m0c6');
 define('SECURE_AUTH_SALT', '`yoKt8_P N?,6|b(s6v} (fF-2P7vah7QUd NuwXZe,SR_X[-NM-B,ikJ!r|=Dt:');
 define('LOGGED_IN_SALT',   '!gPB|W3L%z|GUxRSK^J#%o-zU8;4FMTYK9OoASRN+7Acww`imS,vS)%h(ZBIF]e(');
 define('NONCE_SALT',       'XT+Ec>2fyxpE) )m-0V V+JaEZ[r-!3+A_2 V6aAeu(lpD(kf;.~y`?V*HK8Cp9s');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
