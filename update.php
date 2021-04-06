<?php
include_once('./pdo.php');
if($dbh){
    $sql = "UPDATE `student_info` SET `name` = :name, `email` = :email, `gender` = :gender, `dob` = :dob WHERE `id` = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":name", $_REQUEST['username']);
    $stmt->bindParam(":email", $_REQUEST['email']);
    $stmt->bindParam(":gender", $_REQUEST['gender']);
    $stmt->bindParam(":dob", $_REQUEST['dob']);
    $stmt->bindParam(":id", $_REQUEST['id']);
    if($stmt->execute()){
    header("location:read.php");
    }
    else{
        header("location: edit.php");
    }
}