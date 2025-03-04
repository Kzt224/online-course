
<?php
  require_once "../database/checkAuthStore/authCheck.php";
  require_once "../database/query/userQuery.php";
  checkAuth();
  $userId = $_SESSION['user_id'];
  $user = getUserWithId($userId);
//   get default page
  $currentPage = basename($_SERVER['SCRIPT_NAME']);
//   /get current page and set add from header to "currentAdd.php"
  $routes = [
    "course.php" => "courseAdd.php",
    "class.php" => "classAdd.php",
  ];
//   <!-- set current page and href to currentpageAdd.php -->
    $currentAdd = isset($routes[$currentPage]) ? $routes[$currentPage] : "/";
    $currentName = pathinfo($currentPage,PATHINFO_FILENAME);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/main.css" type="text/css">

    <title>Alpha Online Course</title>
</head>
  <style>
     body {
    font-family: Arial, sans-serif;
    background-color: rgba(16,22,34,255);
    overflow: hidden;
}
  </style>
<body>
    <!-- top nav bar -->
   <div class="nav d-flex p-2 sticky-top top-nav" style="z-index:10000">
          <div class="container-fluid d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="d-flex justify-content-center align-items-center py-2">
                <h5 class="t-white d-flex m-0 p-0 fw-bold mx-0 mx-lg-3">AlphaCourse</h5>
                <a href="/" class="text-decoration-none d-flex t-white m-0 p-0 mx-lg-3 mx-1  ">
                    <p class="m-0 p-0 px-2">Home</p>
                </a>
                <a href="/" class="text-decoration-none d-flex t-white m-0 p-0 mx-1 mx-lg-2 ">
                    <p class="m-0 p-0 px-2">Calender</p>
                </a>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a href="/" class="text-decoration-none d-flex t-white m-0 p-0 px-2 ">
                    <i class="fa-solid fa-sun"></i>
                </a>
                <a href="/" class="text-decoration-none d-flex t-white m-0 p-0 px-2 ">
                    <i class="fa-solid fa-bell"></i>
                </a>
                <div class="dropdown">
                    <a class=" dropdown-toggle t-white text-decoration-none px-1 dd-sty" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?= $user->name ?>
                    </a>
                  
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                      <li><a class="dropdown-item" href="setting.php">Setting</a></li>
                      <li><a class="dropdown-item" href="adminlogout.php">Logout</a></li>
                    </ul>
                  </div>
            </div>
          </div>
       </div>
   <!--  end top nav -->
   <!--  second nav -->
   <div class="d-flex flex-row second-nav sticky-top">
              <div class="container-fluid d-flex justify-content-between align-items-center p-4">
                 <div class="d-flex left justify-content-center align-items-center">
                    <i class="fa-solid fa-bars fa-lg t-white d-lg-none d-md-flex" type="button" id="hide-btn"></i>
                     <h5 class="t-white mx-3 px-2 m-0 p-0"><?= $currentName ?></h5>
                 </div
                 <div class="d-flex justify-content-center align-items-center ">
                    <?php 
                      if($currentPage == 'dashboard.php' || $currentPage == "courseAdd.php"){
                        ?> 
                            <div class="d-flex  align-items-center justify-content-between ">
                            </a>
                        <?php
                      }else{
                        ?> 
                           <a href="<?= $currentAdd ?>" class="d-flex text-decoration-none t-white align-items-center justify-content-between tex">
                                <i class="fa-solid fa-plus fa-lg t-white px-1" type="button"></i>
                                <p class="m-0 p-0 px-2 ">Add <?= $currentName?></p>
                            </a>
                         <?php
                      }
                    ?>
                </div>
              </div>
          </div>
   <!-- /* end second nav */ -->
   <!-- /* sidebar */ -->
   <div class="d-flex flex-column side-bar" id="side-bar">
             <div class="d-flex flex-column  mt-5 p-3">
                <a href="dashboard.php" class="  d-flex text-decoration-none t-white mt-3 mx-3  rounded p-2
                align-items-center justify-content-start">
                    <i class="fa-solid fa-gauge px-2 fa-lg"></i>
                    <p class="p-0 m-0 px-3 ">Dashboard</p>
                </a>
                <a href="course.php" class="d-flex text-decoration-none t-white mt-3 mx-3  rounded p-2
                align-items-center justify-content-start">
                    <i class="fa-solid fa-chalkboard-user px-2 fa-lg"></i>
                    <p class="p-0 m-0 px-2">Course</p>
                </a>
                <a href="classes.php" class="d-flex text-decoration-none t-white mt-3 mx-3  rounded p-2
                align-items-center justify-content-start">
                    <i class="fa-solid fa-users px-2 fa-lg"></i>
                    <p class="p-0 m-0 px-2">Classes</p>
                </a>
                <a href="payment.php" class="d-flex text-decoration-none t-white mt-3 mx-3  rounded p-2
                align-items-center justify-content-start">
                     <i class="fa-solid fa-money-bill-1-wave fa-lg px-2"></i>
                     <p class="p-0 m-0 px-2">Payment</p>
                </a>
             </div>
         </div>
   <!-- /* end sidebar */ -->