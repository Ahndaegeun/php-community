<?php
// $host = 'kade0807.cafe24.com';
// $host = 'localhost'
// $user = 'root';
// $pw = '203395';
// $dbName = 'contents';

$idx = $_POST['idx'];
$title = $_POST['title'];
$contents = $_POST['contents'];
$date = date("Y-m-d", time());

// $conn = mysqli_connection($host, $user, $pw, $dbName);
// $quiry = "insert into contents (
//   idx,
//   title,
//   contents,
//   date
// ) valuse (
//   $idx,
//   $title,
//   $contents,
//   $date
// )"
// $result = mysqli_quiry($conn, $quiry);


echo $idx;
echo $title;
echo $contents;
echo $date;




?>