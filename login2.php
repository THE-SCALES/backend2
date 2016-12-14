<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ログイン</title>
</head>

<body>

<?php
require('dbconnect.php');
//mysqli_set_charset($db, 'utf8');
session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');

$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!empty($_POST)){
  //ログインの処理
  if($_POST['token'] == session_id()){
  	if($_POST['user'] != '' && $_POST['pass'] != ''){
    	$sql = "SELECT * FROM users WHERE name = ? AND pass= ?";
		$sth = $dbh->prepare($sql);
		$sth->bindParam(1, $_POST['user'], PDO::PARAM_STR);
		$sth->bindParam(2, sha1($_POST['pass']), PDO::PARAM_STR);
		$sth->execute();
    	if($table = $sth->fetch(PDO::FETCH_ASSOC)){
      	//ログイン成功
	  	$_SESSION['name'] = $_POST['user'];
		session_regenerate_id(true);
	  	$_SESSION['id'] = $table['id'];
		$_SESSION['token'] = $_POST['token'];
      	header('Location: musiclist.php');
      	exit();
    	}else{
      	$error['login'] = 'failed';
    	}
	}else{
		http_response_code(403);
	}
  }else{
    $error['login'] = 'blank';
  }
}
?>
  	<p>ユーザー名,パスワードを記入してログインしてください。</p>
  	<p>アカウント作成がまだの方はこちらからどうぞ。</p>
  	<p>&raquo;<a href="input.php">アカウント作成をする</a></p>
  	<form action="" method="post" enctype="multipart/form-data">
		<dl>
		<dt>ユーザー名</dt>
		<dd>
			<input type="text" name="user" size="35" maxlength="255"
			value="<?php echo htmlspecialchars($_POST['user']); ?>">         
			<?php if($error['login'] == 'blank'): ?>
			<p><font color="red">* ユーザー名とパスワードをご記入ください</font></p>
			<?php endif; ?>
			<?php if($error['login'] == 'failed'): ?>
			<p><font color="red">* ログインに失敗しました。正しくご記入ください。</font></p>
			<?php endif; ?>
		</dd>
		<dt>パスワード</dt>
		<dd>
			<input type="password" name="pass" size="35" maxlength="255"
			value="<?php echo htmlspecialchars($_POST['pass']); ?>">
            <input type="hidden" name="token" 
            value="<?php echo htmlspecialchars(session_id(), ENT_QUOTES, 'UTF-8'); ?>">
		</dd>
		</dl>
  		<input type="submit" value="ログインする">
  	</form>
</body>
</html>
