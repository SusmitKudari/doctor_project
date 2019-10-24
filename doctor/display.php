<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        </head>
     <body>
    <div class="container">
        
            
<?php
  require 'doctor_conn.php';
  
  ?>

  <table class="table alert alert-success" style="color:black;background-color:#adebad;font-size:125%;">
           <caption style="color:black;font-size: 200%;margin-bottom: 30px;background-image:linear-gradient(#339c63,#339c63);border:1px solid black;border-radius: 1px;">
              <h1 class="text-center">Appointment</h1>
            </caption>
            <tr style="background-image:linear-gradient(#339c63,#339c63);">
            <th>name</th>
            <th>email</th>
            <th>mobile no</th>
            <th>Age</th>
            <th>date</th>
            <th>gender</th>
            <th>location</th>
            
          </tr>
  <?php
  $select=mysqli_query($conn,"SELECT * FROM pat_reg");
  $number=mysqli_num_rows($select);
  if($number)
  {
    while($rows=mysqli_fetch_assoc($select))
      {
        $name=$rows['pname'];
        $email=$rows['email'];
        $mobile=$rows['mobile'];
        $age=$rows['age'];
        $location=$rows['location'];
        $rdate=$rows['rdate'];
        $gender=$rows['gender'];
       // $rtime=$rows['rtime'];

      
      ?> 
      
          <tr>
            <td style="width:20%;"><?php echo $name;?></td>
            <td style="width:10%;"><?php echo $email;?></td>
            <td style="width:10%;"><?php echo $mobile;?></td>
            <td style="width:5%;"><?php echo $age;?></td>
            <td style="width:15%;"><?php echo $rdate;?></td>
            <td style="width:10%;"><?php echo $gender;?></td>
            <td><div class="alert"><?php echo $location;?></div></td>
            
            </tr>
        
     </div>
      <?php
    }
  }

?>
 </table>
 <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 text-center">
 <button class="alert alert-danger" style="background-image:linear-gradient(#339c63,#339c63); padding:22px 45px;"><a href="index.php" style="color:black;">Log Out</a></button>
 </div>
  <div class="col-md-4"></div>
 </div>
</body>

</html>