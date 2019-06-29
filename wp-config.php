<?php
# Database Configuration
define( 'DB_NAME', 'wp_rentestatedev' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_HOST_SLAVE', 'localhost' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '4,WG2v1:vt:kCn*Y:-~o4pm`?v}^-^PE<}kfo40%,-%7l5ov9/z/3bn-F|hz2YfR');
define('SECURE_AUTH_KEY',  '`?|<cQQnD].ukxv|<@Wl4xquw:oZM 2Qx,,Pj^b*D30r+o 7Jo,6{XQKbPKqh@vg');
define('LOGGED_IN_KEY',    'Q13GS,8|x0u=hrr~t5SkZ+_*z|1up2.*uEsb+lkO<34(s,=a/SR}x:dQym(gRFu.');
define('NONCE_KEY',        'L=K941/Ea@YZAAh|ufYz.Nhn;95kd_}l9m+y&^Twr@=sG2pL/+t=txIu7Jc32^]s');
define('AUTH_SALT',        'r1)=[i*<xiLceo7^U6zW#L5TC@FPGbAI-FJ3++,WKfiD-<K+iR0beaGqScx37^g:');
define('SECURE_AUTH_SALT', 'uKOrp+G_m{s7)8Lcfj]]Z[?Vr7`_ohSf|>y7_;6Zalm[XF[~OL<6@eRX8Y`e:o^@');
define('LOGGED_IN_SALT',   'My/ 2J?! T7O}3 2cg#bY&I s_0@-GW~w.)[0;DKi-%`v<,^iqt%zamO$Af Uba|');
define('NONCE_SALT',       '7 c(gwC{< rZ(ZDzu!m> ztdRJ.7mNP{{ W}!+IzugXmg5`#(ft~~q<p+ur?U4Fi');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'rentestatedev' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '3676b496e6d7adc874a0fd1ffd99a6cf137d5c3f' );

define( 'WPE_CLUSTER_ID', '140095' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'rentestatedev.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-140095', );

$wpe_special_ips=array ( 0 => '35.238.218.88', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
