<?php
include_once('./pdo.php');
if($dbh){
    $sql = "SELECT * FROM `student_info` WHERE `id` = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":id", $_REQUEST['id']);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    extract($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | Bootstrap</title>
	<!-- Bootstrap 4.5.3 CSS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		.mx-h-50{
			max-height: 50px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
		<a href="#" class="navbar-brand">
			<img src="https://satech360.com/wp-content/uploads/2020/10/logo.png" alt="" class="mx-h-50">
		</a>
		<a href="#navBtn" role="button" class="navbar-toggler" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>
		</a>
		<div class="collapse navbar-collapse" id="navBtn">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a href="#" class="nav-link font-weight-bold">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link font-weight-bold">Services</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link font-weight-bold">Shop</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link font-weight-bold">About Us</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link font-weight-bold">Contact Us</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- Contact Form -->
   
	<div class="bg-dark">
		<div class="container">
			<h1 class="text-center pt-5 text-light">CONTACT US</h1>
			<p class="text-center text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente deleniti <br> dolorum pariatur ratione id tenetur corrupti, laboriosam in, debitis aperiam?</p>
			
			<div class="row py-5">
				<div class="col-md-6">
					<form action="update.php" method="post">
						<div class="card">
							<div class="card-body">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
								<div class="form-group">
									<label for="username">Name <span class="text-danger">*</span></label>
									<input type="text" name="username" id="username" class="form-control" value="<?php echo $name; ?>">
								</div>
								<div class="form-group">
									<label for="email">Email <span class="text-danger">*</span></label>
									<input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
								</div>
								<div class="form-group">
									<label for="dob">DOB <span class="text-danger">*</span></label>
									<input type="date" name="dob" id="dob" class="form-control" value="<?php echo $dob; ?>">
								</div>
								<div class="form-group">
									<label for="gender">Gender</label>
									<select name="gender" id="gender" class="form-control">
										<option value="1" <?php if($gender == 1) {echo "selected";}?>>Male</option>
										<option value="2" <?php if($gender == 2) {echo "selected";}?>>Female</option>
										<option value="3" <?php if($gender == 3) {echo "selected";}?>>Others</option>
									</select>
								</div>
								
								<div class="text-center">
									<button class="btn btn-success" type="submit">Send</button>
									<!-- <button class="btn btn-danger" type="reset">Clear</button> -->
                                    <a href="read.php" class="btn btn-danger">Cancle</a>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.1588577277403!2d91.12366001443515!3d22.63554923636279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754ad4b93e01151%3A0x21b65fdbe8071a26!2sINNOVA%20Computers%20BD!5e1!3m2!1sen!2sbd!4v1617515661876!5m2!1sen!2sbd" width="100%" height="560" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Jquery-3.5 JS -->
	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
	<!-- Popper JS -->
	<script src="assets/js/popper.min.js"></script>
	<!-- Bootstrap-4.5.6 JS -->
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>