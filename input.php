<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>新規登録</title>
</head>

<body>

<?php
session_start();

if(!empty($_POST)){
  //エラー項目の確認
  if($_POST['name'] == ''){
    $error['name'] = 'blank';
  }
  if(preg_match('/\A[a-zA-Z0-9_.?-]{1,16}\z/u', $_POST['name']) == 0){
    $error['name'] = 'chars';
  }
  
  if($_POST['pass'] == ''){
    $error['pass'] = 'blank';
  }
  if(strlen($_POST['pass']) < 8){
    $error['pass'] = 'length';
  }
 
  if(empty($error)){
    $_SESSION['join'] = $_POST;
    header('Location: check.php');
  }
}

if ($_REQUEST['action'] == 'rewrite'){
  $_POST = $_SESSION['join'];
  $error['rewrite'] = true;
}

?>

  <p>必要事項をご記入ください</p>
  <form action="" method="post" enctype="multipart/form-data">
<dl>
  <dt>ユーザー名 (英数字16文字以内)<font color="red">　必須</font></dt>
  <dd>
    <input type="text" name="name" size="35" maxlength="255" 
        value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?>">
    <?php if($error['name'] == 'blank'): ?>
    <p><font color="red">* ユーザー名を入力してください</font></p>
    <?php endif; ?>
    <?php if($error['name'] == 'chars'): ?>
    <p><font color="red">* ユーザー名を英数字で入力してください</font></p>
    <?php endif; ?>
  </dd>
  <dt>パスワード (8文字以上)<font color="red">　必須</font></dt>
  <dd>
    <input type="password" name="pass" size="10" maxlength="20" 
        value="<?php echo htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8'); ?>">
    <?php if($error['pass'] == 'blank'): ?>
    <p><font color="red">* パスワードを入力してください</font></p>
    <?php endif; ?>
    <?php if($error['pass'] == 'length'): ?>
    <p><font color="red">* パスワードは8文字以上で入力してください</font></p>
    <?php endif; ?>
  </dd>
</dl>
  <div><input type="submit" value="入力内容を確認"></div>
       <input type="hidden" name="token" 
              value="<?php echo htmlspecialchars(session_id(), ENT_QUOTES, 'UTF-8'); ?>">
  </form>
</body>
</html>
