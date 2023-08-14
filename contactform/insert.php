<?php
mb_internal_encoding("utf8");
//"mysql:dbname = lesson02; host = localhost;","root","nako14"
//上記の様に"="の前後に半角スペースが入っていると上手くデータベースに接続出来ない
$pdo = new PDO("mysql:dbname=lesson02; host=localhost;","root","nako14");/*パスワード nako14*/


//DBへ情報を送る「'」「"」「.」$_POST['箱の名前']「.」「"」「'」,
// 複数情報を送る際はカンマ区切りにする
$pdo -> exec("insert into contactform(name,mail,age,comments) values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>


<!doctype HTML>

<html lang = "ja">

<head>
<meta charset="utf-8">
  <title>お問い合わせフォームを作る</title>

  <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
  
  <h1>お問い合わせフォーム</h1>

  <div class="confirm">
    <p>お問い合わせ有難うございました。
      <br>3営業日以内に担当者よりご連絡差し上げます。
    </p>
    
  </div>

</body>
</html>