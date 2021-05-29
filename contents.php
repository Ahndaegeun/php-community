<?php
require('lib/sql.php');

session_start();

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
  <?php
    if($_SESSION['userid'] === $row['author']) {?>
    <a href="modify.php?id=<?=$row['idx']?>">수정하기</a>
    <form class='frm' action="delete-process.php" method="post">
      <input type="hidden" name='userid' value="<?= $row['author']?>">
      <input type="hidden" name="idx" value="<?= $row['idx']?>">
      <button type='button' onClick=del()>삭제하기</button>
    </form>
  <?php }?>
<script>
function del() {
  const res = confirm('삭제?');
  if(res) {
    document.querySelector('.frm').submit()
  }
}
</script>
</body>
</html>