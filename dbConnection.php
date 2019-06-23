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
                	<h4>'.$row['Name'].'</h4>
                	  <h2>'.$row['Position'].'</h2>
               	      <p class="d-none d-md-block">'.$row['Description'].'</p>
               	 </div>
             	 </div>
          	  </div>';
		}
    
}

  function getPrograms() {
    global $mysqli;
    $result_set = $mysqli->query("SELECT * FROM `programs` JOIN `languages` ON `programs`.`languageId` = `languages`.Id");

    while (($row = $result_set->fetch_assoc() ) !=false) {
      echo '<div class="col-sm-4 col-md-3 d-none d-sm-block programsContainer">
              <div class="programsInfo d-flex align-items-center" language="'.$row['En_Name'].'">
                <a href="progams.php?id='.$row['Id'].'"><img src="img/'.$row['Image'].'"></a>
                <div class="programsDescription">
                 <p>'.$row['Summary'].'</p>
                  <a href="progams.php?id='.$row['Id'].'"><h4>Подробнее</h4></a>
                </div>
              </div>
            </div>';
    }

}
    function getTop6Programs() {
    global $mysqli;
    $result_set = $mysqli->query("SELECT * FROM `programs` JOIN `languages` ON `programs`.`languageId` = `languages`.Id LIMIT 2");

    while (($row = $result_set->fetch_assoc() ) !=false) {
      echo '<div class="col-6 d-sm-none programsContainer">
              <div class="programsInfo d-flex align-items-center" language="'.$row['En_Name'].'">
                <a href="progams.php?id='.$row['Id'].'"><img src="img/'.$row['Image'].'"></a>
                <div class="programsDescription">
                 <p>'.$row['Summary'].'</p>
                  <a href="progams.php?id='.$row['Id'].'"><h4>Подробнее</h4></a>
                </div>
              </div>
            </div>';
    }
    $mysqli->close();
}
?>