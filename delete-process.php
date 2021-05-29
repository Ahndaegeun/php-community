<?php
require('lib/sql.php');

session_start();

if($_SESSION['userid'] !== $_POST['userid']) {
  echo '<script>alert("작성자 가져와"); location.href="index.php"</script>';
}

$idx = $_POST['idx'];

$sql = "delete from contents where idx='$idx'";

mysqli_query($conn, $sql);
?>

<script>
alert('삭제ㅇㅇ');
location.href = 'index.php'
</script>