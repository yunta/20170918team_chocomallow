<?php 
	$email = array();
	$password = array();
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>登録確認画面</title>
</head>
<body>
	<form method="POST" action=".php">
		<input type="button" value="戻る" onclick="history.back()">
	</form>


	<form method="POST" action="top.php">

	<!-- <?php if ($email != '' && $password != ''): ?>
 -->
		<input type="hidden" name="email" value="<?php echo $email;?>">
		<input type="hidden" name="password" value="<?php echo $passeord;?>">

		<input type="submit" value="送信">
	<!-- <?php endif;?> -->

	</form>



</body>
</html>