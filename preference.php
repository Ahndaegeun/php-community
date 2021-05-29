<?php
require('lib/sql.php');


session_start();

$query = "select * from user where userid = '".$_SESSION['userid']."'";
$res = mysqli_query($conn, $query);
$set = mysqli_fetch_assoc($res);


if(!(isset($_SESSION['userid']))) {
  echo "<script>alert('로그인 해주세요'); location.href='index.php'</script>";
} else if ($_SESSION['userid'] !== $set['userid']) {
  // echo "<script>alert('님 뭐임?'); location.href='index.php'</script>";
  echo $_SESSION['userid'];
  echo $set['userid'];
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
  <form class="frm" name="frm" action="preference-process.php" method="post">
    <input type="hidden" name="idx" value="<?= $set['idx']?>">
    <input name="userid" type="text" value="<?= $set['userid']?>" disabled>
    <input name="userpw" type="password" value="<?= $set['userpass']?>">
    <input name="username" type="text" value="<?= $set['username']?>">
    <input name="usertell" type="tel" value="<?= $set['usertell']?>">
    <input name="usermail" type="email" value="<?= $set['useremail']?>">
    <button type="button" onClick=sumit()>제출</button>
  </form>
  <form class='secession-frm' name="secession" action="sece-process.php" method="post">
    <input type="hidden" name='idx' value="<?= $set['idx']?>">
    <button type="button" onClick=sece()>탈퇴</button>
  </form>

<script>
function sumit() {
  const res = confirm('변경?')
  
  if(res) {
    document.querySelector('.frm').submit();
  }
}

function sece() {
  const res = confirm('탈퇴?')
  
  if(res) {
    document.querySelector('.secession-frm').submit();
  }
}
</script>
</body>
</html>