<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>skilllistデータベースへのアクセス</title>
</head>

<body>
<?php
	try{
    $dbh = new PDO('mysql:host=localhost;dbname=skilllist;charset=utf8', 'next', 'nextpass');
	}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
	}
?>
</body>
</html>