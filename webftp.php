<?php
    function getDirs($path)
    {
        $dirHandler = opendir($path);
        while(($filename = readdir($dirHandler)) != false)
        {
            if(is_dir("$path/$filename"))
            {
                $files[] = $filename;
            }
        }

        return $files;
    }

    function getFiles($path)
    {
        $dirHandler = opendir($path);
        while(($filename = readdir($dirHandler)) != false)
        {
            if(is_dir("$path/$filename"))
            {
                
            }else
            {
                $files[] = $filename;
            }

        }

        return $files;
    }

    function readFileSecure($path)
    {
        if(!$handler = fopen($path, 'r'))
        {
            return "File Open Error";
        }

        $fileContents = file_get_contents($path, true);
        return $fileContents;
    }


    $sess_path = "sess_path";

    if(isset($_POST["fname"]) and isset($_POST["fdata"]))
    {
        $fname = $_POST["fname"];
        $fdata = $_POST["fdata"];

        $pathFile = $_SESSION[$sess_path] . "/" . $fname;

        if(file_exists($pathFile))
        {
            unlink($pathFile);
        }

        if(!$handler = fopen($pathFile, 'w'))
        {
            echo "File Open Error !!!<br>";
        }

        if(fwrite($handler, $fdata) == false)
        {
            echo "File Write Error !!!<br>";
        }
        echo "
        <script>
            alert('파일 생성 완료 : $fname ');
            location.href='index.php?cmd=webftp';
        </script>
        ";
    }

    if(!isset($_SESSION[$sess_path]))
    {
        $_SESSION[$sess_path] = "./";
    }

    if(isset($_GET["pdir"]))
    {
        $_SESSION[$sess_path] = $_GET["pdir"];
    }

?>

<div class="row">
    <table class="table table-bordered">
        <tr>
            <td class="col-3">
                <table class="table">
                    <tr>
                        <td>
                            <a href='index.php?cmd=webftp&pdir=./'>처음으로</a>
                        </td>
                    </tr>
                    <?php
                        $dirs = getDirs($_SESSION[$sess_path]);
                        $cnt = 0;

                        while(isset($dirs[$cnt]))
                        {
                            $nextDir = $_SESSION[$sess_path] . "/" . $dirs[$cnt];
                            echo "
                            <tr>
                                <td>
                                    <a href='index.php?cmd=webftp&pdir=$nextDir'>$dirs[$cnt]</a>
                                </td>
                            </tr>
                            ";
                            $cnt ++;
                        }
                    ?>
                </table>

            </td>
            <td class="col-9">
            <table class="table">
                    <?php
                        $files = getFiles($_SESSION[$sess_path]);
                        $cnt = 0;

                        while(isset($files[$cnt]))
                        {
                            echo "
                            <tr>
                                <td>
                                    <a href='index.php?cmd=webftp&pfile=$files[$cnt]'>$files[$cnt]</a>
                                </td>
                            </tr>
                            ";
                            $cnt ++;
                        }
                    ?>
                </table>

            </td>
        </tr>

        <?php
            if(isset($_GET["pfile"]))
            {
                $fileContents = readFileSecure($_SESSION[$sess_path] . "/" . $_GET["pfile"]);   
            }else
            {
                $fileContents = "";
            }
        ?>
        <form method="post" action="index.php?cmd=webftp">
        <tr>
            <td colspan="2" class="col">
                <textarea class="form-control" name="fdata" rows="10"><?php echo $fileContents?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="col">
                
                <div class="row">
                    <div class="col-3 colLine">파일명</div>
                    <div class="col colLine">
                        <input type="text" name="fname" class="form-control" placeholder="파일명을 입력하세요">
                    </div>
                    <div class="col-2 colLine">
                        <button type="submit" class="btn btn-primary">등록</button>
                    </div>
                </div>
                
            </td>
        </tr>
        </form>
    </table>
</div>