
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


=====================================================
                    Day 3
=====================================================


=====================================================
                    Day 4
=====================================================

=====================================================
                    Day 5
=====================================================

