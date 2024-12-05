
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

void print(char *ptr)
{
	char buf[100];
	bzero(buf, sizeof(buf));
	strcpy(buf, ptr);
}

// ./test Hello
// ./test "hello world"

int main(int argc, char **argv)
{
	print(argv[1]);
	return 0;
}


Q: 다음과 같은 brute.php 파일을 만들고 싶어.
텍스트의 조합은 영어 소문자로만 구성되어 있어.
4글자로 된 텍스트 조합을 모두 만들어서 DB와 비교
aaaa, aaab, aaac, .... , zzzy, zzzz
이런 순서로 $pass 를 만들어서
users 테이블에 다음과 같이 쿼리를 해서 동일한 비밀번호를 찾으면 종료하고 싶어.

select * from users where pass='$pass' 
이때 찾은 비밀번호와 같은 id와 pass를 모두 출력하고 종료해.

Q:
다음과 같은 코드를 응용해서 다른 코드를 만들고 싶어.

<?php

    $letters = "abcdefghij";
    $size = strlen($letters);
    echo "size = $size<br>";

    $cnt = 0;

    for($i = 0; $i < $size; $i++)
    {
        for($j = 0; $j < $size; $j++)
        {
            for($k = 0; $k < $size; $k++)
            {
                for($l = 0; $l < $size; $l++)
                {
                    $cnt ++;

                    $pass = $letters[$i] . $letters[$j] . $letters[$k] . $letters[$l];
                    $sql = "select * from users where pass='$pass' ";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($result);
                    if($data)
                    { // find
                        while($data)
                        {
                            $id = $data["id"];
                            echo "id = $id, pass = $pass <br>";
                            $data = mysqli_fetch_array($result);
                        }

                        // exit();
                    }
                    if($cnt > 100000)
                        exit();
                }
            }
        }
    }

?>

이때, $cnt 가 없으면 0 이고,
0 일때는 aaaa 라는 문자를 만들고,
1 일때는 aaab 라는 문자를 만들고,
2 일때는 aaac 라는 문자를 만든다.
이와 같은 형태로 $cnt 값을 순차적으로 증가하는데

index.php?cmd=brute2&cnt=1
이렇게 GET방식으로 cnt가 결정되면 해당하는 문자인 (예: aaab)를 찾아서
데이터베이스에서 검사를 해.

cnt값을 증가시켜서 다음 링크로 이동을 해.
setTimeout을 이용해서 1초마다 한번씩 호출하도록 변경해 줘.

index.php?cmd=board&bid=1&mode=write

!$mode
    $mode = "list"

if($mode == "list")
{

} else if($mode == "write")
{
    // 글쓰기
} else if($mode == "dbwrite")
{
    // 글쓰기 DB에 적용
} else if($mode == "show")
{
    // 글내용보기
} // 수정, 삭제, 댓글

blob, text


Mysql 스키마를 정의해 줘.

table name : bbs
idx : 게시글의 키값, 자동증가
bid : 게시판의 종류, 예: 1 = 공지사항, 2 = 자유게시판
title : 게시글의 제목
html : mediumtext
id : 회원의 아이디
file : 파일의 이름 저장
time : datetime, 작성시간

CREATE TABLE bbs (
    idx INT AUTO_INCREMENT PRIMARY KEY,   -- 게시글의 키값, 자동 증가
    bid TINYINT NOT NULL,                 -- 게시판의 종류 (1: 공지사항, 2: 자유게시판 등)
    title VARCHAR(255) NOT NULL,          -- 게시글 제목
    html MEDIUMTEXT NOT NULL,             -- 게시글 내용 (HTML 포맷 지원)
    id VARCHAR(50) NOT NULL,              -- 회원 아이디
    file VARCHAR(255),                    -- 파일 이름
    time DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP -- 작성 시간, 기본값 현재 시간
);

insert into bbs (bid, title, html, id, file, time) 
    values ('1', '첫번째', 'first 내용', 'test', '', now());


Q:
다음과 같은 board.php라는 파일을 만들어 줘.
호출방법 : index.php?cmd=board&bid=1&mode=show&idx=3
이때, cmd, bid는 필수
bid는 정수인데, 1:자유게시판, 2: QnA게시판
mode값이 없으면 기본값으로 mode = "list"로 결정
글보기, 수정, 삭제할 때는 해당 게시글의 번호인 idx를 항상 포함

mode의 종류 : list(글목록보기), show(게시글 보기), write(글쓰기화면)
    dbwrite(게시글을 실제 DB저장), delete(게시글 DB에서 삭제)
write는 글쓰기 기능도 있지만, 글 수정하기를 같이 수행
  - 글 수정할 때, 글 쓰는 내용에 원본글을 가져와 텍스트 추가

글목록 보기 : idx, title, 작성자, 작성일을 10개씩 보여주고,
    10개 이상일 때는 화면 하단에 페이지별로 보기
글목록 보기의 아래에는 "글쓰기"버튼을 배치,
글쓰기 버튼을 누르면 mode ="write"로 이동

글쓰기 : 제목, 작성자($_SESSION["kpcid"]), 글내용, 파일1개 첨부
    하단에는 "목록보기", "글등록" 버튼을 추가

게시판을 위한 데이터베이스 스키마는 다음과 같아.

CREATE TABLE bbs (
    idx INT AUTO_INCREMENT PRIMARY KEY,   -- 게시글의 키값, 자동 증가
    bid TINYINT NOT NULL,                 -- 게시판의 종류 (1: 공지사항, 2: 자유게시판 등)
    title VARCHAR(255) NOT NULL,          -- 게시글 제목
    html MEDIUMTEXT NOT NULL,             -- 게시글 내용 (HTML 포맷 지원)
    id VARCHAR(50) NOT NULL,              -- 회원 아이디
    file VARCHAR(255),                    -- 파일 이름
    time DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP -- 작성 시간, 기본값 현재 시간
);


Q:
echo "<h2>" . ($idx ? "글 수정" : "글 쓰기") . "</h2>";
    echo "<form method='post' action='index.php?cmd=board&bid=$bid&mode=dbwrite' enctype='multipart/form-data'>";
    if ($idx) echo "<input type='hidden' name='idx' value='$idx'>";
    echo "제목: <input type='text' name='title' value='$title'><br>";
    echo "작성자: <input type='text' name='id' value='{$_SESSION['kpcid']}' readonly><br>";
    echo "내용: <textarea name='html' rows='10' cols='50'>$html</textarea><br>";
    echo "파일: <input type='file' name='file'><br>";
    echo "<a href='index.php?cmd=board&bid=$bid&mode=list'><button type='button'>목록보기</button></a>";
    echo "<button type='submit'>글등록</button>";
    echo "</form>";


이렇게 된 코드를 
<div class="row">
   <div class="col-2 colLine">왼쪽</div>
   <div class="col colLine">오른쪽</div>
</div>

이와 같은 형태로 코드를 바꿔줘.
모든 입력은 class에 form-control을 추가해



글쓰기 연습

스크립트 테스트
<script>for(var i=1; i<=3; i++){ alert(i) }</script>


<br>

< : &lt;

> : &gt;


Q: 

다음과 같은 Mysql 스키마를 만들고 싶어.
table name : sensor
필드 정보는 다음과 같다.
idx : 키값, 자동 증가
temp : 온도저장, float
hum : 습도 저장, float
time : datetime

CREATE TABLE sensor (
    idx INT AUTO_INCREMENT PRIMARY KEY,   -- 키값, 자동 증가
    temp FLOAT NOT NULL,                  -- 온도 저장
    hum FLOAT NOT NULL,                   -- 습도 저장
    time DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP -- 시간, 기본값 현재 시간
);

Q:

생성된 테이블에 랜덤하게 생성된 온도, 습도를 저장하기 위한 PHP 예제를
다음과 같이 만들고 싶어.

DB 연결은 이미 끝났고,

temp는 30도 ~ 31도 사이의 랜덤한 float 생성
hum 값은 50-52 사이의 랜덤한 float 생성

생성된 두 값을 앞에서 만든 테이블에 넣고
setTimeout()을 이용해 3초마다 새로고침하도록 해.


Q. 이번에는 monitor.php 파일을 만들고 싶은데,

구글차트를 이용해 sensor 테이블 값을 순서대로 가져와서
꺾은선 그래프로 그리는 예제를 만들어줘.
이때 time에는 수집된 시간이 포함되어 있어.

=====================================================
                    Day 4
=====================================================
Q:
다음과 같이 로그인 입력하는 부분이 있어.
<form method="post" action="index.php?cmd=login" onSubmit="return checkError()">
<div class="row">
    <div class="col-4 colLine"></div>
    <div class="col-1 text-end colLine">ID <input type="checkbox" id="saveid"> </div>
    <div class="col colLine">
        <input type="text" class="form-control" name="id" id="id" placeholder="아이디입력">
    </div>
    <div class="col-1 text-end colLine">PW <input type="checkbox" id="savepass"></div>
    <div class="col colLine">
        <input type="password" class="form-control" name="pass" id="pass" placeholder="비번입력">
    </div>
    <div class="col colLine text-center">
        <button type="submit" class="btn btn-primary form-control">로그인</button>
    </div>
</div>
</form>

이때, saveid, savepass 선택되는 경우, 
localStoage에 이 값을 30일간 저장하고,
저장된 값이 있는 경우에는 id, pass의  입력값을 자동으로 넣어 주도록
코드를 작성해.



<body>
    <h1>Hello<b>Bold</b></h1>
</body>


Q:
<div class="row" id="display">

</div>

    <script>

        var counter = 0;

        function ajaxMonitor()
        {
            // ajaxMonitor.php
            counter ++;
            var param = "id=test&pw=1234&counter="+ counter;

            $.ajax({
                url: "ajaxMonitor.php",
                type: "POST",
                cache: false,
                data: param,
                success: function(data)
                {
                    //alert(data);
                    $("#display").html(data);
                }
            });
        }



        // 3초마다 새로고침
        setTimeout(function() {
            ajaxMonitor();
        }, 3000);
    </script>

이 코드가 왜 3초마다 ajaxMonitor()함수를 호출하지 않지?

Q:

다음과 같이 로그인 입력하는 부분이 있어.
<form method="post" action="index.php?cmd=login" onSubmit="return checkError()">
<div class="row">
    <div class="col-4 colLine"></div>
    <div class="col-1 text-end colLine">ID <input type="checkbox" id="saveid"> </div>
    <div class="col colLine">
        <input type="text" class="form-control" name="id" id="id" placeholder="아이디입력">
    </div>
    <div class="col-1 text-end colLine">PW <input type="checkbox" id="savepass"></div>
    <div class="col colLine">
        <input type="password" class="form-control" name="pass" id="pass" placeholder="비번입력">
    </div>
    <div class="col colLine text-center">
        <button type="submit" class="btn btn-primary form-control">로그인</button>
    </div>
</div>
</form>

이때, saveid, savepass 선택되는 경우, 
localStoage에 이 값을 30일간 저장하고,
저장된 값이 있는 경우에는 id, pass의  입력값을 자동으로 넣어 주도록
코드를 작성해.

Q: 
checkid, checkpass가 체크되었는데, 왜 아이디와 비밀번호를 로컬스토리지에 있는 값으로 못 가져오지? 화면 입력값을 저장된 값으로 넣어주고 싶어.

Q:

checkid, checkpass에 따라 id, pass를 각각 저장할지 판단하고 싶어.
값은 잘 가져오고 있어. 그런데 checkid를 체크하고, checkpass는 체크하지 않았을 때도 두 개가 다 표시되고 있어.

Q:
expiration 이 1735955044356와 같이 저장되는데
이 값을 YYYY-MM-DD hh:mm:ss 형태로 바꿔줘

Q:
로컬 스토리지에 저장되는 값을 포맷에 맞춰달라는 말이야

Q:
포맷에 맞게 잘 처리가 되는데, checkid, checkpass가 정상적으로 동작하지 않아

Q:

그런데, id와 pass가 로컬스토리지에 Raw 데이터가 저장되니까, 
이값을 암호화 하고(예: base64) 화면의 입력창에 가져올때는 복호화해서 원 데이터를 입력되도록 하고 싶어.

Q:

이번에는 submit을 해서 최종적으로 서버에 전달되기 전에 다시 암호화해서
패킷을 캡쳐했을 때도 암호화된 데이터로 보여주고 싶어.
이때는 pass만 base64로 바꿔서 전송하고 싶어.


=====================================================
                    Day 5
=====================================================

