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
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '.}7NH3dA&3sK~r>aq|:ao]]7`.98p(!Gp8yyJb_j[|l#`]?,v2,gi>t.,YPM~:y2' );
define( 'SECURE_AUTH_KEY',  'Re2~B[nQFkcbW E#iwbR{3qCiK&k++3HB6H0Y%&^43#t:mlU,Afs0wh&sBx?rb3<' );
define( 'LOGGED_IN_KEY',    'Q!rywahQpe3J,Cy,;qGqQ*A#!(om.)=,%Rs(XkAduDcLxE}SJFr#IK~%q*O0P:c7' );
define( 'NONCE_KEY',        '~vtIMsU*^(k,Vxb,GlnA4ENg+!Cz?B21se/yfD%g0c#It)DI_@#`{<787hdv|r(e' );
define( 'AUTH_SALT',        'BjHGvgv>/wL1`{G> bG~?bF5*DujL,6{$6%%)=Ia-2RffG4gfR9zFOs=rj,b_mq>' );
define( 'SECURE_AUTH_SALT', '_VnW^T)wa9&Z^:4+$D)X<1#zp>XwM&}6]piJ.^#yU~PHCD<AiE=x}_S/p63Tm|n{' );
define( 'LOGGED_IN_SALT',   'Z&ySM])Ve%`FrHTRVB&r-~W:bi}v_vvfOr13Wk9^hr6s&{7^Z_F8u@D.}&2Ra :N' );
define( 'NONCE_SALT',       'aU@<XRr=KQ|7WD@kV+n`O_kzEQjP$YrIK{(o3gl .Lgr3/KjJ+By-``^I=t`*RNR' );

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
