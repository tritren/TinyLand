<?php
$mysqli = new mysqli ("localhost", "root", "", "tinyland");
$mysqli->query ("SET NAMES 'utf8'");


	function getTeachers() {
		global $mysqli;
		$result_set = $mysqli->query("SELECT * FROM `teachers`");

		while (($row = $result_set->fetch_assoc() ) !=false) {
			echo '<div class="col-md-4 teacherContainer">
             	 <div class="teacherInfo d-flex align-items-center">
              	  <img src="img/'.$row['Image'].'"  class="img-fluid">
               	 <div class="teacherDescription">
                	  <a href="teacher.php?id='.$row['Id'].'"><h4>'.$row['Name'].'</h4></a>
                	  <h2>'.$row['Position'].'</h2>
               	   <p class="d-none d-md-block">'.$row['Description'].'</p>
               	 </div>
             	 </div>
          	  </div>';
		}
	$mysqli->close();
	}
?>