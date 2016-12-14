<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search_music</title>
</head>

<body>


<form action="regist.php" method="post">

<?php

require('dbconnect4.php');
session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');

$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$token = $_SESSION['token'];

$sql = "SELECT * FROM musiclist ORDER BY name";
$sth = $dbh->prepare($sql);
if (!$sth->execute()) {
    die('クエリー1が失敗しました。');
}

printf('<p>NEW</p>');
printf('<select name = "target">');
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
	if($row['version'] == "NEW"){
		printf("<option>%s</option>\n",$row["music"]);
	}
}
printf('</select>');

$sql = "SELECT * FROM musiclist ORDER BY name";
$sth = $dbh->prepare($sql);
if (!$sth->execute()) {
    die('クエリー2が失敗しました。');
}
printf('<p>OLD</p>');
printf('<select name = "target2">');
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
	if($row['version'] == "OLD"){
    	printf("<option>%s</option>\n",$row["music"]);
	}
}
printf('</select>');
mysqli_close($db);
printf('<br>');

?>
<?php
print '<input type="hidden" name="id" value="'.htmlspecialchars($_POST['id']).'" />';
?>
  <input type="radio" name="dversion" value="NEW" checked="checked">NEW
  <input type="radio" name="dversion" value="OLD">OLD<br>
  
  <input type="radio" name="dif" value="BASIC" checked="checked">BASIC
  <input type="radio" name="dif" value="MEDIUM">MEDIUM
  <input type="radio" name="dif" value="HARD">HARD
  <input type="radio" name="dif" value="W-HARD">WHITE HARD<br>  
  <p>
  SCORE
  <input type="number" name="score" size="10" value="0" min="0" max="8000"/>
  </p>
  <input type="radio" name="tv_combo" value="FC" checked="checked">FULL COMBO
  <input type="radio" name="tv_combo" value="MISS">MISSあり<br>
  <p>
  MAX COMBO
  <input type="number" name="max_combo" size="10" value="0" min="0" max="2000"/>
  </p>  
  <p>
  COMMENT(40文字以内）
  <input type="text" name="comment" size="40" maxlength="40"/>
  </p>
  <input type="submit" value="登録する" /><br>
  <input type="hidden" name="token" 
         value="<?php echo htmlspecialchars($token, ENT_QUOTES, 'UTF-8'); ?>"> 
  <input type="reset" value="削除する" />　

</body>
</html>
