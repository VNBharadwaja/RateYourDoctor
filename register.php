<?php  
	$connec=mysqli_connect('localhost','seethar_max','seethar_max','seethar_max');		  
	if(isset($_POST['name'])&&isset($_POST['Username'])&&isset($_POST['Password'])){
		$name=$_POST['name'];
		$username=$_POST['Username'];
		$password=$_POST['Password'];
		$qry=$connec->query("insert into r_user(name,username,password) values('$name','$username','$password') ");
		if($qry){
		header('Location: login.html');
		}
		else{
			header('Location:index1.php');
		}
}
?>