<?php
include_once('./pdo.php');
if($dbh){
    $sql = "DELETE FROM `student_info` WHERE `id` = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":id", $_REQUEST['id']);
    if($stmt->execute()){
    header("location:read.php");
    }
    else{
       echo "Oops! Please Try again.";
    }
}