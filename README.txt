
[abc]
[abc]{2}
[abc]{2,4}   ac ccca  bca  /  abcd
ls *.[ch]

[abcdef....xyz]{4,10}

[a-zA-Z0-9]  == \w
[a-zA-Z0-9]{4,10}

    가test12나

    ^010-[0-9]{4}-[0-9]{4}$

UNICODE = UNI + CODE

100Mbps, 100Mbps
1B : 256
2B : 65536
3B : 1600만
4B : 40억

    됬다  ---> 됐다

AC00 : 가
AC01 : 각
AC02 : 갂
AC03 : 갃
...
LAST : 힣

    ^[가-힣]{2,4}$

동해물과 백두산이 마르고 닳도록
테스트 mat mother motd 010-123a-1234 010-1234-1234
동해물과 백두산이 마르고 닳도록
테스트 mat mother motd 010-123a-1234 010-1234-1234


쉬고 오셔서 다음 사이트에 접속해 봅니다.
강의자 컴퓨터 내용의 실시간 배포

https://github.com/eurekasolution/kpc2412

DB접속 

localhost/phpmyadmin

Q1 :
다음 조건을 만족하는 mysql 스키마를 하나 만들어 줘.
table name : first
각 필드는 다음과 같아.
id  varchar(20)
name varchar(20)

Q2 : 
여기에 한글이름을 갖는 데이터 10개를 만드는 쿼리를 만들어 줘.
이름은 역사상 인물 이름으로 무작위로 결정해


CREATE TABLE first (
    id VARCHAR(20) NOT NULL,
    name VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO first (id, name) VALUES
('user1', '세종대왕'),
('user2', '이순신'),
('user3', '신사임당'),
('user4', '율곡이이'),
('user5', '정약용'),
('user6', '김홍도'),
('user7', '장영실'),
('user8', '황희'),
('user9', '허준'),
('user10', '강감찬');

Q3:
생성된 secure라는 데이터베이스의 한글이 깨져.
utf8mb4 문자셋으로 데이터베이스를 변경하는 쿼리를 알려줘

ALTER DATABASE secure CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

테이블이 이미 만들어져 있으므로, 테이블 지우고
drop table first;
테이블을 다시 만들면 한글깨짐 해결됌

사용하는 비밀번호의 안전성 검사
https://www.security.org/how-secure-is-my-password/


$id = "test";
        ' or 2>1 limit 1, 1 -- 
$pass = "1111";

$sql = "select * from users where id='' or 2>1 limit 1, 1 -- test' and pass='1111' ";

javascript:alert(document.cookie);

1.2.3.4

    0001 0010 0011 0100
  & 1111 1111 1111 0000
       1   2     3   0

w3schools.com
    > Get Started 의 Try it Yourself를 복사해
        a.html 만들고 코드 수정

=====================================================
                    Day 2
=====================================================
원본 글
하나
둘
셋

여기에 글쓰기

>> 하나
>> 둘
>> 셋

Q4. 
HTML5를 이용하는 다음과 같은 코드를 하나 만들어 줘.
Bootstrap5를 사용하고, 상단에 메뉴를 드랍다운 메뉴로 만들고 싶어.
메뉴에는 보안실습, 메뉴2, 메뉴3이 있다.
보안실습에는 로그인, SQL Injection, XSS, 게시판. Brute Force, Web Shell
메뉴2 에는 메뉴 2-1, 메뉴 2-2
메뉴3에는 메뉴 3-1, 메뉴 3-3 있어.
나머지 내용은 빈 공간으로 해 줘

Q5:
PHP로 db.php 라는 파일을 만들고 싶어.
$dbName = "secure";
$dbUser = "secure";
$dbPass = "1111";

$conn = connectDB(); 형태로 호출하면
데이터베이스에 접속하고 $conn를 반환하는 형태를 취하고 싶어.


Q6:
다음과 같은 구조를 갖는 index.php 파일을 만들어줘.
<?php
    include "db.php";
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

    </div>


</body>
</html>

모든 링크는 index.php를 통해서 이동할 거야.
index.php?cmd=test 형태로 링크가 만들어지면 몸체에서는 
$cmd 값을 확인한 후 $cmd값이 없으면 include "init.php"; 하고
$cmd가 있으면 include "$cmd.php"; 형태로 코드를 만들어 줘.

javascript:alert(document.cookie);


users 테이블

create table users (
    idx     integer auto_increament primary key,
    id      varchar(20) unique,
    pass    varchar(50),
    name    varchar(20)
);

Q6:
다음과 같은 Mysql 스키마를 하나 정의해 줘.
table name : users
필드정보
    idx     자동증가, 프라이머리 키
    id      텍스트, 유일
    pass    비밀번호저장
    name    사람이름 저장

CREATE TABLE users (
    idx INT AUTO_INCREMENT PRIMARY KEY, -- 자동증가 및 프라이머리 키
    id VARCHAR(255) UNIQUE NOT NULL,   -- 텍스트, 유일한 값
    pass VARCHAR(255) NOT NULL,        -- 비밀번호 저장
    name VARCHAR(100) NOT NULL         -- 사람이름 저장
);

insert into users (id, pass, name) values('test', 'abcd', '테스터');
insert into users (id, pass, name) values('hong', 'cdef', '홍길동');
insert into users (id, pass, name) values('admin', 'abcd', '관리자');
insert into users (id, pass, name) values('kim', 'cdef', '김개똥');

for($i=1; $i<=100000; $i++)
{
    connect();
    insert();
    closeDB();
}

connect();
for($i=1; $i<=100000; $i++)
{
    insert(); 
}
closeDB();

my_family_count : snake ... linux, c
myFamilyCount  : Camel .. java

변수 : 소문자 첫글자마다 대문자로 표기
myFamily
myFamily()

MyFamily 

HTTP Status Code / Error Code

1xx : Trying
2xx : OK
3xx : Redirect Error, Temporary Error
4xx : Client Error, Permanent Error
5xx : Server Error
6xx : Global Error

enum { Trying = 100, Ringing = 180, BadRequest=400, Unauth, Payment, Forbidden, NotFound, MethodNotAllowed, }

download burp suite

Q:
webshell.php 파일을 만들고 싶어.

상단에 
<div class="row">
   <div class="col-2 colLine text-end">명령</div>
   <div class="col colLine text-end">
      <input type="text" class="form-control" name="command" placeholder="명령어 입력">
   </div>
   <div class="col-2 colLine ">실행버튼</div>
</div>

하단에는 $command가 있는 경우에는 이 실행 결과를 
<div class="row">
   <div class="col colLine">
        <textarea class="form-control" rows="10">여기에 결과 출력</textarea>
   </div>
</div>

Q:
그런데 이 코드는 이미 index.php에서 webshell을 include할 거야.
그래서 HTML 헤더는 필요없어.
webshell.php는 index.php에서 이미 container안에 포함되기만 하니까,
불필요한 코드를 제거해 줘.


Q. 다음과 같은 Mysql 스키마를 하나 정의해
table name : log
필드 정보:
    idx : integer, auto_increment, primary key
    ip : IP Address 예: 1.2.3.4
    id : 사용자의 아이디
    work : varchar(255)
    time : datetime

CREATE TABLE log (
    idx INT AUTO_INCREMENT PRIMARY KEY,   -- 자동 증가, 기본 키
    ip VARCHAR(45) NOT NULL,              -- IPv4 및 IPv6 주소를 저장할 수 있도록 VARCHAR(45) 설정
    id VARCHAR(255) NOT NULL,             -- 사용자 아이디
    work VARCHAR(255) NOT NULL,           -- 작업 내용
    time DATETIME NOT NULL                -- 작업 시간
);

IP 주소 : 1.2.3.4
0000 0000 ~ 1111 1111
0000 0000 ~ 0111 1111 : 0 ~ 127 : A class

    100.*.*.* ==> 1600만개
    10.*.*.* :private ip
    127.0.0.1 => 127.*.*.* : loopback address

1000 0000 ~ 1011 1111 : 128 ~ 191 (175)

    175.123.*.* ==> 65536개 (B 클래스)

    172.16.*.* : private ip

1100 0000 ~ 1101 1111 : 192 ~ 221 
    200.13.17-20.*  : C 클래스
    192.168.*.*

OSI 7 Layer

A Penguin Said That Nobody Drinks Pepsi






=====================================================
                    Day 3
=====================================================


=====================================================
                    Day 4
=====================================================

=====================================================
                    Day 5
=====================================================

