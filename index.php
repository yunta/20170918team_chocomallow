<?php 

	$email = '';
	$password = '';

	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";

	if(!empty($_POST)){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$errors = array();

		if($email == ''){
			$errors['email'] = 'blank';
		}

		if($password == ''){
			$errors['password'] = 'blank';
		}elseif (strlen($password) < 4 ){
			$errors['password'] = 'length';
		}

		// if (empty($errors)) {
	
		// 	echo 'エラーがありませんでした。Congratulation!確認画面へ移動します。';
		// }

	}
 ?>



<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Batch ログイン画面</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>

<!-- 新規登録 -->
<form method="POST" action="" enctype="multipart/form-data">
	<label >新規登録</label><br>
	<input type="submit" value="登録する">
	<br><br></form>

<!-- ログイン -->
<form method="POST" action="top.php" enctype="multipart/form-data">
	<label >ログイン</label><br>
	<input type="email" name="email" placeholder="メールアドレスを入力" value="<?php echo $email; ?>">
	<br>

	<?php if (isset($errors['email'])){ ?>
 		<div class="alert alert-danger">
		メールアドレスを入力してください。
		</div>
	<?php } ?>

		<input type="password" name="password" placeholder="パスワードを入力" value="<?php echo $password; ?>">
	<br> 


	<?php if (isset($errors['password']) && $errors['password'] == 'blank'){ ?>
 		<div class="alert alert-danger">
		 パスワード入力してください。
		</div>
	<?php }elseif(isset($errors['password']) && $errors['password'] == 'length'){ ?>
		<div class="alert alert-danger">
		パスワードは４文字以上入力してください。
		</div>
	<?php } ?>

	<input type="submit" value="ログイン">





</form>


</body>
</html>