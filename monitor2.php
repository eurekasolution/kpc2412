<div class="row" id="display">

</div>

    <script>

        var counter = 0;

        function ajaxMonitor()
        {
            // ajaxMonitor.php
            counter ++;
            var param = "id=test&pw=1234&counter="+ counter;

            $.ajax({
                url: "ajaxMonitor.php",
                type: "POST",
                cache: false,
                data: param,
                success: function(data)
                {
                    //alert(data);
                    $("#display").html(data);
                }
            });
        }



        // 3초마다 새로고침
        setInterval(function() {
            ajaxMonitor();
        }, 3000);
    </script>