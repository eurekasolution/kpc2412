<?php
function connectDB() {
    $dbHost = "localhost"; // 데이터베이스 서버 호스트
    $dbName = "secure";    // 데이터베이스 이름
    $dbUser = "secure";    // 데이터베이스 사용자 이름
    $dbPass = "1111";      // 데이터베이스 비밀번호

    // MySQLi 객체를 생성하여 데이터베이스에 연결
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    // 연결 오류 발생 시 예외 처리
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    mysqli_query($conn, "set names utf8");

    return $conn; // 성공적으로 연결된 $conn 객체 반환
}

$conn = connectDB();
?>
