<?php
session_start();
$connec=mysqli_connect('localhost','seethar_max','seethar_max','seethar_max');
$doc_id=$_POST['doc_id'];
$user=$_SESSION['username'];
$comments=$_POST['comments'];

if (isset($_POST['comments'])){
$qry=$connec->query("insert into user_comments values ('$user','$doc_id','$comments')");
if($qry){
echo "comment added";
}


}

?>