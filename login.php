<?php


session_start();

if(isset($_SESSION['userid'])) {
  // header('Location: php-com/index.php');
  echo "<script>alert('로그인되어있음'); location.href='index.php'</script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form name="frm" action="login-process.php" method="POST">
    아이디 <input type="text" name="userid"><br>
    비밀번호 <input type="password" name="userpass"><br>
    <button type="button" onClick="login()">로그인</button>
  </form>
</body>

<script>
  function login() {
    frm.submit();
  }
</script>

</html>