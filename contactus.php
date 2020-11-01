<?php
$email=$_POST['em'];
$message=$_POST['ms'];

$c=mysqli_connect("localhost","root","","clg_project");
if($c === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$q="INSERT INTO `contactus` (`email`, `msg`) VALUES ('$email', '$message')";
if(mysqli_query($c, $q)){
    echo "<script>alert('your message has been sent')</script>";
}
else{
    echo "error";
}
mysqli_close($c);
?>