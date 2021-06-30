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

define('DB_NAME', "rojov3");


/** MySQL database username */

define('DB_USER', "root");


/** MySQL database password */

define('DB_PASSWORD', "");


/** MySQL hostname */

define('DB_HOST', "localhost");


/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');


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

define('AUTH_KEY',         '1!m6%0<OhmQ%G@>J9[k:[^$ism!lU9O&08!mEOYzd2Jgd&jGm<<d4>dFWC],YE!h');

define('SECURE_AUTH_KEY',  'IF7OON5?n?{7oNFu/A;I8D.O*PO0mVwEFTK|y|~Va*cG4/2t();6Mm{{qK.Za(,c');

define('LOGGED_IN_KEY',    'Z4k93)#xQ:sSs+!i6U2r$FTXu$S2q,5uU~F9t}|qDy&aTUNMUS <J!6,19OJu~nd');

define('NONCE_KEY',        '3lx{7/i!Ju~dB%rJe*][teL,SgepZy,[@+g6wiB~y*hvSQwa*yk<i8N7XT-tP_+@');

define('AUTH_SALT',        '1`06.k*/RA]_1Kg /Np_)q#6(%+;|t-cy: }Qc>bOUF?g~GrTANXERN{nBnEol#~');

define('SECURE_AUTH_SALT', '6.G60#E=A]u{ZAD2/?#<9@t5#Kb}5yng(TCp,UxEJ~y:AGRX!<.[f3%PzJ*5ilNt');

define('LOGGED_IN_SALT',   ' H%?zkf|K6X6JNJFDv;H_(?6< yOegXY$S=$D^s4MOe?RJNvYFi!&S#m4k*r[6YW');

define('NONCE_SALT',       '|!~fX|u?yK/[bbhxVB2`2orsV.4i+qGZfETad&OO>^k@c7ff 8/.dLgL)R3tTS;A');


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

