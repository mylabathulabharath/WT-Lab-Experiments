<?php
	echo "<center>Registration successful</center> ";
	echo "<br>";
	$Username = $_POST["uname"];
	$email    = $_POST["eid"];
	$dob      = $_POST["DOB"] ;
	$religion = $_POST["rel"];
	$pass=$_POST["pwd"];
	echo"<div  align=center>";
	echo "Username is $Username";
	echo "<br>";
	echo "Email is $email";
	echo "<br>";
	echo "DOB is $dob";
	echo "<br>";
	echo "Religion is $religion";
	echo "<br>";
	echo "Password is *****";
	echo "<br>";
	echo"</div>";
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'form';

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if ($conn)
	{
		echo "<center>Connection successful.</center><br>";

	}
	else
	{
		echo "Connection Failed.";
		die("Connection Failed:".mysqli_connect_error());
	}
	
	$sql = "INSERT INTO student (Name,Email,Dob,Religion,Password) VALUES('$Username','$email', '$dob','$religion','$pass')";
	$upload = mysqli_query($conn,$sql);
	if($upload)
	{
		echo "<center>New details have been entered!</center><br>";
		echo "<script> alert('data saved successfully');</script>";
	}
	else
	{
		echo "Error:".$sql."".mysqli_error($conn);
	}

	$sql1 = "select * from student";
	$result = mysqli_query($conn,$sql1);
	if($sql1)
	{
		echo "<table border=1 align=center>
		<tr><th>name</th>
		<th>email</th>
		<th>dob</th>
		<th>religion</th>
		</tr>
		";
		$row = [];
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['Name']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Dob']."</td>";
			echo "<td>".$row['Religion']."</td></tr>";

		}
	
	}
	echo "<center><a href=login.php>Login<br><br>";


?>
