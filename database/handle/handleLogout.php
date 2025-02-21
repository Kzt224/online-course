<?php

if($_SERVER['REQUEST_METHOD'] === "GET"){
    session_start();
    if(isset($_SESSION['user_id'])){
        $_SESSION['user_id'] = null;
        header("location: login.php");
    }
}