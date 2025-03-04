<?php

  require_once "../database/libs/config.php";
  


function getCourse(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM courses");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function addCourse($name,$description,$amount){
    global $conn;
    
    try {
        $stmt = $conn->prepare("INSERT INTO courses(name,description,amount) VALUE(?,?,?)");
        $res = $stmt->execute([$name,$description,$amount]);

        if($res){
            return ['success' => true, "message" => "Add course successfully!"];
        }else{
            return ['success' => false, "message" => "Add couruse fail!"];
        }

    } catch (PDOException $e) {
        return ['success' => false, "message" => $e->getMessage()];
    }

}
