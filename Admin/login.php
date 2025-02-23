<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style/form.css" type="text/css">
</head>
<body>
    <div class="container">
            <?php
              session_start();
              if(isset($_SESSION['error'])){
                ?> 
                 <div><?= $_SESSION['error'] ?></div>
                <?php
                session_destroy();
              }
            ?>
        <h2>Login</h2>
        <form class="form" action="adminlogin.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" autocomplete="off">
            </div>

            <button type="submit" class="btn">Login</button>
            <a href="signup.php" class="signupbtn">Sign Up</a>
        </form>
    </div>
</body>
</html>