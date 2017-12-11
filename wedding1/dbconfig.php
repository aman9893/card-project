<?php  
       $servername = "localhost";  
       $username = "webdeqgk_event";  
       $password = "webdesky@2017";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('webdeqgk_event',$conn) or die("unable to connect to database"); 
?>   