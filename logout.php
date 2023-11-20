<?php
   session_start(); //start session
   session_destroy(); //kill all session
   header("location:login.php");//redirect to login
?>