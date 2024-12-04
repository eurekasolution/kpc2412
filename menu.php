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
                            <li><a class="dropdown-item" href="<?php echo $_SERVER["PHP_SELF"] ?>?cmd=login">로그인</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=sql_injection">SQL Injection</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=xss">XSS</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=board">게시판</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=brute">Brute Force</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=crawling">Crawling</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=fake">Fake Data</a></li>
                            <li><a class="dropdown-item" href="index.php?cmd=webshell">Web Shell</a></li>
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
