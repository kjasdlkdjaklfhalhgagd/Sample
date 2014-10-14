<?php
session_start();

//ソウルイーターノット簡単クイズゲーム

function h($s){
	return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

//$quizlist[][q と a][]
$quizlist =
	array(
		array(
			'q' =>'左は誰?',
			'a' =>array('多々音 めめ', '春鳥 つぐみ', 'アーニャ・ヘプバーン')
		),
		array(
			'q' =>'右は誰?',
			'a' =>array('アーニャ・ヘプバーン', '多々音 めめ','春鳥 つぐみ')
		),
		array(
			'q' =>'真ん中は誰?',
			'a' =>array('多々音 めめ', '春鳥 つぐみ', 'アーニャ・ヘプバーン')
		);
	);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	if($_POST['answer'] === $quizlist[$_POST['qnum']]['a'][0]){
		echo "正解";
		exit;
	}
}

//var_dump($quizlist);

$qnum = mt_rand(0, count($quizlist) - 1);
$quiz = $quizlist[$qnum];

$_SESSION['qnum'] = (string)$qnum;

shuffle($quiz['a']);

?>

<title>簡単クイズゲーム</title>
<img src="./sample.jpg">

<p>Q.<?php echo h($quiz['q']); ?></p>
<?php foreach ($quiz['a'] as $answer) : ?>
	<form action="" method="post">
		<input type="submit" name="answer" value="<?php echo h($answer); ?>"
		<input type="hidden" name="qnum" value="<?php echo h($_SESSION['qnum']); ?>"
	</form>
	<?php endforeach; ?>