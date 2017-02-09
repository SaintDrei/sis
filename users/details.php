<?php
 if (isset($_REQUEST['no'])){
     include '../config.php';
     $query = "SELECT studentID, studentNo, studentLN, studentFN, studentCourse, studentStatus, studentEmail FROM users WHERE studentNo=" . $_REQUEST['no'];
     $results = $con->query($query);
     
     if (mysqli_num_rows($results) > 0){
         while ($row=mysqli_fetch_array($results)){
             $id = $row['studentID'];
             $no = $row['studentNo'];
             $ln = $row['studentLN'];
             $fn = $row['studentFN'];
             $email = $row['studentEmail'];
             $course = $row['studentCourse'];
             
         }
         
         if(isset($_POST['update']))
         {
            $studentNo = mysqli_real_escape_string($con, $_POST['no']);
            $studentLN = mysqli_real_escape_string($con, $_POST['ln']);
            $studentFN = mysqli_real_escape_string($con, $_POST['fn']);
            $studentEmail = mysqli_real_escape_string($con, $_POST['email']);
            $studentPassword =hash('sha256', 		mysqli_real_escape_string($con, $_POST['pw']));
            $studentCourse = mysqli_real_escape_string($con, $_POST['course']);
             
             $query_update = "UPDATE users SET 
             studentNo=" . $studentNo . ", 
             studentLN=" . $studentLN . ", 
             studentFN=" . $studentFN . ", 
             studentEmail=" . $studentEmail . ",
             studentCourse=" . $studentCourse . ",
             dateModified=NOW() WHERE studentID=" . $id;

         } else{
             
         }
     } else {
         header('location: index.php');
     }
 } else {
     header('location: index.php');
 }
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
								class="form-control"  <?php echo $no; ?> required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Last Name
						</label>
						<div class="col-lg-8">
							<input name="ln" type="text"
								class="form-control" <?php echo $ln; ?> required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							First name
						</label>
						<div class="col-lg-8">
							<input name="fn" type="text"
								class="form-control" <?php echo $fn; ?> required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Email Address
						</label>
						<div class="col-lg-8">
							<input name="email" type="email"
								class="form-control" <?php echo $email; ?> required />
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
								class="form-control" value='<?php echo $course; ?>' required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-4 col-lg-8">
							<button name="update"
								class="btn btn-success">
								Update
							</button>
                            <a href="index.php" class="btn btn-default">
                            Back to View 
                            </a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

