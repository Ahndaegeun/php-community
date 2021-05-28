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
  <title>Modify</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/modify.css">
  <script src="./js/modify.js" defer></script>
</head>
<body>
  <form class="modify-form" action="modify-process.php" method="post" name="form">
    <input name="idx" type="hidden" value="<?= $row['idx'] ?>">
    <label>Title : <input name="title" type="text" value="<?= $row['title']?>"></label>
    <label>Author : <input name="author" type="text" value="<?= $row['author']?>"></label>
    <label>Contents : <textarea name="contents"><?= $row['contents']?></textarea></label>
    <button class="submit-btn" type="button">제출</button>
  </form>
</body>
</html>