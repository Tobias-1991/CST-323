<?php

class DatabaseConnection
{
    function getConnection() {
        
        $servername = "localhost";
        
        $username = "root";
        
        $password = "";
        
        $database = "activitydb";
        
        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected <b>";
        $conn->close();
        echo "connection closed";
    }
}
?>