
<p style="color:white;">a</p><!DOCTYPE html>
<html>
<head>
    <title>sign_up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        input[type="text"]{
            width:95%;
        }
    </style>
</head>
<body style="color:black;background-color:#adebad;">
  
    <div class="signup__box">
        <div class="header" style="background-color: green;">
                <h2>Appointment Registration</h2>
        </div>
        <form  method="post" action="">
            <div class="input-group">
                <p class="fa fa-user-o">
                 <input type="text" name="name" placeholder="Your Name" required="required">
             </p>
             <br>               
            </div>  
            <div class="input-group">          
                    <p class="fa fa-envelope-open-o">
                         <input type="email" name="email" placeholder="Email" required="required">
                    </p>
                    <br>
            </div>
            <div class="input-group">
                <p class="fa fa-mobile">  
                <input type="text" name="mobile" placeholder="mobile no" maxlength="10" required="required">
                </p>
                <br>
            </div>

            <div class="input-group">
          <p class="fa fa-male"> 
                <input type="text" name="age" placeholder="Age" required="required">
            </p>
            <br>
            </div>
            <div class="input-group">
                <p class="fa fa-user-o"> 
                 <label for="pwd">Gender:&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                  <input type="radio" name="gender" value="male"> Male<br>
                  <input type="radio" name="gender" value="female"> Female<br>
                  <input type="radio" name="gender" value="other"> Other<br>    
                </p>
                <br>
            </div>
            <div class="input-group">
                <p class="fa fa-bookmark"> 
                <input type="date" name="rdate" placeholder="Appoinment date" required="required">
                </p>
                <br>
            </div>
            
            
            <div class="input-group">
          <p class="fa fa-map-marker">
                    <label for="pwd">Location:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                      <select id="test-dropdown" onchange="choice1(this)" type="select"  name="location"  class="form-control" style="width:100%;">
                      <option value="Location:SevenHills Hospital(Andheri East) Time:10:00 am-11:am">SevenHills Hospital(Andheri East)</option>
                      <option value="Location:Khus-hal Hospital(Ghatkopar East) Time:1:30 pm-2:00 pm">Khus-hal Hospital(Ghatkopar East)</option>
                      <option value="City Hospital(Kurla West) Time:9:00 am-10:00 am">City Hospital(Kurla West)</option>
                      <option value="Dhanvantari Hospital(Sakinaka) Time:6:00 pm- 7:00 pm">Dhanvantari Hospital(Sakinaka)</option>
                      <option value="Aashraya Developmental Aid Centre(Bandra West) Time:4:00 pm-6:00 pm">Aashraya Developmental Aid Centre(Bandra West)</option>
                      <option value="Location:Cozy Clinic & Nursing Home(Andheri West) Time:4:00 pm-6:00 pm">Cozy Clinic & Nursing Home(Andheri West)  </option>
                      </select>
                </p>
                <br>
            </div>                
            <div class="input-group">
                <input  type="submit" name="submit" value="Submit">
            </div>

            
    </form>
    </div>
    <script>
   function choice1(select) {
     alert(select.options[select.selectedIndex].value);
}
 </script>
      <?php
  require 'doctor_conn.php';
  if(isset($_POST['submit']))
        {
         $pname=$_POST['name'];
         $email=$_POST['email'];
         $mobile=$_POST['mobile'];
         $age=$_POST['age'];
         $location=$_POST['location'];
         $rdate=$_POST['rdate'];
         $gender=$_POST['gender'];
         
        $insert=mysqli_query($conn,"INSERT INTO pat_reg(pname,email,mobile,age,location,rdate,gender)VALUES('$pname','$email','$mobile','$age','$location','$rdate','$gender')");
          if(!$insert)
            {
              echo $conn->error;
            }

            ?>
            <script>
              alert("Your Response is submitted");
            </script>

            <?
            echo "<script language='Javascript'>";
                        echo "document.location.replace('./index.php')";
                      echo "</script>";
        }       
?>
</body>


</html>
