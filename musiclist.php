<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>skill list</title>
</head>

<body>

<form action="music.php" method="post">

<?php

session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');

require('dbconnect.php');
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!isset($_SESSION['name'])){
	header('Location: login2.php');
	exit();
}

$sql = "SELECT id FROM users WHERE name = ?";
$sth = $dbh->prepare($sql);
$sth->bindParam(1, $_SESSION['name'], PDO::PARAM_STR);
if (!$sth->execute()) {
    die('クエリー1が失敗しました。');
}
$row = $sth->fetch(PDO::FETCH_ASSOC);
$id = $row['id'];

print('<p>');
print($_SESSION['name']);
print(さんのスキルリスト);
print('</p>');

require('dbconnect2.php');
$sql = "SELECT SUM(skillpoint) FROM skilllist WHERE id = ? ORDER BY skillpoint DESC LIMIT 20";
$sth = $dbh->prepare($sql);
$sth->bindParam(1, $id, PDO::PARAM_INT);
if (!$sth->execute()) {
    die('クエリーpoint1が失敗しました。');
}else{
	$row = $sth->fetch(PDO::FETCH_ASSOC);
	$new_skillpoint = $row['SUM(skillpoint)'];
}

require('dbconnect3.php');
$sql = "SELECT SUM(skillpoint) FROM skilllist WHERE id = ? ORDER BY skillpoint DESC LIMIT 30";
$sth = $dbh->prepare($sql);
$sth->bindParam(1, $id, PDO::PARAM_INT);
if (!$sth->execute()) {
    die('クエリーpoint1が失敗しました。');
}else{
	$row = $sth->fetch(PDO::FETCH_ASSOC);
	$old_skillpoint = $row['SUM(skillpoint)'];
}

print('<table border=1>');
print('<tr><th>NEW</th><th>OLD</th><th>TOTAL</th></tr>');
	printf('<tr>');
	printf('<td>'.'%.1f', $new_skillpoint.'</td>');
	printf('<td>'.'%.1f', $old_skillpoint.'</td>');
	printf('<td>'.'%.1f', $new_skillpoint+$old_skillpoint.'</td>');
	printf('</tr>');
print('</table><br>');	

require('dbconnect2.php');

//print '<input type="hidden" name="id" value="'.htmlspecialchars($_POST['id']).'" />';

$sql = "SELECT * FROM skilllist WHERE id = ? ORDER BY skillpoint DESC LIMIT 20";
$sth = $dbh->prepare($sql);
$sth->bindParam(1, $id, PDO::PARAM_INT);
if (!$sth->execute()) {
    die('クエリー2が失敗しました。');
}
$number = 0;
print("NEW");
print('<table border=1>');
print('<tr><th>No.</th><th>music</th><th>difficulty</th><th>skillrate</th><th>skillpoint</th><th>score</th><th>scorerate</th><th>max</th><th>comment</th></tr>');
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {

	$number++;

	printf('<tr>');
	printf('<td>'.$number.'</td>');
    printf('<td>'.$row['music'].'</td>');
    printf('<td>'.$row['difficulty'].'</td>');
	printf('<td>'.$row['skillrate'].'</td>');	
	printf('<td>'.'%.1f', $row['skillpoint'].'</td>');
	printf('<td>'.$row['score'].'</td>');
	printf('<td>'.'%.2f', $row['scorerate'].'</td>');
	printf('<td>'.'%.1f', $row['max'].'</td>');
	printf('<td>'.$row['comment'].'</td>');
	printf('</tr>');

	$sql2 = "UPDATE skilllist SET pid = ? WHERE id = ? AND music = ? AND difficulty = ?";
	$sth2 = $dbh->prepare($sql2);
	$sth2->bindParam(1, $number, PDO::PARAM_INT);
	$sth2->bindParam(2, $row['id'], PDO::PARAM_INT);
	$sth2->bindParam(3, $row['music'], PDO::PARAM_STR);
	$sth2->bindParam(4, $row['difficulty'], PDO::PARAM_STR);
	if (!$sth2->execute()) {
    die('データ送信に失敗しました。');
	}

}
print('</table><br>');

require('dbconnect3.php');

$sql = "SELECT * FROM skilllist WHERE id = ? ORDER BY skillpoint DESC LIMIT 30";
$sth = $dbh->prepare($sql);
$sth->bindParam(1, $id, PDO::PARAM_INT);
if (!$sth->execute()) {
    die('クエリー3が失敗しました。');
}
$number = 1;
print("OLD");
print('<table border=1>');
print('<tr><th>No.</th><th>music</th><th>difficulty</th><th>skillrate</th><th>skillpoint</th><th>score</th><th>scorerate</th><th>max</th><th>comment</th></tr>');
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
	printf('<tr>');
	printf('<td>'.$number.'</td>');
    printf('<td>'.$row['music'].'</td>');
    printf('<td>'.$row['difficulty'].'</td>');
	printf('<td>'.$row['skillrate'].'</td>');
	printf('<td>'.'%.1f', $row['skillpoint'].'</td>');
	printf('<td>'.$row['score'].'</td>');
	printf('<td>'.'%.2f', $row['scorerate'].'</td>');
	printf('<td>'.'%.1f', $row['max'].'</td>');
	printf('<td>'.$row['comment'].'</td>');
	printf('</tr>');

	$sql2 = "UPDATE skilllist SET pid = ? WHERE id = ? AND music = ? AND difficulty = ?";
	$sth2 = $dbh->prepare($sql2);
	$sth2->bindParam(1, $number, PDO::PARAM_INT);
	$sth2->bindParam(2, $row['id'], PDO::PARAM_INT);
	$sth2->bindParam(3, $row['music'], PDO::PARAM_STR);
	$sth2->bindParam(4, $row['difficulty'], PDO::PARAM_STR);
	if (!$sth2->execute()) {
    die('データ送信に失敗しました。');
	}

	$number++;
	
}
print('</table>');
$close_flag = mysqli_close($link);

if ($close_flag){
    print('<p>切断に成功しました。</p>');
}
?>

<input type="submit" value="スキル登録">
<input type="hidden" name="token" 
       value="<?php echo htmlspecialchars($_SESSION['token'], ENT_QUOTES, 'UTF-8'); ?>">
</form>

<p>&raquo;<a href="login2.php">ログインに戻る</a></p>

</body>
</html>
