<?php
    $name = $_SESSION["kpcname"];
    session_destroy();
    echo "
    <script>
        alert('$name"."님 안녕히 가세요.');
        location.href='index.php';
    </script>
    "; 
?>