<?php
require('lib/sql.php');

session_start();


$pageNum = $_GET['id'];
$query = "select * from contents where idx='$pageNum'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if($_SESSION['userid'] !== $row['author']) {
  echo '<script>alert("작성자 가져와"); location.href="index.php"</script>';
}
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
</head>
<body>
  <form class="modify-form" action="modify-process.php" method="post" name="form">
    <input name="idx" type="hidden" value="<?= $row['idx'] ?>">
    <label>Title : <input name="title" type="text" value="<?= $row['title']?>"></label>
    <p>Author : <?= $row['author']?></p>
    <input type="hidden" name="author" value="<?= $row['author']?>">
    <label>Contents : <textarea name="contents"><?= $row['contents']?></textarea></label>
    <button class="submit-btn" type="button">제출</button>
  </form>

<script>
const submitBtn = document.querySelector('.submit-btn')
const form = document.querySelector('.modify-form')

submitBtn.addEventListener('click', () => {
  submitFunc()
})

function submitFunc() {
  const result = confirm('제출하시겠습니까?')
  if(result) {
    form.submit()
  } else {
    return
  }
}
</script>
</body>
</html>