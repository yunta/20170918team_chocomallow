<?php 

    session_start();

    if (empty($_POST)) {
      echo 'データを入力してください。';
      header('Location: index.php');
    exit();
    }

 

  $name = htmlspecialchars($_POST['name']);
  $nickname = htmlspecialchars($_POST['nickname']);
  $email = htmlspecialchars($_POST['email']);
  $facebook = htmlspecialchars($_POST['facebook']);
  $twitter = htmlspecialchars($_POST['twitter']);
  $instagram = htmlspecialchars($_POST['instagram']);
  $birthday = htmlspecialchars($_POST['birthday']);
  $hobby = htmlspecialchars($_POST['hobby']);
  $admission = htmlspecialchars($_POST['admission']);
  $term = htmlspecialchars($_POST['term']);
  $course = htmlspecialchars($_POST['course']);
  $introduction = htmlspecialchars($_POST['introduction']);
  $password = htmlspecialchars($_POST['password']);
  $profile_image= htmlspecialchars($_POST['profile_image']);



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
    Facebook :<?php echo $_SESSION['user_info']['facebook']; ?><br>
    twitter : <?php echo $_SESSION['user_info']['twitter']; ?> <br>
    instagram :<?php echo $_SESSION['user_info']['instagram']; ?><br>
    誕生日 : <?php echo $_SESSION['user_info']['birthday']; ?> <br>
    趣味 :<?php echo $_SESSION['user_info']['hobby']; ?><br>
    入学日 : <?php echo $_SESSION['user_info']['admission']; ?> <br>
    留学期間:<?php echo $_SESSION['user_info']['term']; ?><br>
    コース : <?php echo $_SESSION['user_info']['course']; ?> <br>
    自己紹介 :<?php echo $_SESSION['user_info']['introduction']; ?><br>
    パスワード : ●●●●●●●●<br>
    <img src="../profile_image/<?php echo $_SESSION['user_info']['profile_image']; ?>" width="150">

  </div>
  <br>
  <form method="POST" action="top.php">
    <input type="submit" value="ユーザー登録">
  </form>
  <br>
  <input type="button" value="戻る" onclick="history.back()">

</body>
</html>