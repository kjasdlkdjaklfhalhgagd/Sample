<?php
/** @mainpage
 *  トピックス見出し表示
 */

/**
 * @file
 * @brief トピックス見出しを表示
 * 
 * トピックスAPIを利用して、検索した結果をhtmlに埋め込んで表示します。
 *
 * PHP version 5
 */
require_once('./common.php');//共通ファイル読み込み(使用する前に、appidを指定してください。)

$pickupcategory = array("top","domestic","world","economy","entertainment","sports","computer","science","local");
foreach ($pickupcategory as $cat){
    $q="?appid=$appid&pickupcategory=$cat&sort=pickup&order=a";
    $service = "http://news.yahooapis.jp/NewsWebService/V2/topics";
    $xml = simplexml_load_file($service . $q);
    if ($xml["totalResultsReturned"] != 0) {//検索件数が0件でない場合,変数$resultsに検索結果を格納します。
        $results[$cat] = $xml->Result;
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<title>Yahoo!ニュース - トピックス - サンプルスクリプト</title>

<style type="text/css"><!--
#ytopModuleSample * {margin:0;padding:0;}
#ytopTab {font-size:80%;}
#ytopTab ul{display:inline-block;min-height:1%;border:1px solid #9fb7d4;border-bottom:0;}
#ytopTab ul:after { content:"."; display:block; height:0; clear:both; visibility:hidden;}
/*\*/* html #ytopTab ul{height: 1%;}#ytopTab ul{display:block;}/**/
#ytopTab li {list-style:none;float:left;width:82px;text-align:center;line-height:1.5;}
#ytopTab li a {display:block;background:#e9efff;border-bottom:1px solid #9fb7d4;zoom:1;}
#ytopTab a.on {font-weight:bold;background:#ffffff;border-bottom:1px solid #ffffff;text-decoration:none;color:#000000;}
#ytopTab01,#ytopTab02,#ytopTab03,#ytopTab04{border-right:1px solid #9fb7d4;}
#ytopContent {font-size:80%;}
#ytopContent li{list-style-position:inside;line-height:1.5;}
#ytopContent li span {color:#666666;font-size:80%;margin-left:10px;}
#ytopContent dt{font-weight:bold;line-height:1.5;}
#ytopContent01 {border:1px solid #9fb7d4;border-top:0;padding:10px;}
#ytopContent02 {border:1px solid #9fb7d4;border-top:0;padding:10px;}
#ytopContent03 {border:1px solid #9fb7d4;border-top:0;padding:10px;}
#ytopContent04 {border:1px solid #9fb7d4;border-top:0;padding:10px;}
#ytopContent05 {border:1px solid #9fb7d4;border-top:0;padding:10px;display:inline-block;min-height:1%;}
#ytopContent05:after { content:"."; display:block; height:0; clear:both; visibility:hidden;}
/*\*/* html #ytopContent05{height: 1%;}#ytopTab ul{display:block;}/**/
#ytopContent05left {width:49%;float:left;}
#ytopContent05right {width:49%;float:right;}
--></style>
</head>
<body>
<h1>ニュースデモサイト - トピックス検索V2(php)</h1>

<div style="width:412px;">


<div id="ytopModuleSample">
    <div id="ytopTab">
        <ul>
            <li><a href="http://dailynews.yahoo.co.jp/fc/" id="ytopTab01">トピックス</a></li>
            <li><a href="http://dailynews.yahoo.co.jp/fc/economy/" id="ytopTab02">経済</a></li>
            <li><a href="http://dailynews.yahoo.co.jp/fc/entertainment/" id="ytopTab03">エンタメ</a></li>
            <li><a href="http://dailynews.yahoo.co.jp/fc/sports/" id="ytopTab04">スポーツ</a></li>
            <li><a href="http://dailynews.yahoo.co.jp/fc/" id="ytopTab05">その他</a></li>
        </ul>
    </div>
    <div id="ytopContent">
        <div id="ytopContent01">
            <ul>
<?php
foreach($results["top"] as $result) {
    $datetime = $result->{'DateTime'};
    list($year,$mon,$mday,$hour,$min,$sec) = sscanf($datetime,"%d-%d-%dT%d:%d:%d");
    print '<li><a href="'.$result->{'Url'}.'">'.$result->{'Title'}.'</a><span>'.$hour.'時'.$min.'分更新</span></li>';
}
?>
            </ul>
        </div>
        <div id="ytopContent02">
            <ul>
<?php
foreach($results["economy"] as $result) {
    $datetime = $result->{'DateTime'};
    list($year,$mon,$mday,$hour,$min,$sec) = sscanf($datetime,"%d-%d-%dT%d:%d:%d");
    print '<li><a href="'.$result->{'Url'}.'">'.$result->{'Title'}.'</a><span>'.$hour.'時'.$min.'分更新</span></li>';
}
?>
            </ul>
        </div>

        <div id="ytopContent03">
            <ul>
<?php
foreach($results["entertainment"] as $result) {
    $datetime = $result->{'DateTime'};
    list($year,$mon,$mday,$hour,$min,$sec) = sscanf($datetime,"%d-%d-%dT%d:%d:%d");
    print '<li><a href="'.$result->{'Url'}.'">'.$result->{'Title'}.'</a><span>'.$hour.'時'.$min.'分更新</span></li>';
}
?>
            </ul>
        </div>

        <div id="ytopContent04">
            <ul>
<?php
foreach($results["sports"] as $result) {
    $datetime = $result->{'DateTime'};
    list($year,$mon,$mday,$hour,$min,$sec) = sscanf($datetime,"%d-%d-%dT%d:%d:%d");
    print '<li><a href="'.$result->{'Url'}.'">'.$result->{'Title'}.'</a><span>'.$hour.'時'.$min.'分更新</span></li>';
}
?>
            </ul>
        </div>

        <div id="ytopContent05">
            <dl id="ytopContent05left">
                <dt><a href="http://dailynews.yahoo.co.jp/fc/domestic/">国内</a></dt>
                <dd>
                    <ul>
<?php
for ($i=0;$i<2;$i++){
        $result = $results["domestic"][$i];
    print '<li><a href="'.$result->{'Url'}.'">'.$result->{'Title'}.'</a></li>';
}
?>
                    </ul>
                </dd>
                <dt><a href="http://dailynews.yahoo.co.jp/fc/world/">海外</a></dt>
                <dd>
                    <ul>
<?php
for ($i=0;$i<2;$i++){
        $result = $results["world"][$i];
    print '<li><a href="'.$result->{'Url'}.'">'.$result->{'Title'}.'</a></li>';
}
?>
                    </ul>
                </dd>
                <dt><a href="http://dailynews.yahoo.co.jp/fc/computer/">コンピュータ</a></dt>
                <dd>
                    <ul>
<?php
for ($i=0;$i<2;$i++){
        $result = $results["computer"][$i];
    print '<li><a href="'.$result->{'Url'}.'">'.$result->{'Title'}.'</a></li>';
}
?>
                    </ul>
                </dd>
            </dl>
            <dl id="ytopContent05right">
                <dt><a href="http://dailynews.yahoo.co.jp/fc/science/">サイエンス</a></dt>
                <dd>
                    <ul>
<?php
for ($i=0;$i<2;$i++){
        $result = $results["science"][$i];
    print '<li><a href="'.$result->{'Url'}.'">'.$result->{'Title'}.'</a></li>';
}
?>
                    </ul>
                </dd>
                <dt><a href="http://dailynews.yahoo.co.jp/fc/local/">地域</a></dt>
                <dd>
                    <ul>
<?php
for ($i=0;$i<4;$i++){
        $result = $results["local"][$i];
    print '<li><a href="'.$result->{'Url'}.'">'.$result->{'Title'}.'</a></li>';
}
?>
                    </ul>
                </dd>
            </dl>
        </div>

    </div>
</div>
</div>
<script>
<!--
(function(){
var tabArr = ["ytopTab01","ytopTab02","ytopTab03","ytopTab04","ytopTab05"];
var contentArr = ["ytopContent01","ytopContent02","ytopContent03","ytopContent04","ytopContent05"];
var init = function(){
    for(var i = 0 ; i < tabArr.length ;i++ ){
        document.getElementById(tabArr[i]).onclick = clickHandler;
        document.getElementById(contentArr[i]).style.display = "none";
    }
    document.getElementById(tabArr[0]).className="on";
    document.getElementById(contentArr[0]).style.display = "block";
};
var clickHandler = function(e){
    if(window.event){obj = window.event.srcElement;}
    else{obj = e.target;}
    for(var i = 0 ; i < tabArr.length ;i++ ){
        document.getElementById(tabArr[i]).className="";
        document.getElementById(contentArr[i]).style.display = "none";
    }
    document.getElementById(obj.id).className="on";
    document.getElementById( "ytopContent" + obj.id.split("ytopTab")[1] ).style.display = "block";
    return false;
}
init();
})();
//-->
</script>

<!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
<a href="http://developer.yahoo.co.jp/about">
<img src="http://i.yimg.jp/images/yjdn/yjdn_attbtn2_105_17.gif" width="105" height="17" title="Webサービス by Yahoo! JAPAN" alt="Webサービス by Yahoo! JAPAN" border="0" style="margin:15px 15px 15px 15px"></a>
<!-- End Yahoo! JAPAN Web Services Attribution Snippet -->
</body>
