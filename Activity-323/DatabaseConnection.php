<?php

class DatabaseConnection
{
    function getConnection() {
        
        $servername = "z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        
        $username = "hydassi67brqr6xz";
        
        $password = "x2oksfqgyajdcw9l";
        
        $port = "3306";
        
        $database = "fsu8e516wvoz7kvx";
        
        $conn = new mysqli($servername, $username, $password, $port, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected <b>";
        $conn->close();
        echo "connection closed";
    }
}
?>
