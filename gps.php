<form method="post" action="index.php?cmd=gps">
<div class="row">
    <div class="col-2 colLine">IP</div>
    <div class="col-8 colLine">
        <input type="text" name="ip" class="form-control" placeholder="1.2.3.4">
    </div>
    <div class="col-2 colLine">
        <button type="submit" class="btn btn-primary btn-sm form-control">
            <span class="material-icons">search</span> 검색
        </button>
    </div>
</div>
</form>

<?php

    if(isset($_POST["ip"]))
    {
        $ip = $_POST["ip"];

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

            echo "
            <div class='row'>
                <div class='col-2 colLine'>위/경도</div>
                <div class='col colLine'>위도: $latitude, 경도: $longitude</div>
            </div>
            <div class='row'>
                <div class='col-2 colLine'>위치정보</div>
                <div class='col colLine'>$city, $region, $country</div>
            </div>
            ";

        } else {
            ?>
            <div class="alert alert-danger">
                <strong>정보 없음.</strong> <br><br>
                IP 주소를 확인하세요.
            </div>
            <?php
        }
    }else
    {
        ?>
        <div class="alert alert-danger">
                <strong>IP 주소 입력</strong> <br><br>
                IP 주소를 입력하면 GPS 좌표와 위치를 확인할 수 있습니다..
            </div>
        <?php
    }




?>
