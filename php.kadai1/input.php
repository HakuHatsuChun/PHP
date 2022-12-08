<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>入力ホーム</title>
</head>
<body>
    <header>
        あなたのことを教えてください
        <br>
        ~プロフィール作成ページ~
    </header>
    <form action="write.php" method="post" class="form">
        <p>お名前：</p><input class="text" type="text" name="name">
        <p>生年月日：</p><input class="text"type="text" name="birth">
        <p>性別：</p><input class="text" type="text" name="sex">
        <p>出身：</p><input class="text" type="text" name="from">
        <p>好きな食べ物：</p><input class="text" type="text" name="food">
        <p>趣味：</p><input class="text" type="text" name="hobby">
        <p>自己アピール：</p><textarea class="appeal , m-form-textarea"  name="appeal"></textarea>
        <br>
        <input type="submit" value="送信" class="btn">


    </form>

</body>
</html>