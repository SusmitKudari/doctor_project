<html>
	 <head>
	 	<title>main page</title>
	 	<style>
	 		header{
	 			width:30%;
	 			height:50%;
	 			/*background-image:linear-gradient(navy,black);*/
	 			margin-top: 10%;
	 			margin-left: 35%;
	 		}
	 		form{
	 			
	 			width:60%;
	 			margin-left:20%;

	 		}
	 		input[type="text"],input[type="password"]{
	 			width:100%;
	 			outline: 0;
	 			border:0;
	 			color:white;
	 			background:transparent;
	 			border-bottom: 2px solid black;
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
	 <body background="images/back.jpg" style="background-size:cover;background-repeat: no-repeat;">
	 	<header>
		 	<form action="" method="POST" enctype="multipart/form-data">
		 		<h1 style="color:green;font-weight:bold;text-align: center;">Registeration</h1>
		 		<input type="text" name="email" placeholder="Enter email"><br><br><br>
		 		<input type="password" name="pass" placeholder="Enter password"><br><br>
		 		<input type="password" name="cpass" placeholder="Renter password"><br><br><br>
		 		<input type="submit" name="submit" value="registeration">
		 	</form>
		</header>
		<?php
			require 'doctor_conn.php';
			if(isset($_POST['submit']))
			  {
			  	$email=$_POST['email'];
			  	$password=$_POST['pass'];
			  	$cpassword=$_POST['cpass'];
				  	if($password==$cpassword)
				  	  {
				  	  	$insert=mysqli_query($conn,"INSERT INTO dr_reg(email,password)VALUES('$email','$password')");
				  	  	  if(!$insert)
				  	  	   {
				  	  	   	echo $conn->error;
				  	  	   }
				  	  	  else
				  	  	  {
                              echo "inserted";
				  	  	  }
				  	  	  
				  	  }//comapare password
		  	    echo "<script language='Javascript'>";
		  	    echo "document.location.replace('./dr_login.php')";
		  	    echo "</script>";
			  }//isset submit
			  else
			  {
			  	$conn->error;
			  }
		?>
	 </body>
</html>