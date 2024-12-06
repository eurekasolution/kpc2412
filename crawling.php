<?php
    if(!isset($_GET["page"]))
        $page = 1;
    else
        $page = $_GET["page"];

    $URL = "https://www.snu.ac.kr/snunow/snu_story?page=$page";
    //$URL = "https://search.naver.com/search.naver?ssc=tab.news.all&where=news&sm=tab_jum&query=%EC%82%BC%EC%84%B1%EC%A0%84%EC%9E%90";

    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $URL);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 요청결과를 문자열로 반환
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 원격서버의 인증서 유효성 검사
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36"
    ]);
    $response = curl_exec($curl);
?>
    <div class="row">
        <div class="col colLine">
            <textarea class="form-control" rows="10"><?php echo $response?></textarea>
        </div>
    </div>
<?php
?>