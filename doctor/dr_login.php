<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
	<style>
		header{
	 			width:30%;
	 			height:50%;
	 			
	 			margin-top: 10%;
	 			margin-left: 35%;
	 			color:black;
	 		}
	 		form{
	 			
	 			width:60%;
	 			margin-left:20%;

	 		}
	 		input[type="text"],input[type="password"]{
	 			width:100%;
	 			outline: 0;
	 			border:0;
	 			color:black;
	 			background:transparent;
	 			border-bottom:2px solid black;
	 		}
	 		
	 		input[type="submit"]{
	 			width:100%;
	 			outline: 0;
	 			border:0;
	 			color:white;
	 			border-radius:20px;
	 			padding:12px;
	 			background-color:green;
	 			border: 2px solid black;
	 		}
	 		
	 		
	</style>
</head>
<body background="images/back.jpg" style="background-size:cover;">
	<p id="p1"></p>
	<header>
	<h1 style="color:green;font-weight:bold;text-align: center;">Login</h1>
	<form method="POST" action="" enctype="multipart/form-data">
		<label>Email</label>
		<input type="text" name="email" required="required"><br><br>
        <label>Password</label>
		<input type="password" name="pass"><br><br>
		<input type="submit" name="submit1" value="login">
		<p id="demo" style="color:white;">.</p>
	</form>

	<?php
	//Make connection
	require 'doctor_conn.php';

	if(isset ($_POST['submit1']))
	{
		// create variables to store values from form
		$email=$_POST['email'];
		$password=$_POST['pass'];
		//select some information inside table
		$select=mysqli_query($conn,"SELECT * FROM dr_reg WHERE email='$email' AND password='$password'");
		$number=mysqli_num_rows($select);// get number of result
		if($select)
		{
			if($number==1)
			{
			    session_start();
				$row=mysqli_fetch_assoc($select);
				$userid=$row['rid'];
				$_SESSION['rid']=$userid;
 				echo $userid;

				echo "<script language='Javascript'>";
		 		echo "document.location.replace('./display.php')";
		 	    echo "</script>";
			}
			else
		   {
			?>
            <script>
             document.getElementById('p1').innerHTML="<h2 style='text-align:center;color:red;'>Enter correct email and password</h2>";
            </script>

            <?
		   }
			
		}
		
		
		
	}//isset submit




	?>
</header>
</body>
</html>