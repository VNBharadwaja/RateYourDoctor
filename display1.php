<?php
	$connec=mysqli_connect('localhost','seethar_max','seethar_max','seethar_max');
      
 if($connec)
{
  


        
   
	 $qry=$connec->query('select* from doctors_list');
	while($row=mysqli_fetch_assoc($qry)){
        $g=$row['doc_id'];
	echo "<div class='col-md-4' style='margin-top:20px;'>";
        echo "<h3 style='color:blue;' class='section-title'>".$row['name']."</h3>";
        echo "<h4 >".$row['qualification']."</h4>";
        echo "<p>".$row['description']."</p>";
        
        echo"<div>
        <span style='color:orange;'><strong>Rate:</strong></span>
        <input class='".$g."' type='button' value='1'   >
        <input class='".$g."' type='button' value='2'  >
        <input class='".$g."' type='button' value='3'  >
        <input class='".$g."' type='button' value='4'  >
        <input class='".$g."' type='button' value='5' >
        &nbsp;&nbsp;&nbsp;&nbsp;<span><strong style='font-size:110%;'><a href='#'class='".$g."'>Comment</a></strong></span>
        </div>";
        
        echo "</div>";
	}

							}	?>