<?php
    header('Content-Type: text/html; charset=utf-8'); // UTF-8 인코딩 설정
    session_save_path("sess");
    session_start();

    date_default_timezone_set("Asia/Seoul");

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

        $ip = $_SERVER["REMOTE_ADDR"];
        $ip1 = rand(1, 254);
        $ip2 = rand(1, 254);
        $ip3 = rand(1, 254);
        $ip4 = rand(1, 254);
        $ip = "$ip1.$ip2.$ip3.$ip4";
        $q = $_SERVER["QUERY_STRING"];
        //echo "ip = $ip<br>";
        //echo "q = $q<br>";

        if(isset($_SESSION["kpcid"]))
            $userid = $_SESSION["kpcid"];
        else
            $userid = "";

        $sql = "insert into log (ip, id, work, time) 
                    values ('$ip', '$userid', '$q', now())";
        $result = mysqli_query($conn, $sql);


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
            <script>
                function checkError()
                {
                    //var id = document.getElementById('id');
                    let id = document.querySelector('#id');
                    //let id = $('#id');
                    
                    // var regexp = /^[가-힣]{2,4}$/;

                    //var regexp = /[\-,'"]/;

                    //if(regexp.test(id.value))
                    //{
                    //    alert('특수문자는 안돼!!');
                    //    return false;
                    //}
                    
                }
            </script>
            <form method="post" action="index.php?cmd=login" onSubmit="return checkError()">
            <div class="row">
                <div class="col-4 colLine"></div>
                <div class="col-1 text-end colLine">ID</div>
                <div class="col colLine">
                    <input type="text" class="form-control" name="id" id="id" placeholder="아이디입력">
                </div>
                <div class="col-1 text-end colLine">PW</div>
                <div class="col colLine">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="비번입력">
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
