<?php
require('lib/sql.php');

$pageNum = $_POST['idx'];

// $result = mysqli_query($conn, $query);
// $row = mysqli_fetch_array($result);

// $query = "update contents 
//   set title = ".$row['title'].",
//     contents = ".$row['contents'].",
//     author = ".$row['author']."
//   where idx=".$row['idx']."";
echo pageNum;
?>

<script>
alert('수정이 완료 되었습니다.');
window.location.href = "index.php";
</script>