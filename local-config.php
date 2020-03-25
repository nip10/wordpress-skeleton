<?php
/**
 * Rename this file to local-config.php (or production-config.php)
 */

define('DB_NAME', $_SERVER['RDS_DB_NAME']);

/** O nome do utilizador de MySQL */
define('DB_USER', $_SERVER['RDS_USERNAME']);

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', $_SERVER['RDS_PASSWORD']);

/** O nome do serviddor de  MySQL  */
define('DB_HOST', $_SERVER['RDS_HOSTNAME'] . ':' . $_SERVER['RDS_PORT']);

@ini_set( 'display_errors', E_ALL );
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', false );

// See https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'jzOntK$xZw=Q^jIiwAluc%o n6f(*JsWXU!]eJL;V1Y<:hz=cqLG?N#Qa65IaIfr');
define('SECURE_AUTH_KEY',  '9oS,~yClL.PWm]emW#1L{@lR|Nrc$XuLGLvQDkLD>8lZwOg*$)?hbb1]1Xg[a:,B');
define('LOGGED_IN_KEY',    'I_o==H))5@M->ZMa!N(8i~s-%XXy+%8&H`{ow7),eK&D t[;(li7dRBk4o|j|-Aw');
define('NONCE_KEY',        'HF({Rg.%J{ uF<};0o  m9k#>(A{p85k?z-xvtP@G9ER{5M^P:Efn c:%&r?xH9L');
define('AUTH_SALT',        '*I%E_-f&pHw/BY869.b Inh`;AQ8x3P|vhED)WO]b2hu&PHTUv(@z:G_d13x~v5+');
define('SECURE_AUTH_SALT', '8UkmJ:4,)1eM4G+T|8p-$+qTA_j>*x3Qr6myU)U5tQ _m,c[%@Bm,LN`=jir U}z');
define('LOGGED_IN_SALT',   'B__>~ny+luP:kS&i4kUb$<:p;w-lCIx3/+.9SuxYlp9TttnZ9b!`k2>g+/H#6bvg');
define('NONCE_SALT',       '*W930idlR@+NQf<?wQ+1=RAA-NoVS:tQ(XO^=mR vdl(F(;aY7%9gw%hTT-Ko-kN');