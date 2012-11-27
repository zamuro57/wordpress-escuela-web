<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zamuropress');

/** MySQL database username */
define('DB_USER', 'blythe');

/** MySQL database password */
define('DB_PASSWORD', 'ClUfK7qe');

/** MySQL hostname */
define('DB_HOST', 'tunnel.pagodabox.com:3306');

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
define('AUTH_KEY',         'SNG!;82F7#ZbTHi/i7s)J^7@|6{7A&62h9quj(z0dRI^ci`-t.P,6-wsI.:jZk5?');
define('SECURE_AUTH_KEY',  '}3pcT;?5,f[2y|[!/>_k-*OCR45[eoXeFitO[AziG~^(Z?DbnnHTwEfo.k*y|C6+');
define('LOGGED_IN_KEY',    ' jXv(Y]AetH#{t#l{Th]GelmIF&q?%Zd]-V:mX!7D.|p`$ar^y,;Zin}8`OWgh4`');
define('NONCE_KEY',        '<N,Ypa&:*}#t@V|fp|*5SNPJt*zwK?)&Q;0+{#JaRRPV-x[d`bKP]|W;p7c$FCWL');
define('AUTH_SALT',        '+mw*MW5|VyM`py*!-+>& W6oQr?7-x?PmZ!f|U+_^B<8zCdO%((L[4e,e @JXu_0');
define('SECURE_AUTH_SALT', 'W4hvoe2b.i?R4K@[b-Ji;5Sg5!PT.+_H1wz>Q&Y8~~6u![wfyP$9q|F{l><~w.Dq');
define('LOGGED_IN_SALT',   '}ZR,|_4`o1dS=w7bqtdj^q+;?P_tbX1_9tZqH|6 D6bZ>dMyU.uUk7!wuc7PfyvD');
define('NONCE_SALT',       '%qb^v14]1Vdf6+e|LZHSfw5xS9Zu+Wq?W$%^%N[gx(-9K|oG?}E0MwLW|H[k-eka');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

