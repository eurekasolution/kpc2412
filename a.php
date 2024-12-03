<?php
    include "db.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <title>Bootstrap 5 Example</title>
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
            <a class="navbar-brand" href="#">My Website</a>
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
                            <li><a class="dropdown-item" href="#">로그인</a></li>
                            <li><a class="dropdown-item" href="#">SQL Injection</a></li>
                            <li><a class="dropdown-item" href="#">XSS</a></li>
                            <li><a class="dropdown-item" href="#">게시판</a></li>
                            <li><a class="dropdown-item" href="#">Brute Force</a></li>
                            <li><a class="dropdown-item" href="#">Web Shell</a></li>
                        </ul>
                    </li>
                    <!-- 메뉴2 Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu2Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            메뉴2
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menu2Dropdown">
                            <li><a class="dropdown-item" href="#">메뉴 2-1</a></li>
                            <li><a class="dropdown-item" href="#">메뉴 2-2</a></li>
                        </ul>
                    </li>
                    <!-- 메뉴3 Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu3Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            메뉴3
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menu3Dropdown">
                            <li><a class="dropdown-item" href="#">메뉴 3-1</a></li>
                            <li><a class="dropdown-item" href="#">메뉴 3-3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <div class="container">
        <div class="row">
            <div class="col colLine ">
                HTML 영역<br>
                <?php
                    $a = 3;
                    $a = $a + 1;
                    echo "$a <br>";
                    $a = "홍길동";
                    echo "$a <br>";
                    // for(초기값; 조건; 증감)
                    for($a = 1; $a <=10; $a++) 
                    {
                        echo "$a <br>";
                    }

                    include "b.php";

                    echo "나는 다시 a.php<br>";
                    echo "a = $a <br>";
                ?>

            </div>
        </div>


        <div class="row">
            <div class="col colLine bg-danger">A</div>
            <div class="col colLine bg-primary">B</div>
        </div>
        <div class="row">
            <div class="col-3 colLine col-md-6 bg-danger">A</div>
            <div class="col colLine bg-primary">B</div>
        </div>

            
        <div class="row">
            <div class="col-1 d-none d-md-block colLine ">순서</div>
            <div class="col-9 col-md-6 colLine">제목</div>
            <div class="col d-none d-md-block colLine">작성자</div>
            <div class="col-3 col-md colLine">작성일</div>
            <div class="col-1 d-none d-md-block colLine">읽음</div>
        </div>

        <form method="post" action="b.html">
        <div class="row">
            <div class="col-2 colLine">ID</div>
            <div class="col colLine">
                <input type="text" value="test" class="form-control" name="id" placeholder="아이디입력">
            </div>
            <div class="col-2 colLine">PW</div>
            <div class="col colLine">
                <input type="password" class="form-control" name="pass" placeholder="비번입력">
            </div>
        </div>    
        <div class="row">
            <div class="col colLine text-center">
                <button type="submit" class="btn btn-primary form-control">로그인</button>
            </div>
        </div>
        </form>

        <div class="row">
            <div class="col-2 colLine">Email</div>
            <div class="col colLine">
                <input type="email" class="form-control" name="email" placeholder="이메일입력">
            </div>
            <div class="col-2 colLine">URL</div>
            <div class="col colLine">
                <input type="url" class="form-control" name="email" placeholder="이메일입력">
            </div>
        </div>    
        <div class="row">
            <div class="col-2 colLine">No</div>
            <div class="col colLine">
                <input type="number" class="form-control" value="10" min="0" max="30" step="2">
            </div>
            <div class="col-2 colLine">내용</div>
            <div class="col colLine">
                <textarea class="form-control" rows="10">안녕하세요?
                    반갑습니다. 
                    Nice to meet u~~
                </textare>
            </div>
        </div>    


        <div class="row">
            <div class="col colLine">
                <button class="btn btn-primary">버튼1</button>
            </div>
            <div class="col colLine">
                <button class="btn btn-success">버튼2</button>
            </div>
            <div class="col colLine">
                <button class="btn btn-danger form-control">버튼3</button>
            </div>
            <div class="col colLine">
                <button class="btn btn-success">
                    <span class="material-icons">
                        settings
                        </span>
                </button>
            </div>

        </div>    

    </div>


</body>
</html>
