<?php
require('lib/sql.php');

$idx = $_POST['idx'];
$userid = $_POST['userid'];
$userpw = $_POST['userpw'];
$pwchek = $_POST['pwchek'];
$username = $_POST['username'];
$usertell = $_POST['usertell'];
$usermail = $_POST['usermail'];

$sql = "insert into user values (
  '$idx',
  '$userid',
  '$userpw',
  '$username',
  '$usertell',
  '$usermail'
)";

mysqli_query($conn, $sql);
?>

<script>
alert('가입이 완료 되었습니다.');
window.location.href = "index.php";
</script>