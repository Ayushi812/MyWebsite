<?php
echo "<script>alert('Login successfully')</script>"; 
session_start();

$a= "Welcome ".$_SESSION['uname'];
echo "<h1>$a</h1>";

$c=mysqli_connect("localhost","root","","clg_project");
if($c === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<html>
<link rel="stylesheet" href="welcomestudent.css">


<body>

  <h2 style margin_top:30px;>Student Info:</h2>
<table class="data">  
<tr class='imp'>
<th>Name</th>
<th>Roll NO</th>
<th>Std</th>
<th>Result</th>
<th>payment Details</th>
<th>Attendence</th>
</tr>
<?php

$u=$_SESSION['uname'];
$q="select * from info where user='$u'";
$result=mysqli_query($c,$q);
if (mysqli_num_rows($result) > 0) {
while($row=mysqli_fetch_assoc($result))
{

  echo "<tr>
<td class='imp'>".$row["Name"]."</td>
<td class='imp'>".$row["Roll_No"]."</td>
<td class='imp'>".$row["Std"]."</td>
<td class='imp'>".$row["Result"]."</td>
<td class='imp'>".$row["payment Details"]."</td>
<td class='imp'>".$row["Attendence"]."</td>
</tr>";

}}
mysqli_close($c);
?>

</table> 

<div class="cal">
<h2>Click Below Button for calendar..</h2>
<button class="button button5"><a href="calendar.html">calendar</a></button>
</div>
<div class="cal">
<h2>Click Below Button for Updates..</h2>
<button class="button button5"><a href="calendar.html">calendar</a></button>
</div>
<div class="cal">
<h2>Click Below Button for Notice..</h2>
<button class="button button5"><a href="calendar.html">calendar</a></button>
</div>
<style>
  .cal{
    margin-top:320px;
    margin-left:120px;
    height:300px;
    width:20%;
    border: 2px solid white;
    background:linear-gradient(to bottom ,purple,white);
    border-radius:5px;
    display:inline-block;
    color:white;
}
.button a{
    color: white;
    text-decoration: none;
}
.button{
    border:none;
    color:white;
    padding: 15px 30px;
    margin-top:70px;
    text-decoration: none;
    display:inline-block;
    font-size: 15px;
    font-weight: 600;
    margin-left: 50px;
    height: 50px;
    width: 170px;
    cursor: pointer;
    border-radius: 25px;
    
}
.button5:hover{
  background-color:blue;
  decoration:none;
}
.button5{
  background-color:#2ee59D;
}
.cal h2{
  padding:0 15px;
  text-align:center;
}
h2{
  font-size:30px;
  margin-top:150;

}

body{
  
  background-image:url("images/school.jpg");
  background-repeat:no-repeat;
  
}
body{
    background-color:rgba(76, 103, 221, 0.973);
    
   
}
h1{
    font-size:80px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center;
    color:blue;
}
.data{
    margin-left: 200px;
    margin-top: 20px;
    text-align: center;
    width: 800px;
    height: 200px;
    padding-top: 15px;
    font-size: 25px;
    border:1px solid white;
    background-color: rgb(216, 127, 216);
   /* background:linear-gradient(to bottom ,white,purple);*/
    color:white;
    
}
th{

    padding: 0;
}
.imp{
    color:white;
}
h2{
    margin-top: 60px;
    font-size: 25px;
    text-align: center;
}



</style>
</body>
</html>

  


