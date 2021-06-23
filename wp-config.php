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
define( 'DB_NAME', 'mydbwordpress' );

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
define( 'AUTH_KEY',         'msGPi5=y?cTh!ETF,^lika8nf0-W~J_6IR$Bhbf^JV_U#vT}+Ik~#p;~:aX_0]&G' );
define( 'SECURE_AUTH_KEY',  '|*+# cWv=tctF1C r&8z* 8dEf*wu rTPj@z.Q}MSy?XFnbtfw-B1(*c*arRt4@V' );
define( 'LOGGED_IN_KEY',    '0|KKPK,g?jBx&SX:mM ( bdE~1u~r3h&-zfAnxn7w<NSC=J6+y?<Ys:59$|;-&Cs' );
define( 'NONCE_KEY',        't6U*.m`V6wn~gkasLd^Ony!r[fR/4$SK|#Ue-nMqxzoUg7AN-Rf:rr#3Y7L*_=5^' );
define( 'AUTH_SALT',        'A+<qTn?qs~a?L[`MU/^WuQvW]pKnYndl%?TGNWXBy6Yvi;ijhs4*{H)%1n>9CHYs' );
define( 'SECURE_AUTH_SALT', '5Y7.U0:&C[q1%/]3d=AfaO.)WB@J4/wQ1%5NI^5i1qka>G3i]B.|Tm%OW__^kXY0' );
define( 'LOGGED_IN_SALT',   '[U7/3>_99{>)[7TUkB$7_iY0SozZb^NfzIvV=jL#zEU*A=JT@WR~QZ&D?cHth]_]' );
define( 'NONCE_SALT',       'y/]u24l^2:praF}S$ci-r;`y2)<JGRhv:O;h0 3#-Guwgk2,ztH0S1.+lCt<~(^l' );

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
