<?php
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if ($data && password_verify($pass, $data['pass'])) { // 비밀번호 검증
    $_SESSION["kpcid"] = $id;
    $_SESSION["kpcname"] = $data["name"];
    $msg = "$data[name]님 반갑습니다."; 
} else {
    $msg = "아이디와 비밀번호를 확인하세요.";
}
?>