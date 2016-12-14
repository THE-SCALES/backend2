<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登録確認</title>
</head>

<body>

<?php
session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');

if($_POST['token'] != session_id()){
	http_response_code(403);
}

require('dbconnect.php');
mysqli_set_charset($db, 'utf8');

if(!isset($_SESSION['join'])){
	header('Location: input.php');
	exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST)){
	//登録処理をする
	$sql = sprintf('INSERT INTO users SET name="%s", pass="%s"',
		mysqli_real_escape_string($db, $_SESSION['join']['name']),
		mysqli_real_escape_string($db, sha1($_SESSION['join']['pass']))
	);
	mysqli_query($db, $sql) or die(mysqli_error($db));
	unset($_SESSION['join']);

	header('Location: thanks.php');
	exit();
}
}
?>
  <form action="" method="post">
<dl>
  <dt>ユーザー名</dt>
  <dd>
    <?php echo htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
  <dt>パスワード</dt>
  <dd>
    【表示されません】
  </dd>
</dl>
  <div><a href="input.php?action=rewrite">&laquo;&nbsp;書き直す</a>
  <input type="submit" value="登録する"></div>
  </form>
</body>
</html>
