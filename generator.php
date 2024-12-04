<?php

// 온도와 습도 랜덤 값 생성
$temp = mt_rand(6000, 6100) / 100; // 30.00 ~ 31.00
$hum = mt_rand(3000, 3200) / 100;  // 50.00 ~ 52.00

// 데이터베이스에 삽입
$query = "INSERT INTO sensor (temp, hum, time) VALUES ($temp, $hum, now())";
mysqli_query($conn, $query);

// 확인 메시지 출력
echo "<p>생성된 데이터: 온도 = $temp, 습도 = $hum</p>";
?>

<script>
// 3초마다 새로고침
setTimeout(function() {
    window.location.reload();
}, 3000);
</script>
