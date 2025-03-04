<?php
require_once "../database/query/courseQuery.php";


if(($_SERVER['REQUEST_METHOD']) === "POST"){
    $name = $_POST['course_name'];
    $description = $_POST['description'];
    $amount = $_POST['fee'];
    
    $res = addCourse($name,$description,$amount);

    if($res['success']){
        session_start();
        $_SESSION['success'] = "Add course successful!.";
        header("location: course.php");
        exit();
       }else{
        echo $res['message'];
       }
}