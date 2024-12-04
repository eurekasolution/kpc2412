<?php
include 'db.php'; // DB 연결
session_start();

// 필수 파라미터 확인
$cmd = $_GET['cmd'] ?? null;
$bid = $_GET['bid'] ?? null;

// 기본 검증
if ($cmd !== 'board' || !is_numeric($bid)) {
    die('잘못된 요청입니다.');
}

// 게시판 종류 정의
$boardNames = [
    1 => '자유게시판',
    2 => 'QnA게시판'
];
$boardName = $boardNames[$bid] ?? null;
if (!$boardName) {
    die('존재하지 않는 게시판입니다.');
}

// mode 결정
$mode = $_GET['mode'] ?? 'list';
$idx = $_GET['idx'] ?? null;

// 글 목록 보기
if ($mode === 'list') {
    $page = $_GET['page'] ?? 1;
    $limit = 10;
    $offset = ($page - 1) * $limit;

    $query = "SELECT idx, title, id, time FROM bbs WHERE bid = $bid ORDER BY idx DESC LIMIT $offset, $limit";
    $result = mysqli_query($conn, $query);
    
    echo "<h2>$boardName</h2>";
    echo "<table border='1'>
            <tr><th>번호</th><th>제목</th><th>작성자</th><th>작성일</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['idx']}</td>
                <td><a href='index.php?cmd=board&bid=$bid&mode=show&idx={$row['idx']}'>{$row['title']}</a></td>
                <td>{$row['id']}</td>
                <td>{$row['time']}</td>
              </tr>";
    }
    echo "</table>";

    // 글쓰기 버튼
    echo "<a href='index.php?cmd=board&bid=$bid&mode=write'><button>글쓰기</button></a>";
    exit;
}

// 게시글 보기
if ($mode === 'show' && $idx) {
    $query = "SELECT * FROM bbs WHERE bid = $bid AND idx = $idx";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if (!$row) die('글을 찾을 수 없습니다.');

    echo "<h2>{$row['title']}</h2>";
    echo "<p>작성자: {$row['id']}</p>";
    echo "<p>작성일: {$row['time']}</p>";
    echo "<div>{$row['html']}</div>";
    if ($row['file']) {
        echo "<p>첨부파일: <a href='uploads/{$row['file']}' download>{$row['file']}</a></p>";
    }

    echo "<a href='index.php?cmd=board&bid=$bid&mode=list'><button>목록보기</button></a>";
    echo "<a href='index.php?cmd=board&bid=$bid&mode=write&idx=$idx'><button>수정하기</button></a>";
    echo "<a href='index.php?cmd=board&bid=$bid&mode=delete&idx=$idx'><button>삭제하기</button></a>";
    exit;
}

// 글쓰기/수정 화면
if ($mode === 'write') {
    $title = $html = $file = '';
    if ($idx) { // 수정일 경우
        $query = "SELECT * FROM bbs WHERE bid = $bid AND idx = $idx";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if (!$row) die('글을 찾을 수 없습니다.');
        $title = $row['title'];
        $html = $row['html'];
        $file = $row['file'];
    }

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
    exit;
}

// 글 등록(DB 저장)
if ($mode === 'dbwrite' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $html = $_POST['html'];
    $id = $_POST['id'];
    $file = $_FILES['file']['name'] ?? null;

    // 파일 업로드 처리
    if ($file) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
    }

    if (isset($_POST['idx'])) { // 수정
        $idx = $_POST['idx'];
        $query = "UPDATE bbs SET title='$title', html='$html', file='$file' WHERE idx=$idx";
    } else { // 새 글
        $query = "INSERT INTO bbs (bid, title, html, id, file) VALUES ($bid, '$title', '$html', '$id', '$file')";
    }
    mysqli_query($conn, $query);
    header("Location: index.php?cmd=board&bid=$bid&mode=list");
    exit;
}

// 글 삭제
if ($mode === 'delete' && $idx) {
    $query = "DELETE FROM bbs WHERE idx = $idx AND bid = $bid";
    mysqli_query($conn, $query);
    header("Location: index.php?cmd=board&bid=$bid&mode=list");
    exit;
}
?>
