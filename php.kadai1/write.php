<!DOCTYPE html>
<?php
$name = $_POST['name'];
$birth = $_POST['birth'];
$sex = $_POST['sex'];
$from = $_POST['from'];
$food = $_POST['food'];
$hobby = $_POST['hobby'];
$img = $_POST['img'];
$appeal = $_POST['appeal'];
date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');

$file = fopen('data/data.txt', 'a');
fwrite($file, $time . $name . $birth . $sex . $from . $food . $hobby . "\n");
fclose($file);
?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>プロフィールシート</title>
</head>
<body>
    <div class="profile">
    <header>Your Profile</header>
    お名前：<?= $name ?>

    <br>
    生年月日：<?=$birth ?>
    <br>
    性別：<?=$sex ?>
    <br>
    出身：<?=$from ?>
    <br>
    好きな食べ物：<?=$food ?>
    <br>
    趣味：<?=$hobby ?>
    <br>
    自己アピール：<?=$appeal ?>
    </div>
    <input class="btn" type="button" value="このページを印刷" onclick="window.print();">
</body>
</html>