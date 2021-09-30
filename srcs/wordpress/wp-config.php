<?php
define( 'DB_NAME', 'WordPress' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'pass' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', 'utf8mb4_general_ci' );
define( 'AUTH_KEY',         '`Z6y^2SqIrX)*Syq^jOrZVvDw~C}THe<GB8|8V1s>e*}TKPj1Yi%*mA4TQZI#K47' );
define( 'SECURE_AUTH_KEY',  'Qp-M6)=.+]Q:XOiG)$0dvm6,E1 |0(Tc_+=L;GAS98D7b.#?MU(rPg.88(9CqAQM' );
define( 'LOGGED_IN_KEY',    'dVBcq=|.:0B0_2uQ_?tUsis8_QpW|le`f1p [T+PSdT|t>c|xro,C7p-8ftL!oq/' );
define( 'NONCE_KEY',        'uq(vnF&}U5E)=>]sK1$gimKcVMyt)zupVU-j7W}}2y0mPCsYH<+`qkjWS|,{p9^o' );
define( 'AUTH_SALT',        '*6;=+P)m[o]rMQpE[NYGaQ&(h?>U5e|$ACqJ,ozSxL>7N(`;-d]@nzH[lu8+Iiv-' );
define( 'SECURE_AUTH_SALT', '75XFd|,nrY3)ip~,rz:9ck,5k/u`+C^GzpN=J^^jZSh7}s-VUq!`]?&6>/Kafpik' );
define( 'LOGGED_IN_SALT',   'kMYngA~pjc[1a3s@1V2m<md$e`^l1Zp9|n2oV]Yv.:dIm7Tp,G/oe-o}rhfBD3O<' );
define( 'NONCE_SALT',       'M/w4$J2^CObD:?qyzaHf[d17OS$t} CeFiFEGiX1{f`6(say,K>~z`|UZRM-8#|A' );
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
							}
							require_once( ABSPATH . 'wp-settings.php' );
?>
