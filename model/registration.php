<?php



session_start();

header('location:login.php');

//echo "jjhjhg";exit();

$con = mysqli_connect('localhost','root','');


mysqli_select_db($con, 'shopee');


 $user_first_name= $_POST ['user_first_name'];
$user_last_name= $_POST ['user_last_name'];
 $password=$_POST ['password'];
//exit;

$s="select * from user where first_name='$user_first_name'";

$result= mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num== 1){
	echo " username already taken";

}else{
	$reg="INSERT INTO user (first_name,last_name,password) VALUES ('$user_first_name', '$user_last_name','$password')";
	if (mysqli_query($con,$reg))
	echo "registration successful";
else
	echo "error";

	
}




?>

