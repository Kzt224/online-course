
<?php
  require_once "../database/checkAuthStore/authCheck.php";
  require_once "../database/query/userQuery.php";
  checkAuth();
  $id = $_SESSION['user_id'];
  $res =  getUserWithId($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alpha Online Course</title>
</head>
  <style>
     body{
    font-family: inherit;
}
  </style>
<body>
     <!-- navbar section -->
     <nav class="navbar navbar-light nav-expend-lg sticky-top bg-secondary p-4 " style="position: relative;" >
          <div class="container-fluid justify-between flex-1">
             <div class="logo " id="hide_show">
               <div class=" d-flex d-md-none btn">
                <i class="fa-solid fa-bars fa-lg"></i>
               </div>
             </div>
             <div class="flex flex-column">
                <a href="" class="p-2 align-center rounded bg-dark text-decoration-none link-warning mx-2 p-2">
                    <i class="fa-solid fa-gear"></i>
                    <span class="d-none d-md-inline flex-column">Setting</span>
                </a>
                <a href='adminlogout.php' class="p-2 align-center rounded bg-dark text-decoration-none link-warning mx-2">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="d-none d-md-inline flex-column">Logout</span>
                </a>
             </div>
          </div>
        </nav>
        <!-- end navbar section -->
           <aside class="side-bar mt-0 bg-secondary" id="hide_div" >
             <div class="upper">
                <h5 class=" text-warning text">
                  <i class="fa-solid fa-robot fa-xl"></i>
                  <span>
                    <?php
                      echo($res->name);
                    ?>
                </span>

                </h5>
             </div>
               <ul class="link  mx-auto p-1 list-unstyled align-center w-full mt-2 overflow-auto">
                 <li class="rounded  p-2 mt-3">
                    <a href="" class="text-decoration-none text-warning fw-bold">
                      <i class="fa-solid fa-gauge fa-xl">
                      </i>
                      Dashboard
                    </a>
                 </li>
                 <li class="rounded  p-2 mt-3">
                  <a href="" class="text-decoration-none rounded w-100% text-success fw-bold">
                    <i class="fa-solid fa-chalkboard-user fa-xl"></i>
                    Course
                  </a>
               </li>
               <li class="rounded  p-2 mt-3">
                <a href="" class="text-decoration-none text-danger fw-bold">
                  <i class="fa-solid fa-money-bill fa-xl"></i>
                  Payment
                </a>
             </li>
             <li class="rounded  p-2 mt-3">
              <a href="" class="text-decoration-none text-primary fw-bold">
                <i class="fa-solid fa-users fa-xl"></i>
                Students
              </a>
           </li>
               </ul>
           </aside>

    <!-- end nav bar section -->