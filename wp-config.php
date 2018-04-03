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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shadowone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hO3L9we` Hvm2-Q}rC@dA^L(<xaTF-MUcTWtf@8NGxVfa>OJ]Mxo&7]xlSp(UO~+' );
define( 'SECURE_AUTH_KEY',  '~GHS_z2}a14xgc}Dv#FRHP+3BCjocCp.[1vxuL:}2/X|uEBSA,6s=y4ve:B~WJ&i' );
define( 'LOGGED_IN_KEY',    '7`5Mq<z_/n!69 jr{^McAf-hmDR*&3 ft_:^6^|E@a WCuK/_4VTlR8xkj6#Cgg|' );
define( 'NONCE_KEY',        'j*@yV{&c^2cFQwu=0Xfm3M+*].HFE_G<%_4ss+ND{5F4QRCL!KHGPBr{^v3jRzf2' );
define( 'AUTH_SALT',        '}*NKDvSt}a>*3`g^B_D^>i&`nu7Iez%n3sv(BXL[fReEoxn33hT45fnF>ia8ex%M' );
define( 'SECURE_AUTH_SALT', 'CzW-X+_12%^Kq8w(evsDuxIAS5q1,@W5wU$l.K.WB5@f*k{uYS~x24U!WVmZG{Yb' );
define( 'LOGGED_IN_SALT',   'BDO#CJxWXCM~SI .X9Lz m2Mt>lIYgcx3gQw3U7re(R*J[2p#N$7_=ckd13oQn(y' );
define( 'NONCE_SALT',       '. D$P.K4EiOyyK-P]6XzVrYir7+*[SgA+3g%^,[E*`Tvx--w8>Uz{ysqAHSxj,(l' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
