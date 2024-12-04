<?php
    for($i = 0; $i<= 6; $i++)
        $dice[$i] = 0;

    $tryCount = 60;
    for($i=1; $i<=$tryCount; $i++)
    {
        $rand = rand(1, 6);
        $dice[$rand] ++;
    }

    echo "Try : $tryCount <br>";
    for($i=1; $i<=6; $i++)
    {
        echo "[$i] $dice[$i] <br>";
    }


    function generateRandomBirthday($startYear = 1980, $endYear = 2000) {
        // 랜덤한 연도 생성
        $year = rand($startYear, $endYear);
        // 랜덤한 월 생성
        $month = rand(1, 12);
    
        // 해당 월의 마지막 날짜 계산
        $lastDay = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    
        // 랜덤한 일 생성
        $day = rand(1, $lastDay);
    
        // 생년월일 포맷팅 (YYYY-MM-DD)
        return sprintf('%04d-%02d-%02d', $year, $month, $day);
    }
    
    


    $name1 = "김,김,김,이,이,박,최,선우,독고,고,홍,양,박";
    $name2 = "찬,학,태,유,희,아,권,홍";
    $name3 = "호,재,한,빈,숙,름,중,재";

    $sn1 = explode(",", $name1);  // $sn1[0]="김", 
    $sn2 = explode(",", $name2);
    $sn3 = explode(",", $name3);

    ?>
    <form method="post" action="index.php?cmd=fake">
    <div class="row">
        <div class="col colLine">횟수 선택</div>
        <div class="col colLine">
            <input type="text" name="try" class="form-control">
        </div>
        <div class="col colLine">
            <button type="submit" class="btn btn-primary">실행</button>
        </div>
    </div>
    </form>

    <?php

    if(isset($_POST["try"]))
        $try = $_POST["try"];
    else
        $try = 5;

    ?>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <td>순서</td>
                <td>이름</td>
                <td>생년월일</td>
            </tr>
    <?php

    for($i=1; $i<=$try; $i++)
    {
        $r1 = rand(0, count($sn1)-1);
        $r2 = rand(0, count($sn2)-1);
        $r3 = rand(0, count($sn3)-1);
        $name = $sn1[$r1] . $sn2[$r2] . $sn3[$r3] ;

        // 랜덤한 생년월일 생성 및 출력
        $randomBirthday = generateRandomBirthday();
        ?>
        <tr>
                <td><?php echo $i?></td>
                <td><?php echo $name?></td>
                <td><?php echo $randomBirthday?></td>
            </tr>
        <?php
        //echo "$name<br>";
    }

    ?>
        </table>
    </div>
    <?php

?>