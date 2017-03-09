<?php
    include '../config.php';
	$query = "SELECT studentNo, studentLN, studentFN, studentEmail, studentCourse, studentEmail, studentStatus, dateCreated, dateModified FROM users";

	$results = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>View Users</title>
		<link href="http://bootswatch.com/spacelab/bootstrap.min.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
		<link href="http://bootswatch.com/darkly/bootstrap.min.css" rel="stylesheet"/>
        <link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	</head>
	<body>
		<div class="container">
            
			<h1 class="text-center">View Users</h1>
            <div class="col-lg-12 well">
                <table id="tblUsers" class="table table-hover">
                    <thead>
                        <th>Student #</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Course</th>
                        <th>Status</th>
                        <th>Added On</th>
                        <th>Last Modified</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_array($results)){
                                $no = $row['studentNo'];
                                $name = $row['studentLN'] . ', ' . $row['studentFN'];
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
                                        <td><a class='btn btn-xs btn-info'  href='details.php?no=" . $no . "'><i class='fa fa-edit'></i></a></td>
                                    </tr>";
                                
                                
                            }
                        ?>
                    </tbody>
                </table>
            </div>
			
		</div>
        <script>
            $(document).ready(function(){
                $('#tblUsers').DataTable();
            })
        </script>
	</body>
</html>
