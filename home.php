
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <!--  This the Main Home Page -->
    <!-- More system Logic can be done here -->
    <?php
        //check if session is set
        session_start();
        if(isset($_SESSION['username'])){
            //capture stored username from session
            $username = $_SESSION['username'];
            echo "Logged In AS: $username"; //Print it out in this Page
        }
        else {
            //user is not logged in. Advise them to login
           echo "You are Not Logged In <a href ='login.php'>LOGIN</a>";
           exit(); //stop further code execution
        }
    ?>
    <section class="row p-5 text-center">
            <div class="container">
                 <h1>HOME PAGE</h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda exercitationem, ipsum qui voluptates repellendus est doloremque esse! Dicta numquam asperiores ad quo exercitationem. Quidem laborum molestiae a at numquam odio!</p>
                 <!-- Logout from the main page -->
                 <a href="logout.php" class="btn btn-dark btn-sm">LOGOUT</a> 
            </div>
    
    </section>
</body>
</html>