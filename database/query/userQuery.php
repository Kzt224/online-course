<?php
$config = require_once "../database/libs/config.php";

function getUser() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function getUserWithId($id){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
    $stmt->execute([$id]);
   return $user = $stmt->fetch(PDO::FETCH_OBJ);
}

function login($email,$password)
{
    global $conn;
          if(!$email || !$password){
            session_start();
            $_SESSION['error'] = "all field required";
            header("location: login.php");
            exit();
          }
        try {
            $stmt  = $conn->prepare("SELECT * FROM users WHERE email= ? ");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_OBJ);

            if(!$user) {
                session_start();
                $_SESSION['error'] = "User not found";
                header("location: login.php");
            }

            if(!password_verify($password,$user->password)){
                session_start();
                $_SESSION['error'] = "Incorrect password";
                header("location: login.php");         
               }else{
                session_start();
                $_SESSION['user_id'] = $user->id;
                return ["success" => true,"message" => "Login successfully!"];
            }
    } catch (PDOException $e) {
        return ['sussess' => false,"message" => $e->getMessage()];
    }

}


function Signup($email, $name, $password, $role = 0){
    global $conn;

    // Validate required fields
    if (empty($email) || empty($name) || empty($password)) {
        session_start();
        $_SESSION['error'] = "All fields are required";
        header("location: signup.php");
        exit();
    }

    // Check password length
    if (strlen($password) < 8) {
        session_start();
        $_SESSION['error'] = "Password must be at least 8 characters";
        header("location: signup.php");
        exit();
    }

    try {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if ($user) {
            session_start();
            $_SESSION['error'] = "Email already exists. Please login first.";
            header("Location: login.php");
            exit();      
          }

        // Hash the password before storing
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
        $res = $stmt->execute([$name, $email, $hashedPassword, $role]);

        if ($res) {
            return ['success' => true, "message" => "Signup successful!"];
        } else {
            return ["success" => false, "message" => "Error in signup query"];
        }
    } catch (PDOException $e) {
        return ['success' => false, "message" => $e->getMessage()];
    }
}

function logout(){
     session_start();
     if(isset($_SESSION['user_id'])){
        session_destroy();
        header('location: login.php');
     }
}

