<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
    <section class="row p-5 text-center">
            <div class="container">
                 <h1>LOGIN</h1>
                 <h3>Enter Your Credentials.</h3>
                 <form method="post">
                       <input type="text" name="username" placeholder="Username" required>
                       <br><br>
                         <input type="password" name="password" placeholder="Password" required>
                       <br><br>
                       <input type="submit" class="btn btn-dark" value="Login Here">
                 </form>
                 <a href="register.php">Not Registered? Click Here</a>
            </div>
    </section>


  <?php
      // Check if username and password are provided - POSTED
      if (isset($_POST['username']) && isset($_POST['password'])) {
           $username =  $_POST['username']; //capture username
           $password =  $_POST['password']; //capture password

           //connect to database
           $conn = mysqli_connect("localhost", "root", "","php_demo");

           //write SQL to find a matching username and password
           $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

           //execute SQL, provide $conn
           $result = mysqli_query($conn, $sql);

           //if result equal to 1 there was a match, else No match
           if (mysqli_num_rows($result) == 1) {
             //start & set session
             session_start();
             $_SESSION['username'] = $username;  //create a session with logged in username
             echo "<span class='alert text-success text-center'>Login Success</span>";
             header("location: home.php");//redirect to home.php
           }
           else {
               //No match, result is zero
               echo "<span class='alert text-danger text-center'>Login Failed</span>";
           }

      }//end if
     

  ?>


</body>
</html>