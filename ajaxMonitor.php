<?php
    include "db.php";

    // sensor 테이블 데이터 가져오기
    $query = "SELECT time, temp, hum FROM sensor ORDER BY idx ASC";
    $result = mysqli_query($conn, $query);

    // 데이터를 Google Charts 형식에 맞게 변환
    $dataArray = [["Time", "Temperature", "Humidity"]]; // 데이터 헤더
    while ($row = mysqli_fetch_assoc($result)) {
        $dataArray[] = [$row['time'], (float)$row['temp'], (float)$row['hum']];
    }

    /*
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $counter = $_POST["counter"];

    $rand = rand(1, 100);

    echo "당신이 입력한 id = $id 입니다. $rand conter = $counter ";
    */
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // PHP에서 변환된 데이터 전달
            var data = google.visualization.arrayToDataTable(<?php echo json_encode($dataArray); ?>);

            // 그래프 옵션 설정
            var options = {
                title: 'Sensor Monitoring',
                curveType: 'function',
                legend: { position: 'bottom' },
                hAxis: { title: 'Time' },
                vAxis: { title: 'Values' },
                series: {
                    0: { color: '#FF0000' }, // Temperature (Red)
                    1: { color: '#0000FF' }  // Humidity (Blue)
                }
            };

            // 그래프 생성 및 렌더링
            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>


    <div class="row">
        <h1>Sensor Data Monitor</h1>
        <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>
