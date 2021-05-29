<?php

require('lib/sql.php');
session_start();

$idx = $_POST['idx'];
$title = $_POST['title'];
$author = $_SESSION['userid'];
$contents = $_POST['contents'];
$date = date("Y-m-d", time());

$query = "insert into contents (
  idx,
  title,
  contents,
  date,
  author
) values (
  '$idx',
  '$title',
  '$contents',
  '$date',
  '$author'
)";
$result = mysqli_query($conn, $query);
?>

<script>
alert('작성이 완료 되었습니다.');
window.location.href = "index.php";
</script>