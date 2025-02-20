<?php
require_once "./libs/config.php";

function getUser() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function login($email,$password)
{
    global $conn;
          if(!$email || $password){
            session_start();
            $_SESSION['error'] = "all field required";
            header("location: login.php");
            exit();
          }
        try {
            $stmt  = $conn->prepare("SELECT * FROM users WHERE email= ? ");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_OBJ);

            if(!$user) return ['success' => false,'message' => "incorrect credential"];

            if(!password_verify($password,$user->password)){
                return ['success' => false,'message' => "Incorrect password"];
            }else{
                session_start();
                $_SESSION['user_id'] = $user->id;
                return ["success" => true,"message" => "Login successfully!"];
            }
    } catch (PDOException $e) {
        return ['sussess' => false,"message" => $e->getMessage()];
    }

}

function Signup($email,$name,$password,$role = 0)
{
    global $conn;
    if(!$email || $name || $password){
        session_start();
        $_SESSION['error'] = "All field are required";
        header("location: signup.php");
        exit();
    }
    if($password && strlen($password < 8)){
        session_start();
        $_SESSION['error'] = "Password must be at least 8 charactres";
        header("location: signup.php");
        exit();
    }
    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        
        if($user){
            return ['success' => false,'message' =>  "email already exit.Please login first"];
        }
    
        $stmt = $conn->prepare("INSERT INTO users (name,email,password,role) VALUES (?,?,?,?)");
        $res =  $stmt->execute([$name,$email,$password,$role]);
       
        if($res){
            return ['success'=>true,"message" => "Signup successfully!"];
        }else{
           return ["success" => false,"message" => "error on signup query"];
        }
    } catch (PDOException $e) {
        return ['success' => false,"message" => $e->getMessage()];
    }
}