<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    if($id == "test" and $pass=="1111")
    {
        $_SESSION["kpcid"] = $id;
        $_SESSION["kpcname"] = "테스터";
        $msg = "반갑습니다."; 
    }else
    {
        $msg = "아이디와 비밀번호를 확인하세요.";
    }

    echo "
    <script>
        alert('$msg');
        location.href='index.php';
    </script>
    ";
?>