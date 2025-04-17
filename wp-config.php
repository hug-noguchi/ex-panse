<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'expanse2_wpexpa' );

/** データベースのユーザー名 */
define( 'DB_USER', 'expanse2_wpexpa' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'School0222rei' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

define('WP_MEMORY_LIMIT', '64M');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c X/V-rpHPIz@LK )]deTG6ezD$a3@5X6sW&tk!V1u{odXH56Hr3$-zNnyjYZs:S' );
define( 'SECURE_AUTH_KEY',  'S@NK3Y7_U=} %S-a~!u>>EFu{s0o{ttIwePJO3`!Gq2D8x9/H|)G[pB;>ekJ)|FZ' );
define( 'LOGGED_IN_KEY',    'RrH|lF<5/WF}RGUka1gX+Sx#j,,Iq.Hl`u+FX3T/KNhBGO-a? .}M!Z#%`Nz!]N5' );
define( 'NONCE_KEY',        '&@i?`8rqtUDzc{givd3qFH Uj^Y>grDq2IUF-yi/QK#UUGMSk&_%#7Hr} YJVun-' );
define( 'AUTH_SALT',        'HulSbBdW]gkmL;v{TnCd$<pr;G[0Pcj[o2*LBP~l&&~4YWJ=q3;gcs/o_&eqz&>`' );
define( 'SECURE_AUTH_SALT', 'mA=aEYv9Z=32,B8@P`-,aD35z8bNE(:lp`0?=wVm:$H r3,@-O,6$`}ON<KFT/uP' );
define( 'LOGGED_IN_SALT',   'zr|zQH}%TyCGx z<T2}Evp(H^FgW/?E?|u6HQx;YH77A2a5&!;Vpyd!|k%66tSsV' );
define( 'NONCE_SALT',       ',#}N,ftw9g62GWJn}t/kvp%79J_}vVv5Dt<VTGt3jy|c{4@e)|v3fNRa,&wXfjn,' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
