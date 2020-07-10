<?php

/* Path to the WordPress codebase you'd like to test. Add a forward slash in the end. */
// if ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS ) {
// 	define( 'ABSPATH', dirname( __FILE__ ) . '/build/' );
// } else {
// 	define( 'ABSPATH', dirname( __FILE__ ) . '/src/' );
// }
define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/*
 * Path to the theme to test with.
 *
 * The 'default' theme is symlinked from test/phpunit/data/themedir1/default into
 * the themes directory of the WordPress installation defined above.
 */
define( 'WP_DEFAULT_THEME', 'default' );

/*
 * Test with multisite enabled.
 * Alternatively, use the tests/phpunit/multisite.xml configuration file.
 */
// define( 'WP_TESTS_MULTISITE', true );

/*
 * Force known bugs to be run.
 * Tests with an associated Trac ticket that is still open are normally skipped.
 */
// define( 'WP_TESTS_FORCE_KNOWN_BUGS', true );

// Test with WordPress debug mode (default).
// define( 'WP_DEBUG', true );

// ** MySQL settings ** //

/*
 * This configuration file will be used by the copy of WordPress being tested.
 * wordpress/wp-config.php will be ignored.
 *
 * WARNING WARNING WARNING!
 * These tests will DROP ALL TABLES in the database with the prefix named below.
 * DO NOT use a production database or one that is shared with something else.
 */

// define( 'DB_NAME', 'wptest' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', 'root' );
// define( 'DB_HOST', 'localhost' );
// define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
define('AUTH_KEY',         'J*^9ZtpSG`+$m./D2n+9oa*xdp>)GUF^+]:F1Y*Ej/V+CZ/}A~*9+5MCZwOI,2/-');
define('SECURE_AUTH_KEY',  '^SV)e^}c|>`1%@nXl?ET7Zk}s.B~*4h2t]>6X7Xg[6X>h-2ii{UH<-DH3)[.~.-;');
define('LOGGED_IN_KEY',    'd&9[>s%:`9X4A[sSFhZOm<|0<tUO@CTd!FnxIU5<|Z+>pH#fAmY?+QBo;VKI<DA^');
define('NONCE_KEY',        'kcF#x=LbVo+@Vn>rI3`k!|1zF>>^$3usV1.TnW7+-!-z(E-Ca^-RJveN*0/FUz+-');
define('AUTH_SALT',        'qu4<mdv;lM.cKZ[7lq-Yst<}PGc{Xku]IvAYQ4]%|-f_)!)qT;3.!B-$n$[Uvli3');
define('SECURE_AUTH_SALT', 'thB|)n_ Qb1+WUMxXq@:=Bh`D+=OGmt=9=1,y76z*dM<(D6o%;|SfzGF37ff44o-');
define('LOGGED_IN_SALT',   'EdiN({61S=nNp@g}Fb(lVAvzQ[N]jeln*bPtuDCb.vsN@Ufl6+jm i;|g$V]+>}d');
define('NONCE_SALT',       'B46(&yI~Q5p;F*B+zZy6j?{2l 1mPD7k$+jvX(a6+3+,u>n:-U)D)g}~+ySY?r,_');

$table_prefix = 'wptests_';   // Only numbers, letters, and underscores please!

define( 'WP_TESTS_DOMAIN', 'example.org' );
define( 'WP_TESTS_EMAIL', 'admin@example.org' );
define( 'WP_TESTS_TITLE', 'Test Blog' );

define( 'WP_PHP_BINARY', 'php' );

define( 'WPLANG', '' );
