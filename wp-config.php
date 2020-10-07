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
 * * MySQL 設定
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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bDX_m6ycMR7*b%ER8B*o:yk}PpM$THiy#2uT2Hdo^}b|>/z2Y.mWCrV}?7_JfR,5' );
define( 'SECURE_AUTH_KEY',  'KbGpjC+Y<rAF4#wCaV/;?R&27J>LhUXg1~iKM&pop`B}{gV%#kel~7W*Ska-p-(/' );
define( 'LOGGED_IN_KEY',    '89-B!5k3bLKt)mZrW/h&Gq%f*B$[po;H3N1(*]@yZ?HKGtgVye6d(m#R.{>UF;G|' );
define( 'NONCE_KEY',        'JO8XO~5Gdzd2b0:n3CGS{=hV[u#[crU7#2Admru;q&]g+~#D>u(GwD&RyEKhzK&5' );
define( 'AUTH_SALT',        'z+6Iv B}nRx8hm}N]6Lsl~,kGpdql.hf$B%~%CCYntk1-Qj9P =-S-zR~o*x3r*d' );
define( 'SECURE_AUTH_SALT', 'A]ud|{|mEmjFh{7_AW[6f<~,haDpp/i6{L9mL@>U)>;|&7?:R*FyK.WxI%!kC`!=' );
define( 'LOGGED_IN_SALT',   '/)sxPT3J_I*R7fU<K=m&|pjU~//MZ~_h#t:#evCj}moE]rf}9%l^W8TXgxMs@!AF' );
define( 'NONCE_SALT',       'V,ow|v+>/k~]3~#|De&iQq}[oqKs<Z.D1i+C4h(c.YB~i-p,B<y>CxOMa-S|E(jm' );

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
