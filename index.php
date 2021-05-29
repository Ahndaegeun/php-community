<?php
require('lib/sql.php');

session_start();

$query = "select idx, title, date, author from contents";
$result = mysqli_query($conn, $query);
$row_count = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/main.js" defer></script>
</head>
<body>
  <header>
    <h1><a href="/">Hello</a></h1>
    <?php if(isset($_SESSION['userid'])){?>
      <a href="logout-process.php">로그아웃</a>
      <a href="preference.php?=id<?= $_SESSION['userid']?>">정보 수정</a>
    <?php }else {?>
      <a href="login.php">로그인</a>
      <a href="signup.php">회원가입</a>
    <?php }?> 
  </header>
  <main>
    <section>
      <ul class="section-header">
        <li>No</li>
        <li>Title</li>
        <li>Arthor</li>
        <li>Time</li>
      </ul>
      <div class="contents-container">
        <?php
          for($i = 0; $i < $row_count; $i++) {
            $row = mysqli_fetch_array($result);
            echo '<ul class="section-contents">
            <li>'.$row["idx"].'</li>
            <li><a href="contents.php?id='.$row['idx'].'">'.$row["title"].'</a></li>
            <li>'.$row["author"].'</li>
            <li>'.$row["date"].'</li>
          </ul>';
          }
        ?>
      </div>
      <a href="write.php" class="write-btn">글작성</a>
    </section>
  </main>
  <footer>
    Hello.com
  </footer>
</body>
</html>