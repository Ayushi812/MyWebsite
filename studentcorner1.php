<?php

$c=mysqli_connect("localhost","root","","clg_project");
if($c === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(!empty($_POST['submit'])){
    $username=$_POST['em'];
    $password=$_POST['pass'];
    $query="select * from login where user='$username' && pass='$password'";
    $result=mysqli_query($c,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        session_start();
        $_SESSION['uname']=$username;
        
        header("Location:welcomestudent.php"); 
        //echo "You are logged in successfully";
    }
    else{
        
        echo "<script>alert('you are not registered')</script>";
     
    }
}
?>