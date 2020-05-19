<?php
    function OpenCon()
        {
            $dbhost = "68.183.213.14";
            $dbuser = "usuario2";
            $dbpass = "1920";
            $db = "sif_tfp";
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

            return $conn;
        }

        function CloseCon($conn)
        {
            $conn -> close();
        }
?>