<?php
// 사용자의 IP 주소 (서버 환경에 따라 동적으로 얻을 수도 있음)
$ip = "34.64.82.67"; // 실제 서비스에서는 $_SERVER['HTTP_X_FORWARDED_FOR']를 고려해야 함.

// ip-api 요청 URL
$url = "http://ip-api.com/json/$ip";

// cURL 요청
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 10);

// 결과 가져오기
$response = curl_exec($curl);
curl_close($curl);

// JSON 파싱
$data = json_decode($response, true);

if ($data['status'] === 'success') {
    $latitude = $data['lat'];
    $longitude = $data['lon'];
    $city = $data['city'];
    $region = $data['regionName'];
    $country = $data['country'];

    echo "위도: $latitude, 경도: $longitude<br>";
    echo "위치: $city, $region, $country<br>";
} else {
    echo "IP 정보를 가져오는 데 실패했습니다.";
}
?>
