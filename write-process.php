<?php
// $host = 'kade0807.cafe24.com';
$host = 'localhost';
$user = 'kade0807';
$pw = 'dAegeun1!';
$dbName = 'kade0807';

$idx = $_POST['idx'];
$title = $_POST['title'];
$author = $_POST['author'];
$contents = $_POST['contents'];
$date = date("Y-m-d", time());

$conn = mysqli_connect($host, $user, $pw, $dbName);
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