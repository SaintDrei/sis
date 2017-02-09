<?php
 
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>User ID <?php echo $id; ?> Details</title>
		<link href="http://bootswatch.com/spacelab/bootstrap.min.css"
			rel="stylesheet" />
        
		<link href="http://bootswatch.com/darkly/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">User ID<?php echo $id; ?> Details</h1>
			<div class="col-lg-offset-3 col-lg-6 well">
				<form method="POST" class="form-horizontal">
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Student Number
						</label>
						<div class="col-lg-8">
							<input name="no" type="number"
								class="form-control" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Last Name
						</label>
						<div class="col-lg-8">
							<input name="ln" type="text"
								class="form-control" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							First name
						</label>
						<div class="col-lg-8">
							<input name="fn" type="text"
								class="form-control" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Email Address
						</label>
						<div class="col-lg-8">
							<input name="email" type="email"
								class="form-control" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Password
						</label>
						<div class="col-lg-8">
							<input name="pw" type="password"
								class="form-control" required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Course
						</label>
						<div class="col-lg-8">
							<input name="course" type="text"
								class="form-control" required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-4 col-lg-8">
							<button name="register"
								class="btn btn-success">
								Register
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>


<!--

<!DOCTYPE HTML>
<html>
	<head>
		<title>Stuent Registration</title>
		<link href="http://bootswatch.com/darkly/bootstrap.min.css" rel="stylesheet"/>
-->
<!--		<link href="http://bootswatch.com/cyborg/bootstrap.min.css" rel="stylesheet"/>-->
<!--        <link href="css/bootstrap.min.css" rel="stylesheet" />-->
<!--
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
</html>-->
