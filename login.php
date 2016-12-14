<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ログイン</title>
</head>

<body>

<?php
require('dbconnect.php');
mysqli_set_charset($db, 'utf8');
session_start();

if(!empty($_POST)){
  //ログインの処理
  if($_POST['id'] != '' && $_POST['name'] != '' && $_POST['pass'] != ''){
    $sql = sprintf('SELECT * FROM users WHERE id="%s" name="%s" AND pass="%s"',
	  mysqli_real_escape_string($db, $_POST['id']),
      mysqli_real_escape_string($db, $_POST['name']),
      mysqli_real_escape_string($db, sha1($_POST['pass']))
    );
    $record = mysqli_query($db, $sql) or die(mysqli_error($db));
    if($table = mysqli_fetch_assoc($record)){
      //ログイン成功
      header('Location: musiclist.php?id=%s', $_POST['id']);
      exit();
    }else{
      $error['login'] = 'failed';
    }
  }else{
    $error['login'] = 'blank';
  }
}
?>

  	<p>ID,ユーザー名,パスワードを記入してログインしてください。</p>
  	<p>アカウント作成がまだの方はこちらからどうぞ。</p>
  	<p>&raquo;<a href="input.php">アカウント作成をする</a></p>
  	<form action="musiclist.php" method="post">
		<dl>
        <dt>ID</dt>
        <dd>
        	<input type="number" name="id" size="35" maxlength="10"
            value="<?php echo htmlspecialchars($_POST['id']); ?>">    
		</dd>
		<dt>ユーザー名</dt>
		<dd>
			<input type="text" name="mail" size="35" maxlength="255"
			value="<?php echo htmlspecialchars($_POST['name']); ?>">         
			<?php if($error['login'] == 'blank'): ?>
			<p><font color="red">* ID,ユーザー名とパスワードをご記入ください</font></p>
			<?php endif; ?>
			<?php if($error['login'] == 'failed'): ?>
			<p><font color="red">* ログインに失敗しました。正しくご記入ください。</font></p>
			<?php endif; ?>
		</dd>
		<dt>パスワード</dt>
		<dd>
			<input type="password" name="pass" size="35" maxlength="255"
					value="<?php echo htmlspecialchars($_POST['pass']); ?>">
		</dd>
		</dl>
  		<input type="submit" value="ログインする">
  	</form>
</body>
</html>