
<?php

session_start();
function checkAuth()
{
   if(!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit();
   }
}
