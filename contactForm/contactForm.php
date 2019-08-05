<?php

var_dump($_POST);

//変数の初期化
$name = "";
$mail = "";
$title = "";
$message = "";

$err_msg_name ="";
$err_msg_mail = "";
$err_msg_message = "";

//入力チェックと変数定義、空白であればそれを空で定義
if(isset($_POST['name'])){
    $name = $_POST['name'];
}
if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
}
if(isset($_POST['message'])){
    $message = $_POST['message'];
}



//送信された場合にのみ判定と処理
if(isset($_POST['send']) ){
    if($name === ""){
        $err_msg_name = "名前を入力してください";
    }

    if($mail === ""){
        $err_msg_mail = "メールアドレスを入力してください";
    }

    if($message === ""){
        $err_msg_message = "本文を入力してください";
    }


    if($err_msg_name ==="" && $err_msg_mail ==="" && $err_msg_message === ""){
        echo "<br>【正しく入力されました】<br>".
              "名前：.$name.<br>".
              "メールアドレス：.$mail.<br>".
              "件名：.$title.<br>".
              "本文：.$message.<br>".
              "<a href="."contactForm.php".">戻る"."</a>";
        exit;
    }
}

?>


<html>
	<head>
	<meta http-equiv="Convent-Type"content="text/html;charset=UTF-8">
	<title></title>
	</head>
	<body>
	<form action="contactForm.php" method="POST">
	名前(必須)<br>
	<input type="text" name="name" value=""><br>
	<?= $err_msg_name ?><br>

	メールアドレス(必須)<br>
	<input type="text" name="mail" value=""><br>
	<?= $err_msg_mail ?><br>

	件名(任意)<br>
	<input type="text" name="title" value=""><br><br>

	メッセージ本文(必須)<br>
	<textarea name="message" cols="50" rows="10"></textarea><br>
	<?= $err_msg_message ?>
	<br>

	<input type="submit" name="send" value="送信">


	</form>

	</body>
</html>