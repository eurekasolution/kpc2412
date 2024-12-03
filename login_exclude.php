<?php
    session_start();
    include "db.php";

    $id = $_POST["id"];
    $pass = $_POST["pass"];

    // SQL Injection 방지를 위한 사용자 입력값 필터링
    function sanitize_input($input) {
        $blacklist = ["'", '"', ";", "--", "/*", "*/", "xp_", "#", "\\"];
        $input = trim($input); // 앞뒤 공백 제거
        foreach ($blacklist as $item) {
            $input = str_replace($item, "", $input); // 블랙리스트 문자열 제거
        }
        return mysqli_real_escape_string($GLOBALS['conn'], $input); // MySQL 이스케이프 처리
    }

    // 사용자 입력값 필터링 처리
    $id = sanitize_input($id);
    $pass = sanitize_input($pass);

    // SQL Query
    $sql = "SELECT * FROM users WHERE id='$id' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    if ($data) { // 로그인 성공
        $_SESSION["kpcid"] = $id;
        $_SESSION["kpcname"] = $data["name"];
        $msg = "$data[name]님 반갑습니다."; 
    } else { // 로그인 실패
        $msg = "아이디와 비밀번호를 확인하세요.";
    }

    // 메시지 출력 및 리다이렉트
    echo "
    <script>
        alert('$msg');
        location.href='index.php';
    </script>
    ";
?>
