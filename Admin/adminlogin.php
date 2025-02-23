<?php

require_once "../database/query/userQuery.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = login($email,$password);

    if($res['success']){
        session_start();
        $_SESSION['success'] = "Login successfully";
        header("location: dashboard.php");
    }else{
        echo $res['message'];
    }
}