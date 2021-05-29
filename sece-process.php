<?php
require('lib/sql.php');

session_start();
$idx = $_POST['idx'];

$query = "update user set delstatus = 0 where idx = $idx";

$res = mysqli_query($conn, $query);

if (isset($_SESSION['userid'])) {
  unset($_SESSION['userid']);
}
?>

<script>
alert('탈퇴가 완료 되었습니다.');
window.location.href = "index.php";
</script>