<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/write.css">
  <script src="./js/write.js" defer></script>
</head>
<body>
  <form class="write-form" action="write-process.php" method="post" name="form">
    <input name="idx" type="hidden">
    <input name="title" type="text" placeholder="Title">
    <textarea name="contents" placeholder="Contents"></textarea>
    <button class="submit-btn" type="button">제출</button>
  </form>
</body>
</html>