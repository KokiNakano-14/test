<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson02; host=localhost;","root","nako14");

$pdo -> exec("insert into diworks_keijiban(handlename,title,comments) values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

// リダイレクト
header("Location:http://localhost/diworks_keijiban/index.php");


?>