<?php
/** @mainpage
 * Yahoo!ニュースWeb APISDK共通関数
 */

/**
 * @file 
 * @brief Yahoo!ニュースWeb APISDK共通関数
 *
 * Yahoo!ニュースWeb APISDKで、共通で使用する設定・関数を集めたファイルです。
 *
 * PHP version 5
 *
 */

/**
 * @brief アプリケーションID
 * 
 * Yahoo! JAPANが提供するWeb APIを利用するアプリケーションには、アプリケーションIDが必要です。
 * Yahoo!デベロッパーネットワークで取得したアプリケーションIDを設定してください。
 * アプリケーションIDの取得については
 * http://e.developer.yahoo.co.jp/webservices/register_application
 * をご覧ください。
 * 
 * @var string
 */
$appid = 'あなたのアプリケーションID';

/**
 * @brief 特殊文字を HTML エンティティに変換する
 *
 * これは、htmlspecialchars()を使いやすくするための関数です。
 * htmlspecialchars() http://jp.php.net/htmlspecialcharsより
 *   文字の中には HTML において特殊な意味を持つものがあり、
 *   それらの本来の値を表示したければ HTML の表現形式に変換してやらなければなりません。
 *   この関数は、これらの変換を行った結果の文字列を返します。
 *
 *   '&' (アンパサンド) は '&amp;' になります。
 *   ENT_QUOTES が設定されている場合のみ、 ''' (シングルクオート) は '&#039;'になります。
 *   '<' (小なり) は '&lt;' になります。
 *   '>' (大なり) は '&gt;' になります。
 *   ''' (シングルクオート) は '&#039;'になります。
 *
 * echo h("<>&'\""); //&lt;&gt;&amp;&#039;&quotと出力します。
 *
 * @param string $str 変換したい文字列
 * 
 * @return string html用に変換した文字列
 * 
 */
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

?>

