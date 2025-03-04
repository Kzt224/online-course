<?php
  require_once "templete/header.php";
?>


<!-- content section for dashboards -->
<section>
     <!-- content section -->
     <div class="content p-3">
             <div class="container-fluid ">
               <div class="row d-flex p-4 mt-5 overflow-auto   content-container">
                  <div class="col-12 d-flex  align-items-center justify-content-center p-2 inner-container ">
                    <div class=" d-flex flex-column flex-1  w-75">
                        <h5 class="t-white text-center fw-bold mt-2">Add Course</h5>
                        <form action="createCourse.php" class="form-group" method="POST">
                           <label for="name" class="t-white">Course Name</label>
                           <input type="text" placeholder="Enter course name" id="name" name="course_name" required class="form-control mb-2 w-100">
                           <label for="description" class="t-white">Description</label>
                           <textarea name="description" id="description" class="form-control mb-2" placeholder="Course Description"></textarea>
                           <label for="ammount" class="t-white">Ammount</label>
                           <input type="number" class="form-control mb-3" name="fee">
                           <button class="btn btn-primary " type="submit">Submit</button>
                        </form>
                    </div>
                  </div>
               </div>
             </div>
    </div>
         <!-- end content section -->
 </section>
 <!-- end content section -->
<?php
require_once "templete/footer.php";