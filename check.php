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
	$sql = "INSERT INTO users SET name=? , pass=?";
	$sth = $dbh->prepare($sql);
	$sth->bindParam(1, $_SESSION['join']['name'], PDO::PARAM_STR);
	$sth->bindParam(2, sha1($_SESSION['join']['pass']), PDO::PARAM_STR);
	
	if (!$sth->execute()) {
    	die('クエリーpoint1が失敗しました。');
	}

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
