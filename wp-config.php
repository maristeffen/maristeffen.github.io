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
define( 'AUTH_KEY',         '74n!1s3=|5xSIC;kJR2,BcWQ5?Z8*7~ k2mIU?vD%vAOXKq^jUYaw5zfFTXPS1;<' );
define( 'SECURE_AUTH_KEY',  '1f$LaYMVICQpA/mmA0$Lrh&~<EIQ.j)Ns9{UM)jDVy{)y)l`Wuk{*f!yvX(>u)u(' );
define( 'LOGGED_IN_KEY',    'L*LI5}b0R^ kl(.)un4sB,9^fgvwh1dDNw+Yv8qn}H|o?J[!9OXmJ+~M4?/[9A5n' );
define( 'NONCE_KEY',        'I.X0M*;j:7>P}^$C?E%.`=G}4#6s6;3{>c^T@{1ls%=F}3Oj wo3c pZG7vHxa0(' );
define( 'AUTH_SALT',        '!eI>9vVRse_1yP }vc<e2-4h0/&g_;ZyvIUdWVP^+v(|_<XRew!,xm*<D^)~3<I_' );
define( 'SECURE_AUTH_SALT', '3v&1$eyveuyR*!^t4N~q!Dzy;h%KwqZd1an!OS[[,~|!YV=#LY4_ED~tGN[j6`U-' );
define( 'LOGGED_IN_SALT',   '!12/`oCT|WR)QC^a-x:rlJy:<6[k4.zOryXW}!/bfLD/ipgN=N}d_}Qnf=g_{P%G' );
define( 'NONCE_SALT',       '_qfXrE4c({Gs!kmLd3+NJ:& I-]-W[(f58FHjipp[aR f9yVO~gk{Kk=~0Eiv Y1' );

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
