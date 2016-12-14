
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登録終了</title>
</head>

<body>
<?php
require('dbconnect.php');
mysqli_set_charset($db, 'utf8');
$result = mysqli_query($db, "SELECT id FROM users ORDER BY id DESC");
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}
$row = mysqli_fetch_assoc($result);
?>
  <p>ユーザー登録が完了しました</p>
  <p>あなたのIDは <font color="red"><b><?php print($row['id']); ?></b></font> です</p>
  <p><a href="login.php">ログインする</a></p>
</body>	
</html>