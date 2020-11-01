<?php
$uname=$_POST['em'];
$password=$_POST['pass'];


if($uname==Ayushi && $password==1234) {
    header("Location:welcomestudent.php"); 
//echo "<script>alert('you are logged in successfully')</script>";
//  echo "<h1><strong>Welcome Ayushi</strong> </h1>";
}
else{
 
  echo "<script>alert('you are not registered')</script>";
  header("Location:welcomenot.php");
    
}
?>