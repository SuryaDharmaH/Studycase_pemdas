<?php 
//user1
$userlogin = "userlsp";
$passlogin = "smkn2bjm";
 
 $username = $_POST['username'];
 $password = $_POST['password'];
//user 2
 $userlog = "admin";
 $passlog = "admin";
  
  $user = $_POST['username'];
  $pass = $_POST['password'];

 //function
 if ($username == $userlogin && $password == $passlogin || $user == $userlog && $pass == $passlog ) {
     session_start();
     $_SESSION['username'] = $username;
     $_SESSION['password'] = $password;
    //test
     $_SESSION['username'] = $user;
     $_SESSION['password'] = $pass;
     header("Location: home.php");
 } 
 else {
     header("Location: login.php");
}


?>