		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		if(isset($_POST['submit'])){
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$cname = $_REQUEST['cname'];
		$ename = $_REQUEST['ename'];
		$pnum = $_REQUEST['pnum'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$first_name',
			'$last_name','$gender','$cname','$ename','$pnum','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored successfully.</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		}
		
		// Close connection
		mysqli_close($conn);
		?>
<!DOCTYPE html>
<html lang="en">

<head>


	<title>MPTI</title>
</head>

<body>
	<center>
		
		<h1 >Muthayammal Polytechnic Institution</h1>
		<hr>
		<hr>
		</center>
						&nbsp;
				&nbsp;
					&nbsp;
		<font face="cinzel" size="3">
		<a href="view.php">HOME</a>		&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
		<a href="delete.php">delete</a>
		
		<hr>
		<center>
		<form method="post">
			<div id = "frm">  
			<h2 style="color:Tomato;">REGITERATION FORM </h2>
							&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
					&nbsp;
			<h3>
			<p>
				<label for="firstName">First Name:</label>
				&nbsp;
					&nbsp;
				
				<input type="text" name="first_name" id="firstName"  required>
			</p>
			
			<p>
				<label for="lastName">Last Name:</label>
				&nbsp;
					&nbsp;
					
				<input type="text" name="last_name" id="lastName"  required>
			</p>
			
			<p>
				<label for="Gender">Gender:</label>
				&nbsp;
					&nbsp;
						&nbsp;
							&nbsp;
				<input type="text" name="gender" id="Gender" required >
			</p>
			<p>
				<label for="Cname">Collage Name</label>
	
	
				<input type="text" name="cname" id="Cname"  required>
			</p>
			<p>
				<label for="Ename">Event name:</label>
				<input type="text" name="ename" id="Ename"  required>
			</p>
			<p>
				<label for="Pnum">Phone number : </label>
				<input type="text" name="pnum" id="Pnum"  required>
			</p>
			
			
			<p>
				<label for="Address">Address:</label>
				&nbsp;
					&nbsp;
						&nbsp;
					&nbsp;
				<input type="text" name="address" id="Address"  required>
			</p>
			
			
			<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="emailAddress"  required>
			</p>
			
			<input type="submit" value="submit" name="submit">
			</div>
		</form>
	</center>
</body>
</html>