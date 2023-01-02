<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';DIF-M^]__N,(Q7F9jz+?-1Mt=e9z_fwCG1 M<i&`r<bmhkQI-mo[=>g/C~KVI8@' );
define( 'SECURE_AUTH_KEY',  'v ~Ibu}`}TK5k0zJ][eW@F,uVpWa#-CPMp:A]T*ah[%<._@rkm*5=ak>I)Kr]/Pj' );
define( 'LOGGED_IN_KEY',    '%=(zgh+^!omh3%#=t|I@H!_P-kGSM84o=Ac1L{!#8&o,QGBH%Mb)nC9(#U>_I_03' );
define( 'NONCE_KEY',        'M 13 ;T[@$fP,^<J)pJSBT?s{Mp8hu*!n^Xnu=+uhAM+f+4e/QsIE;&p{jmI|/cc' );
define( 'AUTH_SALT',        'Q=/!~8~.uMXM^,vL|W5:KvS-Coln9fxx7:Sb}6G,Zc:#o[VPn/?r1&Rio6pCtF*?' );
define( 'SECURE_AUTH_SALT', 'muBH;7WlfRPYX/gxR;ZpZOGAP{v`Mo!5N <ugHqc|wW{yBkHJK/&pVcRC;$.TM> ' );
define( 'LOGGED_IN_SALT',   's2H]hRuO(^FM]?HXg)T01)6lyQv*t><LLCn$7emo.SA-lA)9IYAg]{=_e=*ohh,W' );
define( 'NONCE_SALT',       'R6c+_C34:gc@-rNRLU2r:DC `d}r:$7b]KJ-gITrXP~K9L$98$4i6.&tnZ;zh[;f' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
