<?php 

    session_start();

    // if (empty($_POST)) {
    //   echo 'データを入力してください。';
    //   header('Location: index.php');
    // exit();
    // }

 

  $name = htmlspecialchars($_POST['name']);
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $admission = htmlspecialchars($_POST['admission']);
  $graduation = htmlspecialchars($_POST['graduation']);
  $course = htmlspecialchars($_POST['course']);
  $password = htmlspecialchars($_POST['password']);



 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div>
    下記の情報で登録してもよろしいでしょうか。<br>
    <br>
    ユーザー名 : <?php echo $_SESSION['user_info']['username']; ?> <br>
    ニックネーム :<?php echo $_SESSION['user_info']['nickname']; ?><br>
    メールアドレス : <?php echo $_SESSION['user_info']['email']; ?> <br>
    入学日 : <?php echo $_SESSION['user_info']['admission']; ?> <br>
    卒業日:<?php echo $_SESSION['user_info']['graduation']; ?><br>
    コース : <?php echo $_SESSION['user_info']['course']; ?> <br>
    パスワード :<?php echo $_SESSION['user_info']['password']; ?> <br>


  </div>
  <br>
  <form method="POST" action="top.php">
    <input type="submit" value="ユーザー登録">
  </form>
  <br>
  <input type="button" value="戻る" onclick="history.back()">

</body>
</html>