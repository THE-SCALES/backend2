<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>regist form</title>
</head>

<body>
<?php
require('dbconnect4.php');
mysqli_set_charset($db, 'utf8');

session_start();

$id = $_POST['id'];
$version = $_REQUEST['dversion'];
if($version == "NEW"){
$target = $_REQUEST['target'];
}else if($version == "OLD"){
$target = $_REQUEST['target2'];
}
$difficulty = $_REQUEST['dif'];
$score = $_REQUEST['score'];
$comment = $_REQUEST['comment'];

$result = mysqli_query($db, 'SELECT * FROM musiclist');
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}

while ($row = mysqli_fetch_assoc($result)) {
	if($row['music'] == $target && $row['version'] == $version){
		$music = $row['music'];
    	switch($difficulty){
			case "BASIC":
			$point = $row['basr'] * 100 * ($score / $row['batv']);
			$sr = $row['basr'];
			$scr = $score / $row['batv'] * 100;
			$max = $row['basr'] * 100 - $point;
			break;
			case "MEDIUM":
			$point = $row['mesr'] * 100 * ($score / $row['metv']);
			$sr = $row['mesr'];
			$scr = $score / $row['metv'] * 100;
			$max = $row['mesr'] * 100 - $point;			
			break;
			case "HARD":
			$point = $row['hasr'] * 100 * ($score / $row['hatv']);
			$sr = $row['hasr'];
			$scr = $score / $row['hatv'] * 100;
			$max = $row['hasr'] * 100 - $point;			
			break;
			case "SPECIAL":
			$point = $row['spsr'] * 100 * ($score / $row['sptv']);
			$sr = $row['spsr'];
			$scr = $score / $row['sptv'] * 100;
			$max = $row['spsr'] * 100 - $point;			
			break;
		}
	}
}
$point = round($point,1);
$scr = round($scr,2);
$max = round($max,1);

if($version == "NEW"){
require('dbconnect2.php');
mysqli_set_charset($db, 'utf8');
}else if($version == "OLD"){
require('dbconnect3.php');
mysqli_set_charset($db, 'utf8');
}

printf($id);
printf($music);
printf($comment);
$result = mysqli_query($db, "INSERT INTO skilllist(id, music, difficulty, skillrate, skillpoint, score, scorerate, max, comment) VALUES('$id', '$music', '$difficulty', '$sr', '$point', '$score', '$scr', '$max', '$comment')");
if (!$result) {
    die('データ送信に失敗しました。'.mysqli_error());
}
?>
<form action="musiclist.php" method="post">
<?php
print '<input type="hidden" name="id" value="'.htmlspecialchars($_POST['id']).'" />';
?>
<input type="submit" value="スキルリストへ戻る" /><br>

</body>
</html>