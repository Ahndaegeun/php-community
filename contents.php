<?php
require('lib/sql.php');


session_start();


function isSession($false, $true = null) {
  if(!isset($_SESSION['userid'])) {
    echo $false;
  } else {
    echo $true;
  }
}

if(!isset($_SESSION['userid'])) {
  $_SESSION['userid'] = null;
}

$pageNum = $_GET['id'];

$count = "update contents set hit = hit + 1 where idx='$pageNum'";
mysqli_query($conn, $count);

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
    <li>조회수 : <?= $row['hit']?></li>
  </ul>
  <?php if($_SESSION['userid'] === $row['author']) {?>
    <a href="modify.php?id=<?=$row['idx']?>">수정하기</a>
    <form class='frm' action="delete-process.php" method="post">
      <input type="hidden" name='userid' value="<?= $row['author']?>">
      <input type="hidden" name="idx" value="<?= $row['idx']?>">
      <button type='button' onClick=del()>삭제하기</button>
    </form>
  <?php }?>

    <form name="comment-frm" class="comment-frm" action="comment-process.php" method="post">
      <input type="hidden" name="idx">
      <textarea name="comment-text" type="text" placeholder="댓글" <?= isSession('disabled')?>></textarea>
      <button type="button" <?= isSession('onClick=nope()', 'onClick=yes()')?>>고우</button>
    </form>

  <ul class="com-list">
  </ul>
<script>
function del() {
  const res = confirm('삭제?');
  if(res) {
    document.querySelector('.frm').submit()
  }
}

function nope() {
  alert('로그인 하고 오셈');
}

function yes() {
  const res = confirm('댓글?');
  if(res) {
    document.querySelector('.comment-frm').submit()
  }
}
</script>
</body>
</html>