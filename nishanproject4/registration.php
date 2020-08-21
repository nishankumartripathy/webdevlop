<?php
session_start();
header('location:final.php');
$con = mysqli_connect('localhost','root','','nishalogin');

$name=$_POST['user'];	
$pass=$_POST['password'];

$s="select * from nishalogin where name= '$name'";
$result= mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	echo "user name already taken";
}else{
	$reg="insert into nishalogin(name,password) values('$name','$pass')";
	mysqli_query($con,$reg);
	echo"registration succesful";
}


?>