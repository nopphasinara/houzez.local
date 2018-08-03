<?php

ini_set('memory_limit', '1024M');
ini_set('upload_max_filesize', '80M');
ini_set('max_input_size', '128M');
ini_set('max_execution_time', 0);
ini_set('max_input_time', -1);

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
define('DB_NAME', 'houzez');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '2hdbfgur');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Z0f(|xK]W*u+?&CrK&ABWolNQO@(-:)/x}ERuso*q1ATHhL<[rxu `fs-o)jF2?u');
define('SECURE_AUTH_KEY',  'bqogF-G^fVk3y;X&5yoas0/-+`_4<_+w.I:,. **$4jdUe3`,h%|w__F#:$ s3P,');
define('LOGGED_IN_KEY',    '|TY-T2+RZ<o1nhr4Z Pz.8$KS*G|aNX+Iasrl/tSn 1_r<C!O=`#,9]T(0iZ,~5X');
define('NONCE_KEY',        'vizSlN)%-tDmR?$4Usvw`:DLg|8q3@;70FUEavS{8I>5q}.yzymZMa)VrbDJP7Z#');
define('AUTH_SALT',        '0srfvDo<cjrNBYAy/FLOqXA]P07uV|hR}.$Y9ycs@v<Sys?sm,IK5|$ip`?:So?T');
define('SECURE_AUTH_SALT', 'Og (5Yn.:^@J8E~F3:M:E3gWJq+5.@RIw])6y{9n`l?h$mj%VerBYO`RVtM(-BNU');
define('LOGGED_IN_SALT',   '|isX%h&-Uen-tcZ-2dLc*%Z0oQ;{A&yh{_@RI==4Zqv4NE2tp&)9Gv<hS/Ze(8qk');
define('NONCE_SALT',       '-iB}hOu.PfHHv3s31AZNLGrXvTR)CAN{ IZgP!]QN+Z<sjGZHetF_mH>QP=0XIh0');

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

// $scheme = 'http://';
// if ($_SERVER['HTTPS']) $scheme = 'https://';
//
// define('WP_SITEURL', $scheme . $_SERVER['SERVER_NAME']);
// define('WP_HOME', $scheme . $_SERVER['SERVER_NAME']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
