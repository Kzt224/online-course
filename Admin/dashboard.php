<?php 
require_once "templete/header.php";
// require_once "../database/checkAuthStore/authCheck.php";
// checkAuth();
?>

<!-- content section for dashboards -->
 <section>
     <!-- content session -->
     <div class="content ">
                <div class="item-cont flex align-items-center justify-content-center">
                   <div class="row mt-5 ml-1 p-3 cus-row overflow-auto">
                     <div class="col-lg-4 col-sm-1 cat-content mt-2 p-3">
                       <a href="" class="text-decoration-none text-dark">
                        <div class="card d-flex bg-warning">
                          <div class="icon-contain">
                            <i class="fa-solid fa-users-gear fa-xl text-dark"></i>
                            <p class="mt-0 mb-0 fw-bold fs-5 mx-2">Manage Student</p>
                          </div>
                     </div>
                       </a>
                     </div>
                     <div class="col-lg-4 col-sm-1 cat-content mt-2 p-3">
                      <a href="" class="text-decoration-none text-dark">
                       <div class="card d-flex bg-warning">
                         <div class="icon-contain">
                           <i class="fa-solid fa-chalkboard-user fa-xl text-dark"></i>
                           <p class="mt-0 mb-0 fw-bold fs-5 mx-2">Manage Course</p>
                         </div>
                    </div>
                      </a>
                    </div>
                    <div class="col-lg-4 col-sm-1 cat-content mt-2 p-3 mb-lg-0 mb-md-0 mb-5">
                      <a href="" class="text-decoration-none text-dark">
                       <div class="card d-flex bg-warning">
                         <div class="icon-contain">
                           <i class="fa-solid fa-money-bill-1 fa-xl text-dark"></i>
                           <p class="mt-0 mb-0 fw-bold fs-5 mx-2">Mananage payment</p>
                         </div>
                    </div>
                      </a>
                    </div>
                    </div>
                   </div>
                </div>
             </div>
            <!-- end content session -->
 </section>
 <!-- end content section -->
<?php 
require_once "templete/footer.php";