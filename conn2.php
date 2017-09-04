<?php
session_start();
$user_name=$_REQUEST['username'];
$password=$_REQUEST['password'];
//$user_value=$_REQUEST['usertype'];
include("mv.php");
	$rcv=mysqli_query($conn,"call login('$user_name','$password',@usern,@passwrd,@utype)");
	$rcv_user=mysqli_fetch_array($rcv);
	$user=$rcv_user['@usern'];
	$pass=$rcv_user['@passwrd'];
	$u_type=$rcv_user['@utype'];
	$u_id=$rcv_user['user_id'];
	if($user_name==$user){
		if($password==$pass){
			if($u_type=='faculty'){
			$SESSION['user_id']=$u_id;
			$SESSION['suser_name']=$user;
			
			include("mayank.php");
			
		}
		elseif ($u_type=='admin') {
			$SESSION['user_id']=$u_id;
			$SESSION['suser_name']=$user;
			include("admin.php");
		}
		elseif($u_type=='management'){
			$SESSION['user_id']=$u_id;
			$SESSION['suser_name']=$user;
			include("management.php");
		}
	}

}
?>