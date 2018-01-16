<?php
    session_start();
    $_SESSION['teacher'] = $_POST['username'];
    
    require_once('getDB.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $selector = $_POST['options'];
    echo $selector;

    if($selector == "1"){
        $q = "SELECT * FROM `login` WHERE `email` = '$username' AND `password` = '$password'";
        $res = mysqli_query($con, $q);
        $row = mysqli_fetch_array($res);
        if($row)
            header('location: dashboard.php');
        else
            header('location: index.php');
    }