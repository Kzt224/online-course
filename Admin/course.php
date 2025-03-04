<?php 
require_once "templete/header.php";
require_once "../database/query/courseQuery.php";

$datas= getCourse();
?>
<!-- section for course page -->
<!-- content section for dashboards -->
<section>
     <!-- content section -->
     <div class="content p-3">
             <div class="container-fluid ">
               <div class="row d-flex p-4 mt-5 overflow-auto   content-container">
                <?php 
                   foreach($datas as $data){
                    ?> 
                       <div class="col-12 d-flex justify-content-center align-items-center p-2 inner-container ">
                          <div class=" d-flex flex-column flex">
                                <!-- text content -->
                                  <div class="text-cont d-flex flex-row justify-content-between align-items-center p-3 ">
                                    <p class="t-white d-flex p-0 m-0"><?= $data->description ?></p>
                                    <a href="" class="d-flex text-decoration-none m-0 mx-2 p-0 px-2 justify-content-center align-items-center rig">
                                      <p class="t-white px-1 d-flex p-0 m-0 py-1">Draft</p>
                                    </a>
                                  </div>
                                  <!-- edit delete public -->
                                  <div class="d-flex flex-row mx-3 mb-1">
                                      <a href="coursePublic.php" class="d-flex text-decoration-none px-1 t-green m-0 mx-2 p-0 align-items-center justify-content-center">
                                        <i class="fa-regular fa-circle p-0 m-0 px-2"></i>
                                        <p class="m-0 p-0">Public</p>
                                      </a>
                                      <a href="courseEdit.php" class="d-flex text-decoration-none px-2 t-blue m-0 mx-2 p-0 align-items-center justify-content-center">
                                        <i class="fa-solid fa-pencil p-0 m-0 px-2"></i>
                                      </a>
                                      <a href="courseDelete.php" class="d-flex text-decoration-none px-2 t-red m-0 mx-2 p-0 align-items-center justify-content-center">
                                        <i class="fa-solid fa-trash p-0 m-0 px-2"></i>
                                      </a>
                                  </div>
                          </div>
                       </div>
                     <?php
                   }
                ?>
               </div>
             </div>
           </div>
         <!-- end content section -->
 </section>
 <!-- end content section -->
<!-- end section -->
 <?php
 require_once "templete/footer.php";