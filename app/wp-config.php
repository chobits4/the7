<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'the7' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'admin' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'admin' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pI7<Y~s*/IX:#-TdjVn~=7/5+*jP;%#tn&Q#y.U$Rv#mv:3b:8rFP*bTdLI:%3w:' );
define( 'SECURE_AUTH_KEY',  '[-?Q~8Ka9HrTpyB]NA:J0%U}>lL;+Ub=&Vm[X@IU^U5KY*8=AE:pQeS/,_XBW}vq' );
define( 'LOGGED_IN_KEY',    't3!4~!x0HH7^EdsVg@2n%7%zt]K)Om6K9H0{z.5`ID<)0[^}3Lb`N `**_>D@oT2' );
define( 'NONCE_KEY',        '+do}SH17q9cgT _{)kf#7]U8ad0pDjwb.Lq-ZMQz?Phb.:vjYhY}ZM?3oG/K)E1*' );
define( 'AUTH_SALT',        ')zI5e/)gPs^%-hG9yd9p@a?ma^}twKV9F%t-e^{fv;+|eW<@p#-#1]xP)j&9erph' );
define( 'SECURE_AUTH_SALT', '~^Nqg;q$uGS0*(-kHYEgL-Y,AiR-|rWBwER2e[)=G#da`yk/$@$R5k*,B<-i_QSa' );
define( 'LOGGED_IN_SALT',   'VH8@0{@p(</$uy;tvyZw`^&A?D^IUCy8B)yEML=$}K1`x^Evfv~s8h*DYeGR.u6 ' );
define( 'NONCE_SALT',       'yN(M_t@QkLjjQ<7UDdRGsJmzQ(:Xvy&tAm(lKi?R5{IQx`j-Pq%=_LgJIPGh86=0' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'dream_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
