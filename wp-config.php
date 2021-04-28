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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+c-5I9MNM0ap,f~=Oh]uR.Kp(=vA+Yc0`A+p,@x_mfh <I$lYU7Z%kTi[lj(,h V' );
define( 'SECURE_AUTH_KEY',  'Lu-(zIXY[IO[P[7eY>N7WUiXAS(j%hdrH)]W&9w38KbEbuQEDd8(x)n#O)%k#-af' );
define( 'LOGGED_IN_KEY',    'tROnJ&d}95wphC,m[mPyNt)FehuxX=}oMrh_SVmAmNgq`_JptaG&;WeVLE7+paAW' );
define( 'NONCE_KEY',        'gwjXuypC~8_T/>l12*U54eN_T.MyV63xV4dW6@W-|0X94(lcP~_eLFT+L;iR;Kb[' );
define( 'AUTH_SALT',        'yp@1T:`hw!@WP*j =QlS[n3P9U6;OyJbrJPU?`X)~,LlrpiSj*rM8XVz=^Y;H*I<' );
define( 'SECURE_AUTH_SALT', 'IY2f#n3mZ A]K|h5Yru1_vk#cc,#u8^0]t$OgqPW[N!i?<I08LB /CV];3o+@gIa' );
define( 'LOGGED_IN_SALT',   'O1_d]@val=c3ojtM(V+-~6-EM9/P|:-lc]+O?9d>_|Ji1 w^g+|mO#S!KlQzVpTf' );
define( 'NONCE_SALT',       '3 >@T>-`@D2_joKV:KFjN+;.@IohE}};MedPm!d%MNfZds3:6#S,jc= j55${GHq' );

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
