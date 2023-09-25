<?php
    function getdb(){
        $dbconn = pg_connect("host=xxxxx port=xxxx dbname=xxxxxx 
        user=xxxxxx password=xxxxx sslmode=prefer connect_timeout=10") 
        or die('connectioon failed');
        return $dbconn;  
    }
?>