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
define( 'DB_NAME', 'wp7192509' );

/** MySQL database username */
define( 'DB_USER', 'wpuser12111' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HcuYG4Qj8evrXln' );

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
define( 'AUTH_KEY',          'd4|hD-}BG/7jS$t4ZrwT[[}c0FeD}Xs3V.jM};5qU(%=c8QYqEBPW o6BQi8^(,{' );
define( 'SECURE_AUTH_KEY',   'ju^yFFzN2+uz;e|RG-o1LXdg_kX&O@WQvA#+vjYcfTtBY.yqTg05!5-N9.XNy,)U' );
define( 'LOGGED_IN_KEY',     'bGGkt:?iDUh)(!y u52y>HrH@2X7{YV42cCx!71jzj`K3xU|aYi,W}Q;H&`$T0tI' );
define( 'NONCE_KEY',         'V5TbAI6l?(r?ZoG]0)(Fz8^j`nPEaX<$4v<P<b$|,K]l;e2cuN2ly]F+~sX`;:?y' );
define( 'AUTH_SALT',         'Qn*W`Q;`NYOhpQ.*^N{@CHD)z{%ux`V$8f^[VBYvW|8k-:FR=5~i}mB)2TM)xFwH' );
define( 'SECURE_AUTH_SALT',  'yLbaZ;vf)B#y^i%1_u7,F2s*49TbL%?Tla3ZY,gR{@%+61kS^u7?Z}cwO Jnry j' );
define( 'LOGGED_IN_SALT',    '@:_}j2t)xKV.b0O7g:QLp|f tgd f m3agSQ^P57Mn:CPj$H2~2%(l(,a@m2TcOb' );
define( 'NONCE_SALT',        '?Ln3/nV|tz5g7#WpX=RE]/ xoF}fDP8-B9ZGw%7QoWmWZ^A$}XEQ*Z$x,]*}m3$H' );
define( 'WP_CACHE_KEY_SALT', '^mlrm#6smEDMX:l~r:)HA)tmJ`il&cV_FeSeC`M.XTBaB~xMY~Isqi:uN=mJ(l u' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'FORCE_SSL_ADMIN', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
