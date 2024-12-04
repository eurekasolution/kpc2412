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

    $name1 = "김,김,김,이,이,박,최,선우,독고,고,홍,양,박";
    $name2 = "찬,학,태,유,희,아,권,홍";
    $name3 = "호,재,한,빈,숙,름,중,재";

    $sn1 = explode(",", $name1);  // $sn1[0]="김", 
    $sn2 = explode(",", $name2);
    $sn3 = explode(",", $name3);

    for($i=1; $i<=$tryCount; $i++)
    {
        $r1 = rand(0, count($sn1)-1);
        $r2 = rand(0, count($sn2)-1);
        $r3 = rand(0, count($sn3)-1);
        $name = $sn1[$r1] . $sn2[$r2] . $sn3[$r3] ;

        echo "$name<br>";
    }

?>