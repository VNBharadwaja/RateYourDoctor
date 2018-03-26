<?php

$connec=mysqli_connect('localhost','seethar_max','seethar_max','seethar_max');

     $id= $_POST['name'];
     $val= $_POST['rating'];
     $ud= $_POST['user'];

      
 if($connec)
{
  


        
   
	 $qry=$connec->query("insert into user_review values ('$id','$ud','$val')");
if($qry)
{
 echo "Your review has been updated successfully";

}
}
?>