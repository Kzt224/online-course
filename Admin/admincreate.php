<?php
require_once "../database/query/userQuery.php";

if(($_SERVER['REQUEST_METHOD'] === "POST")){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

   $res =  Signup($email,$name,$password);

   if($res['success']){
    session_start();
    $_SESSION['success'] = "Signup successful! Please login.";
    header("location: login.php");
    exit();
   }else{
    echo $res['message'];
   }


}