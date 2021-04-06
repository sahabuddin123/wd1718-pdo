<?php
include_once("./pdo.php");

	if($dbh){
		$sql = "INSERT INTO `student_info`(`name`, `email`, `gender`, `dob`) VALUES (:name,:email,:gender,:dob)";
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(":name", $_REQUEST['username']);
		$stmt->bindParam(":email", $_REQUEST['email']);
		$stmt->bindParam(":gender", $_REQUEST['gender']);
		$stmt->bindParam(":dob", $_REQUEST['dob']);
		$stmt->execute();
		header("location:read.php");
		echo "Insert Success!";
	}
	else{
		echo "Database Connection Fail!";
	}	