<?php
require 'init.php';
session_start();

if(isset($_POST['login'])){
  var_dump($result=$user->getdatauser($_POST['username']));
  if($result['password']===$_POST['password']&&
  $result['username']===$_POST['username']){
    header("location:databuku.php");
    $_SESSION['login']=true;
    exit();
 
  }else{
    echo "<script>alert('username dan password anda salah. silakan coba lagi!')</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
 
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
 
/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
 
button:hover {
  opacity: 0.8;
}
 
/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
 
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
 
img.avatar {
  width: 40%;
  border-radius: 50%;
}
 
.container {
  padding: 16px;
}
 
span.psw {
  float: right;
  padding-top: 16px;
}
 
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 120%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}
 
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
  height:30%;
  border-radius:30px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
 
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
 
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
 
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
 
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
 
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
 
 
 
<div id="id01" class="login-box,">
 
  <form  class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="download.png" alt="Avatar" class="avatar">
    </div>
 
    <div class="container">
      <!-- <label for="uname"><b>ID</b></label>
      <input type="text" placeholder="Enter ID" name="ID" required> -->
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
 
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
 
      
      <button type="submit" name="login">Login</button>
      
   
  </form>
</div>
 
<script>
document.addEventListener("DOMContentLoaded", function() {
  // Otomatis jalankan animasi saat halaman dimuat
  var loginBox = document.querySelector('.login-box');
  loginBox.style.animationPlayState = 'running';
});

</script>
 
</body>
</html>