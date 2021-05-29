<?php
require('lib/sql.php');


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
  <title>signup</title>
</head>
<body>
  <form class="frm" name="frm" action="signup-process.php" method="post">
    <input type="hidden" name="idx">
    <input name="userid" type="text" placeholder="ID">
    <input name="userpw" type="password" placeholder="PW">
    <input name="pwchek" type="password" placeholder="PWCheck">
    <input name="username" type="text" placeholder="Name">
    <input name="usertell" type="tel" placeholder="Phone">
    <input name="usermail" type="email" placeholder="E-Mail">
    <button type="button" onClick=sumit()>제출</button>
  </form>

<script>
function sumit() {
  const res = confirm('제출하실?')
  
  if(res) {
    document.querySelector('.frm').submit();
  }
}
</script>
</body>
</html>