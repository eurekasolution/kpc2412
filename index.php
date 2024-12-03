<?php
    session_save_path("sess");
    session_start();

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
    <?php
        include "menu.php";
    ?>
        <div class="container mt-1">
    <?php
        if(isset($_SESSION["kpcid"]))
        {
            ?>
            <div class="row">
                <div class="col colLine text-end">
                    <?php echo $_SESSION["kpcname"] ?>
                    <button type="button" class="btn btn-primary" onClick="location.href='index.php?cmd=logout'">로그아웃</button>
                </div>
            </div>
            <?php
        }else
        {
            ?>
            <form method="post" action="index.php?cmd=login">
            <div class="row">
                <div class="col-4 colLine"></div>
                <div class="col-1 text-end colLine">ID</div>
                <div class="col colLine">
                    <input type="text" class="form-control" name="id" placeholder="아이디입력">
                </div>
                <div class="col-1 text-end colLine">PW</div>
                <div class="col colLine">
                    <input type="password" class="form-control" name="pass" placeholder="비번입력">
                </div>
                <div class="col colLine text-center">
                    <button type="submit" class="btn btn-primary form-control">로그인</button>
                </div>
            </div>
            </form>
            <?php
        }
    ?>



    <!-- Main Content -->

        <?php include $fileToInclude; ?>
    </div> <!-- container -->
</body>
</html>
