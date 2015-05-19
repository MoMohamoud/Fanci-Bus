<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'localhost');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'QdC,EEv_lvmOh>G2?#Td7gNYAfo=kl&9{W4f=+osX[c+XZA)jUM1v8,u:k[~*7|[');
define('SECURE_AUTH_KEY',  'M$#sX9-8wO++x}7oogvwjGq0YJ+c!WqV94;JSmaS`{ZBtX^}:@;L08O6t #y>+vh');
define('LOGGED_IN_KEY',    'Z?.C)me~Nck}=8rS}G-lfIs&^i99gXT2uuAf$z+*g#R9/|Dny;zQba@^JDFC+Gv@');
define('NONCE_KEY',        'Tmn;Jh%v+IuVmI w1PhXE-BjSh8H?lcdM^,X.1>{}~z1Eo*o@zrP&5btT~=cV91,');
define('AUTH_SALT',        'sbdRHS6Dbodf|GNzh+cE?|0)6Of~@Ingi4oyFmD`>U%9;)K3r7|y-om!m}I~,A5o');
define('SECURE_AUTH_SALT', 'kw#FI4>#H?u6?-w:HlOq^[H9-_^PF<73~--n,-io7=1w|s`:tQCS[sps-ZIO^ftG');
define('LOGGED_IN_SALT',   '51 G|OE!ryd/u&$&`Jg$mxb..bF/2RM3|hl[HRL:%Xft+<KAFY:)=M `O91?5z$t');
define('NONCE_SALT',       '86~c!o+|ZEhX`sa)9OL-e*51_5[I~$cl;3&o/JNsZKtuk`{O->/_$.vp)aHcfJ+v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
