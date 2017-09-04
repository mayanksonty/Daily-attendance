<?php
session_start();
$user_name=$_REQUEST['username'];
$password=$_REQUEST['password'];
$user_value=$_REQUEST['usertype'];
include("mv.php");
if($user_value=='faculty'){
	$rcv=mysqli_query($conn,"select user_name,password,user_type,user_id from user where(user_name='$user_name');");
	$rcv_user=mysqli_fetch_array($rcv);
	$user=$rcv_user['user_name'];
	$pass=$rcv_user['password'];
	$u_type=$rcv_user['user_type'];
	$u_id=$rcv_user['user_id'];
	if($user_name==$user){
		if($password==$pass){
			$SESSION['user_id']=$u_id;
			$SESSION['suser_name']=$user;
			
			include("mayank.php");
			
		}
	}

}
?>