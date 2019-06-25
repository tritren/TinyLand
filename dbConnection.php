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

  function getPrograms($columns, $limit) {
    global $mysqli;
    $result_set = $mysqli->query("SELECT `programs`.`Id`, `Image`, `Summary`, `En_Name` FROM `programs` JOIN `languages` ON `programs`.`languageId` = `languages`.Id LIMIT ".$limit);

    while (($row = $result_set->fetch_assoc() ) !=false) {
      echo '<div class="'.$columns.' programsContainer">
              <div class="programsInfo d-flex align-items-center" language="'.$row['En_Name'].'">
                <a href="programDetails.php?id='.$row['Id'].'"><img src="img/'.$row['Image'].'"></a>
                <div class="programsDescription">
                 <p>'.$row['Summary'].'</p>
                  <a href="programDetails.php?id='.$row['Id'].'"><h4>Подробнее</h4></a>
                </div>
              </div>
            </div>';
    }
}