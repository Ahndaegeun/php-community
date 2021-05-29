<?php
require('lib/sql.php');

session_start();

if(!(isset($_SESSION['userid']))){
  echo "<script>alert('로그인 하셈'); location.href='index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/write.css">
</head>
<body>
  <form class="write-form" action="write-process.php" method="post" name="form">
    <input name="idx" type="hidden">
    <input name="title" type="text" placeholder="Title">
    <p><?= $_SESSION['userid']?></p>
    <textarea name="contents" placeholder="Contents"></textarea>
    <button class="submit-btn" type="button">제출</button>
  </form>

<script>
const submitBtn = document.querySelector('.submit-btn')
const form = document.querySelector('.write-form')

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