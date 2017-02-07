<?php
    include '../config.php';
	$query = "SELECT studentNo, studentLN, studentFN AS studentName, studentEmail, studentCourse, studentEmail, studentStatus, dateCreated, dateModified FROM users";

	$results = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>View Users</title>
		<link href="http://bootswatch.com/spacelab/bootstrap.min.css"
			rel="stylesheet" />
        
		<link href="http://bootswatch.com/darkly/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container">
            
			<h1 class="text-center">View Users</h1>
            <div class="col-lg-12 well">
                <table class="table table-hover">
                    <thead>
                        <th>Student #</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Course</th>
                        <th>Status</th>
                        <th>Added On</th>
                        <th>Last Modified</th>
                        
                    </thead>
                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_array($results)){
                                $no = $row['studentNo'];
                                $name = $row['studentLN'] + ', ' + $row['studentFN'];
                                $email = $row['studentEmail'];
                                $course = $row['studentCourse'];
                                $status = $row['studentStatus'];
                                $added = new DateTime( $row['dateCreated']);
                                $modified = new DateTime ($row['dateModified']);
                                
                                echo "<tr>
                                        <td>" . $no . "</td>
                                        <td>" . $name . "</td>
                                        <td>" . $email . "</td>
                                        <td>" . $course . "</td>
                                        <td>" . $status . "</td>
                                        <td>" . $added->format('f d, Y g:A') . "</td>
                                        <td>" . $modified->format('f d, Y g:A') . "</td>
                                        <td><a href='details.php?no='" . $no . "'>Edit</a></td>
                                    </tr>";
                                
                                
                            }
                        ?>
                    </tbody>
                </table>
            </div>
			
		</div>
	</body>
</html>
