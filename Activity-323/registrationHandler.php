<?php
session_start();
require_once 'DatabaseConnection.php';
    
    function registerUser() {
        $name = $_SESSION['name'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        
        if (!empty($name) || !empty($username) || !empty($password)) {
            
            $dbConnect = new DatabaseConnection();
            
            $db = $dbConnect->getConnection();
            
        } else {
            echo "All fields are required";
            die();
        }
        
        $stmt = new $db->prepare("INSERT INTO users
    (NAME, USER_NAME, PASSWORD) VALUES (?, ?, ?)");
        $stmt ->bind_param('s', $_POST['username']);
        $stmt->execute();
        $result = $stmt->get_results();
        $user = $result->fetch_object();
        
        return $user;
    }
require_once 'index.php';
?>