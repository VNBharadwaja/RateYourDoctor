<?php
	$connec=mysqli_connect('localhost','seethar_max','seethar_max','seethar_max');
      
 if($connec)
{
  


        
   
	 $qry=$connec->query('select* from doctors_list');
	while($row=mysqli_fetch_assoc($qry)){
	echo "<div class='col-md-4' style='margin-top:20px;'>";
        echo "<h3 style='color:blue;' class='section-title'>".$row['name']."</h3>";
        echo "<h4 >".$row['qualification']."</h4>";
        echo "<p>".$row['description']."</p>";
        echo "<span>"."Overall Rating:&nbsp;".$row['avg_rating']."</span>";
        echo "&nbsp;&nbsp;<span>"."Reviews:&nbsp;".$row['tratings_received']."</span>";
        echo "<p>Was this helpful?&nbsp;&nbsp;"."<a style='text-decoration:none;' href='#'>YES</a>&nbsp;&nbsp;"."<a style='text-decoration:none;' href='#'>NO</a>"."</p>";
        echo "</div>";
	}

							}	?>