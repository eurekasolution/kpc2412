<?php
    include "db.php";

    // 기본 설정
    $cmd = isset($_GET['cmd']) ? $_GET['cmd'] : 'init';

    // 포함할 파일 결정
    $fileToInclude = $cmd . ".php";

    // 보안 처리: 파일 존재 여부 확인
    if (!file_exists($fileToInclude)) {
        $fileToInclude = "404.php"; // 파일이 없을 경우 404 페이지로 이동
    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <title>시큐어 코딩</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
    <!-- B0916 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- 보안실습 Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="securityDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            보안실습
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="securityDropdown">
                            <li><a class="dropdown-item" href="index.php?cmd=login">로그인</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=sql_injection">SQL Injection</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=xss">XSS</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=board">게시판</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=brute_force">Brute Force</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=web_shell">Web Shell</a></li>
                        </ul>
                    </li>
                    <!-- 메뉴2 Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu2Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            메뉴2
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menu2Dropdown">
                            <li><a class="dropdown-item" href="index.php?cmd=menu2_1">메뉴 2-1</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=menu2_2">메뉴 2-2</a></li>
                        </ul>
                    </li>
                    <!-- 메뉴3 Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu3Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            메뉴3
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menu3Dropdown">
                            <li><a class="dropdown-item" href="index.php?cmd=menu3_1">메뉴 3-1</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=menu3_3">메뉴 3-3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <?php include $fileToInclude; ?>
    </div>
</body>
</html>
