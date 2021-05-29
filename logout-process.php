<?php


session_start();

if (isset($_SESSION['userid'])) {
  unset($_SESSION['userid']);
}

?>

<script>
  alert("로그아웃되었습니다.");
  location.href="index.php";
</script>
