<?php
$xml = "add.xml";//ファイルを指定
$xmlData = simplexml_load_file($xml);//xmlを読み込む
?>
<ul>
<?php foreach ($xmlData->ADDRESS_value as $data) { ?>
    <li>
        <p>
            <?php echo $data; ?>
        </p>
    </li>
<?php } ?>
</ul>

