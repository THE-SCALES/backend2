<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>musiclistへのアクセス</title>
</head>

<body>
<?php
	try{
    $dbh = new PDO('mysql:host=localhost;dbname=musiclist;charset=utf8', 'next', 'nextpass');
	}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
	}
?>
</body>
</html>