<?php

require('lib/sql.php');


session_start();


$userId = $_POST['userid'];
$userPass = $_POST['userpass'];


// 로그인 결과 저장 변수
$loginCk = 0;

// 아이디 존재 유무 확인
$idCk = "select userId from user where userid = '$userId'";
$idCkResult = mysqli_query($conn, $idCk);


if ($idCkResult) {

    // 비밀번호 확인
    $passCk = "select * from user where userid = '$userId'";
    $rs = mysqli_query($conn, $passCk);
    $result = mysqli_fetch_assoc($rs);
    if ($result['userpass'] == $userPass) {
        $loginCk = 1;

        // 세션
        $_SESSION['userid'] = $result['userid'];
    }else {
        $loginCk = 3;
    }
}else {
    $loginCk = 0;
}

?>


<script>

    <?php if ($loginCk == 1) {?>
        alert("로그인되었습니다.");
        location.href="index.php";
    <?php }else {?>
        alert("아이디 또는 비밀번호가 일치하지 않습니다.");
        history.back();
    <?php }?>
</script>