<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
$school=$_POST['school'];
$grade=$_POST['Grade'];

$c=mysqli_connect("localhost","root","","clg_project");
if($c === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$q="INSERT INTO `admissionform` (`fname`, `lname`, `email`, `phone`, `date`, `month`, `year`, `school`, `Grade`) VALUES ('$fname', '$lname', '$email', '$phone', '$date', '$month', '$year', '$school', '$grade')";
if(mysqli_query($c, $q)){
   if($grade>=80){
       echo "<script>alert('your admission has been confirmed.you are requested to pay admissionfees within one week')</script>";
   }
   else{
       echo "<script>alert('your admission is in waiting list.you will be notify by email for further updates')</script>";
   }
   } 
   else{
       echo "error";
       }

 mysqli_close($c);
 ?>
 