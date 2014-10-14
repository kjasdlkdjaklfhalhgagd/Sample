<?php

//sqlite3に接続してみる

$dir_pass = './test.db';
$dsn = 'sqlite:' . $dir_pass;
$user = '';
$password = '';

try{
    $dbh = new PDO($dsn, $user, $password);
    if ($dbh == null){
        print('接続に失敗しました。<br>');
    }else{
        print('接続に成功しました。<br>');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}


 $dbh->query('SET NAMES utf8');

    print('追加前のデータ一覧：<br>');

    $sql = 'select * from test';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        print($result['question']);
    }


$sql = 'insert into test (question) values (:question, $question)';
	$question = "問題";
    $stmt = $dbh->prepare($sql);
    $flag = $stmt->execute();

    if ($flag){
        print('データの追加に成功しました<br>');
    }else{
        print('データの追加に失敗しました<br>');
    }

    print('追加後のデータ一覧：<br>');

    $sql = 'select * from test';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        print($result['question']);
    }