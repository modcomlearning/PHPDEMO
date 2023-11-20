<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- This is Link to bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
    <section class="row p-5 text-center">
            <div class="container">
                 <h1>REGISTER</h1>
                 <h3>Enter Your Details.</h3>
                 <form method="post">
                       <input type="text" name="username" placeholder="Username" required>
                       <br><br>
                         <input type="password" name="password" placeholder="Password" required>
                       <br><br>
                         <input type="email" name="email" placeholder="Email" required>
                       <br><br>
                       <input type="submit" class="btn btn-dark" value="Register Now">
                 </form>
                 <a href="login.php">Already Registered? Click Here to Login</a>
            </div>
    </section>

  <?php
   // Check if username , email and password  are provided - POSTED
      if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
           $username =  $_POST['username'];//capture username 
           $password =  $_POST['password'];//capture password 
           $email =  $_POST['email']; //capture email 

            //connect to database
           $conn = mysqli_connect("localhost", "root", "","php_demo");

           //do an insert SQL providing the variables to Save, $email, $password, $email
           $sql = "INSERT INTO users(`username`, `password`, `email`) values ('$username',
           '$password', '$email')";

           //Execute SQL, provide $conn
           $result = mysqli_query($conn, $sql);

           //if $result is true, query executed successfully - SAVED
           if ($result) {
             echo "<span class='alert text-success text-center'>Registration Success</span>";
           }
           else {
                //if $result is false, query did execute completely- Failed
               echo "<span class='alert text-danger text-center'>Registration Failed</span>";
           }

      }//end if

     

  ?>


</body>
</html>