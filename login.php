<?php

 session_start();
 include("dbconnect.php");

 	if(isset($_POST['log_in'])){


    $username=mysqli_real_escape_string($conn,$_POST['username']);
 	$email=mysqli_real_escape_string($conn,$_POST['email']);
 	$password=mysqli_real_escape_string($conn,$_POST['password']);



 	$select_user = "select * from users where email='$email' AND password='$password' AND  username = '$username' ";

	 $query = mysqli_query($conn,$select_user);

	$result = mysqli_fetch_assoc($query);

	$_SESSION['users_id'] = $result['user_id'];
    $_SESSION['email'] = $email;
 	$check_user = mysqli_num_rows($query);

 	if($check_user==1){
 		$_SESSION['email'] = $email;

        echo "<script>alert('Login is successfull')</script>" ;
 		echo "<script>window.open('after.php','_self')</script>";
 	}
	else{
		echo "<script>alert('incorrect details  try again!')</script>";
		echo "<script>window.open('signup.php','_self')</script>";
	}
 	}
 ?>
