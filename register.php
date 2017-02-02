<?php
# write comment here
// write other comment here
/* 
write comment
here 
*/
include 'config.php';

if (isset($_POST['register'])){
    $studentNo = mysqli_real_escape_string($con, $_POST['no']);
    $studentLN = mysqli_real_escape_string($con, $_POST['ln']);
    $studentFN = mysqli_real_escape_string($con, $_POST['fn']);
    $studentEmail = mysqli_real_escape_string($con, $_POST['email']);
    $studentPassword = hash('sha256', mysqli_real_escape_string($con, $_POST['pw']));
    $studentCourse = mysqli_real_escape_string($con, $_POST['course']);
    $query = "INSERT INTO users VALUES ('', '$studentNo', '$studentLN', '$studentFN', '$studentEmail', '$studentPassword', '$studentCourse', 'Pending', NOW(), NULL)";

    $result = mysqli_query($con, $query);
    header('location: login.php');
}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Stuent Registration</title>
		<link href="http://bootswatch.com/darkly/bootstrap.min.css" rel="stylesheet"/>
<!--		<link href="http://bootswatch.com/cyborg/bootstrap.min.css" rel="stylesheet"/>-->
<!--        <link href="css/bootstrap.min.css" rel="stylesheet" />-->
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Student Registration</h1>
			<div class="col-lg-offset-3 col-lg-6 well">
				<form method="POST" class="form-horizontal">
					<div class="form-group">
						<label class="col-lg-4 control-label">Student Number</label>
						<div class="col-lg-6">
							<input type="number" name="no" class="form-control" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">Last Name</label>
						<div class="col-lg-6">
							<input type="text" name="ln" class="form-control" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">First Name</label>
						<div class="col-lg-6">
							<input type="text" name="no" class="form-control" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">Email</label>
						<div class="col-lg-6">
							<input type="text" name="email" class="form-control" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">Password</label>
						<div class="col-lg-6">
							<input type="password" name="pwd" class="form-control" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">Course</label>
						<div class="col-lg-6">
							<input type="text" name="course" class="form-control" required/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-6-offset-4 col-lg-8 control-label">
							<button name="register" class="btn btn-success">Register</button>
						</div>
					</div>
				</form>
			</div>
	</body>
</html>