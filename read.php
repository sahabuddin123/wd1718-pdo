<?php
include_once('./pdo.php');
if($dbh){
$sql = "SELECT * FROM `student_info`";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | Bootstrap</title>
	<!-- Bootstrap 4.5.3 CSS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container py-5 text-right">
        <a href="form.html" class="btn btn-success">Insert</a>
    </div>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Date of birth</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($row as $key => $value){
?>
    <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['email']; ?></td>
        <td><?php if($value['gender'] == 1){ echo "Male";}elseif($value['gender'] == 2){ echo "Female";}else{echo "Others";} ?></td>
        <td><?php
        $date = date('d-M-Y', strtotime($value['dob']));
        echo $date;
        ?></td>
        <td>
            <a href="edit.php?id=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
            <a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
<?php
}
}
else{
    echo "Database Connection Fail";
}
?>
</tbody>
</table>
<!-- Jquery-3.5 JS -->
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
	<!-- Popper JS -->
	<script src="assets/js/popper.min.js"></script>
	<!-- Bootstrap-4.5.6 JS -->
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>