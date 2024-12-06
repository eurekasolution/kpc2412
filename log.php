<?php
    // 순서, IP, work, who, when, flag
    // 게시판 10
    // 5 : 1
    // 11 : 2
    // 20 : 2
    // 53 : 6
    // n  : ceil(n/10)

    $sql = "select * from log ";
    $result = mysqli_query($conn, $sql);
    $dataCount = mysqli_num_rows($result);

    echo "count = $dataCount<br>";
    $LPP = 50; // line per page
    $totalPage = ceil($dataCount / $LPP);
    echo "totalPage = $totalPage<br>";

    if(isset($_GET["page"]))    
        $page = $_GET["page"];
    else
        $page = 1;

    // 1: 0 ~ 10개
    // 2: 10 ~ 10개
    // 3: 20 ~ 10개
    // n : (n -1)*10, 10

    $start = ($page -1) * $LPP;

    $sql = "select * from log order by idx desc limit $start, $LPP";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    function ip2nation($ip)
    {
        // 1.2.3.4
        $splitIP = explode(".", $ip);
        include "ip_files/" . $splitIP[0] . ".php";

        $code = ($splitIP[0] * 256 * 256 * 256)
                + ($splitIP[1] * 256 * 256 )
                + ($splitIP[2] * 256)
                + $splitIP[3];

        foreach($ranges as $key => $value)
        {
            if($key <= $code)
            {
                if($ranges[$key][0] >= $code)
                {
                    $nation = $ranges[$key][1];
                    break;
                }
            }
        }

        if(!isset($nation))
            $nation = "";

        if(isset($nation) and $nation == "")
        {
            $nation = "noflag";
        }

        return $nation;
    }

    if($_SESSION["sess_sms"])
    {
        // do nothing
    }else
    {
        $SendingMsg = "접속자가 갑자기 증가했습니다. 확인하세요.";
        $ReceiveMobile = "010-3540-8848";
        include "auto_sms.php";
        $_SESSION["sess_sms"] = "sendOK";
        
    }
?>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <td>순서</td>
                <td>IP</td>
                <td>Work</td>
                <td>ID</td>
                <td>시간</td>
                <td>국가</td>
            </tr>
            <?php
                while($data)
                {
                    $nation = ip2nation($data["ip"]);
                    $nationalFlag = "<img src='flags/$nation.gif'>";
                    echo"
                    <tr>
                        <td>$data[idx]</td>
                        <td>$data[ip]</td>
                        <td>$data[work]</td>
                        <td>$data[id]</td>
                        <td>$data[time]</td>
                        <td>$nationalFlag</td>
                    </tr>";
                    $data = mysqli_fetch_array($result);
                }
            ?>
            <tr>
                <td colspan="6">
                <?php
                    for($i=1; $i<=$totalPage; $i++)
                    {
                        if($i == $page)
                            echo "<a href='index.php?cmd=log&page=$i'><span class=\"badge bg-danger\">$i</span></a> ";
                        else
                            echo "<a href='index.php?cmd=log&page=$i'><span class=\"badge bg-secondary\">$i</span></a> ";
                        
                    
                    }
                ?>

                </td>
            </tr>
        </table>
    </div>
