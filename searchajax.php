<?php
	$connec=mysqli_connect('localhost','seethar_max','seethar_max','seethar_max');
        $val=$_POST['text'];
 if($connec)
{
  

    
        
    $qry=$connec->query("select* from doctors_list where name like '%$val%' or qualification like '%$val%' or description like '%$val%' or avg_rating like '%$val%'");
	while($row=mysqli_fetch_assoc($qry)){
	echo "<div class='col-md-4'>";
        echo "<h3 style='color:blue;' class='section-title'>".$row['name']."</h3>";
        echo "<h4 >".$row['qualification']."</h4>";
        echo "<p>".$row['description']."</p>";
        echo "<span>"."Overall Rating:&nbsp;".$row['avg_rating']."</span>";
        echo "&nbsp;&nbsp;<span>"."Reviews:&nbsp;".$row['tratings_received']."</span>";
        echo "</div>";
	}

							}	?>