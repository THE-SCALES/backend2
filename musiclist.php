<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>skill list</title>
</head>

<body>

<form action="music.php" method="post">

<?php

require('dbconnect.php');
mysqli_set_charset($db, 'utf8');
$result = mysqli_query($db, "SELECT name FROM users WHERE id='".$_POST['id']."'");
if (!$result) {
    die('クエリー1が失敗しました。'.mysqli_error());
}
$row = mysqli_fetch_assoc($result);
print('<p>');
print($row['name']);
print(さんのスキルリスト);
print('</p>');

require('dbconnect2.php');
mysqli_set_charset($db, 'utf8');

$id = $_POST['id'];
print '<input type="hidden" name="id" value="'.htmlspecialchars($_POST['id']).'" />';

$result = mysqli_query($db, "SELECT * FROM skilllist WHERE id='".$id."' ORDER BY skillpoint DESC LIMIT 50");
if (!$result) {
    die('クエリー2が失敗しました。'.mysqli_error());
}
print("NEW");
print('<table border=1>');
print('<tr><th>music</th><th>difficulty</th><th>skillrate</th><th>skillpoint</th><th>score</th><th>scorerate</th><th>max</th><th>comment</th></tr>');
while ($row = mysqli_fetch_assoc($result)) {
	print('<tr>');
    print('<td>'.$row['music'].'</td>');
    print('<td>'.$row['difficulty'].'</td>');
	print('<td>'.$row['skillrate'].'</td>');
	print('<td>'.$row['skillpoint'].'</td>');
	print('<td>'.$row['score'].'</td>');
	print('<td>'.$row['scorerate'].'</td>');
	print('<td>'.$row['max'].'</td>');
	print('<td>'.$row['comment'].'</td>');
	print('</tr>');
}
print('</table><br>');

require('dbconnect3.php');
mysqli_set_charset($db, 'utf8');
$result = mysqli_query($db, "SELECT * FROM skilllist WHERE id='".$id."' ORDER BY skillpoint DESC LIMIT 50");
if (!$result) {
    die('クエリー3が失敗しました。'.mysqli_error());
}
print("OLD");
print('<table border=1>');
print('<tr><th>music</th><th>difficulty</th><th>skillrate</th><th>skillpoint</th><th>score</th><th>scorerate</th><th>max</th><th>comment</th></tr>');
while ($row = mysqli_fetch_assoc($result)) {
	print('<tr>');
    print('<td>'.$row['music'].'</td>');
    print('<td>'.$row['difficulty'].'</td>');
	print('<td>'.$row['skillrate'].'</td>');
	print('<td>'.$row['skillpoint'].'</td>');
	print('<td>'.$row['score'].'</td>');
	print('<td>'.$row['scorerate'].'</td>');
	print('<td>'.$row['max'].'</td>');
	print('<td>'.$row['comment'].'</td>');
	print('</tr>');
}
print('</table>');
$close_flag = mysqli_close($link);

if ($close_flag){
    print('<p>切断に成功しました。</p>');
}

?>

<input type="submit" value="スキル登録">
</form>

<p>他のプレイヤーからのコメント</p>
//鋭意制作中

<p>&raquo;<a href="login.php">ログインに戻る</a></p>
</body>
</html>