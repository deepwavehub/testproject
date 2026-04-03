<!DOCTYPE html>
<html>


<body>
	<center>
		<?php

		// servername => sql311.byetcluster.com in cloud rds endpoint
		// username => if0_36247731 
		// password => bi0Sri5cu4
		// database name => if0_36247731_COMP166DB
        // table name = > Customer
        
		//$conn = mysqli_connect("sql311.byetcluster.com", "if0_36247731", "bi0Sri5cu4", "if0_36247731_COMP166DB");
		
		$conn = mysqli_connect("deepwave.c2zqy2msopal.us-east-1.rds.amazonaws.com", "admin", "Spruce2020.", "Customer");

		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 3 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$tel = $_REQUEST['tel'];
		
		
		
		// Performing insert query execution
		// here our table name is Customer
        
		$sql = "INSERT INTO Customer VALUES ( customerid, '$name',
			'$email', '$tel')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			//echo nl2br("\n$first_name\n $last_name\n "
				//. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
