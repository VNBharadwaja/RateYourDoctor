<?php
session_start(); 
	$connec=mysqli_connect('localhost','seethar_max','seethar_max','seethar_max');			
	if(isset($_POST['username'])&&(isset($_POST['password']))){ 
		$username=mysqli_real_escape_string($connec,$_POST['username']);
		$password=mysqli_real_escape_string($connec,$_POST['password']);
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$qry=$connec->query(" select username,password FROM r_user WHERE username='$username' AND password='$password' ");
		if(mysqli_num_rows($qry)>0){
		header('Location:index1.php');
	        }
		else{
			echo "invalid credentials";
		}
	}
?>
