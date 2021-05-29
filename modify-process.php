<?php
require('lib/sql.php');

$idx = $_POST['idx'];
$title = $_POST['title'];
$author = $_POST['author'];
$contents = $_POST['contents'];


$sql = "update contents set title = '$title', contents = '$contents', author = '$author' where idx= $idx";

$result = mysqli_query($conn, $sql);
?>

<script>
alert('수정이 완료 되었습니다.');
window.location.href = "index.php";
</script>