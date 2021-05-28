<?php
// $host = 'kade0807.cafe24.com';
$host = 'localhost';
$user = 'kade0807';
$pw = 'dAegeun1!';
$dbName = 'kade0807';
$conn = mysqli_connect($host, $user, $pw, $dbName);

$query = "select idx, title, date, author from contents";
$result = mysqli_query($conn, $query);
$row_count = mysqli_num_rows($result);
?>