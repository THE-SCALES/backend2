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
mysqli_set_charset($db, 'utf8');
session_start();

$result = mysqli_query($db, 'SELECT * FROM musiclist');
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}

printf('<p>NEW</p>');
printf('<select name = "target">');
while ($row = mysqli_fetch_assoc($result)) {
	if($row['version'] == "NEW"){
		printf("<option>%s</option>\n",$row["music"]);
	}
}
printf('</select>');

$result = mysqli_query($db, 'SELECT * FROM musiclist');
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error());
}
printf('<p>OLD</p>');
printf('<select name = "target2">');
while ($row = mysqli_fetch_assoc($result)) {
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
  <input type="radio" name="dversion" value="NEW">NEW
  <input type="radio" name="dversion" value="OLD">OLD<br>
  
  <input type="radio" name="dif" value="BASIC">BASIC
  <input type="radio" name="dif" value="MEDIUM">MEDIUM
  <input type="radio" name="dif" value="HARD">HARD
  <input type="radio" name="dif" value="SPECIAL">SPECIAL<br>  
  <p>
  SCORE
  <input type="number" name="score" size="10" value="" min="0" max="9999"/>
  </p>
  <p>
  COMMENT(40文字以内）
  <input type="text" name="comment" size="40" maxlength="40"/>
  </p>
  <input type="submit" value="登録する" /><br>
  <input type="reset" value="削除する" />　

</body>
</html>