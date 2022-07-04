<?php
    include 'database.php';
    session_start();
    if(isset($_POST['login'])){
        $username =  $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $connect->query($query);
        $_SESSION['result'] = $query;
        
        header('Location: home.php');
    }
?>