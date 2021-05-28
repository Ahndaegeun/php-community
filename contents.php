<?php
require('lib/sql.php');

$pageNum = $_GET['id'];
$query = "select * from contents where idx='$pageNum'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/contents.css">
</head>
<body>
  <ul class="contents-container">
    <li>Title : <?=$row['title'] ?></li>
    <li>Contents : <?=$row['contents'] ?></li>
    <li>Date <?=$row['date'] ?></li>
    <li>Author <?=$row['author'] ?></li>
  </ul>
  <a href="modify.php?id=<?=$row['idx']?>">수정하기</a>
</body>
</html>