<?php
include"db.php";

$email=$_POST["email"];
$password=$_POST["password"];


$sql="SELECT * FROM student WHERE email='$email' AND password='$password'";
$result= mysqli_query($conn,$sql);
$kitale= mysqli_fetch_assoc($result);

if($student){
    echo("Login Successful");
    header("location:home.html");
}else{
    echo("Login Failed");
    header("location:home.html?error=1");
}
?>