<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/form.css" type="text/css">
</head>
<body>
    <div class="container mb-5">
        <div class="img-box">
         <img src="./public/images/logo.png" alt="logo" style="width:80px;">
        </div>
        <h2>Register with us</h2>
        <form class="form" action="" method="">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" autocomplete="off">
            </div>

            <button type="button" class="btn">Sign Up</button>
            <p class="text-white fw-bold text-center">If you have an account?
                <a href="login.php" class="d-inline text-decoration-none ">Login </a>
            </p>
            
        </form>
    </div>
</body>
</html>