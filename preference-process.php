<?php
require('lib/sql.php');

$idx = $_POST['idx'];
$userpw = $_POST['userpw'];
$username = $_POST['username'];
$usertell = $_POST['usertell'];
$usermail = $_POST['usermail'];

$sql = "update user set 
  userpass = '$userpw',
  username = '$username',
  usertell = '$usertell',
  useremail = '$usermail'
  where
  idx = '$idx'";

mysqli_query($conn, $sql);
?>

<script>
alert('변경이 완료 되었습니다.');
window.location.href = "index.php";
</script>