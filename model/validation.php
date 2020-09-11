<?php

session_start();




$con = mysqli_connect('localhost','root','');


mysqli_select_db($con, 'shopee');


$user_first_name= $_POST ['user_first_name'];
$user_last_name= $_POST ['user_last_name'];
$password=$_POST ['password'];


$s="select * from user where first_name='$user_first_name' && password='$password'";

$result= mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num== 1){
	 
 	$_SESSION['first_name']= $user_first_name;
	 header('location:index.php');

}else{
	header('location:login.php');
	

}




?>