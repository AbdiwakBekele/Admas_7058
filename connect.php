<?php

		$conn = mysqli_connect("localhost", "root", "", "staff");
		
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$firstname = $_REQUEST['firstname'];
    $middlename = $_REQUEST['middlename'];
		$lastname = $_REQUEST['lastname'];
		$gender = $_REQUEST['gender'];
		$idno = $_REQUEST['idno'];
		$recieptno = $_REQUEST['recieptno'];
    $departmentname = $_REQUEST['departmentname'];
    $attendanceyear = $_REQUEST['attendanceyear'];

	
		$sql = "INSERT INTO degree VALUES ('$firstname','$middlename',
			'$lastname','$gender','$idno','$recieptno','$departmentname','$attendanceyear')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

		
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>
