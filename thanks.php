<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登録終了</title>
</head>

<body>
<?php
session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');

?>
  <p>ユーザー登録が完了しました</p>
  <p><a href="login2.php">ログインする</a></p>
</body>	
</html>
