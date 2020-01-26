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
define( 'DB_NAME', 'wp575' );

/** MySQL database username */
define( 'DB_USER', 'wp575' );

/** MySQL database password */
define( 'DB_PASSWORD', ']769Iz[pSs' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'y9bkryqe3aeqda47tzdddtgbyjblvrt4ari9ftbgnye45268kungkciukxtr8nfn' );
define( 'SECURE_AUTH_KEY',  'kflqkkusisdnz5bqtovlclrdfqh105hunicf2yjd6krldep26lcermhrnkyeskv4' );
define( 'LOGGED_IN_KEY',    'lkuqgmg2vqlss9jbzqmrxechsdpgxs988dcvtnzd1uhuc0xr3c0sjrmgkdr4xjhl' );
define( 'NONCE_KEY',        'jumve7eud945m05f2vc1wifevv3rmspoubldasqyt8qng6nheiriijcck9xcqsuf' );
define( 'AUTH_SALT',        'nvxupcwz1arudn4e3p6xj6ipkufoficuqanamhbisugn9huu1s2rhs3ytdcj0nrm' );
define( 'SECURE_AUTH_SALT', 'ensfp2sev1ulxybhxrmza33j2usflkj8u1661sapdxvfrkqvhmnthoxmfp35pr6j' );
define( 'LOGGED_IN_SALT',   'nqzmryoxrialpen9xlpgojwdnx5espa9oxsnkbiek1f7sadyz5lqxxxqzexa12aq' );
define( 'NONCE_SALT',       'xbsfrpy4sznevilmmzmwps4jvbrlqxj7zpidghdiftlysxypiu35sfktcr6pwb7c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpl8_';

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
