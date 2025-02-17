<?php
require_once "templete/header.php";
?>
<!-- login page section start -->
 <section>
     <h2>Hello i am login</h2>
     <form action="handle/handleLogin.php" method="POST">
        <input type="email" placeholder="email" name="email"><br>
        <input type="password" placeholder="password" name="password"><br>
        <button type="submit">Login</button>
     </form>
 </section>
 <!-- end login page section -->
<?php
 require_once "templete/footer.php";