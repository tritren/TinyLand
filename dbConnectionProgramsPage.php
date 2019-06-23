<?php
$mysqli = new mysqli ("localhost", "root", "", "tinyland");
$mysqli->query ("SET NAMES 'utf8'");


  function getPrograms() {
    global $mysqli;
    $result_set = $mysqli->query("SELECT * FROM `programs` JOIN `languages` ON `programs`.`languageId` = `languages`.Id");

    while (($row = $result_set->fetch_assoc() ) !=false) {
      echo '<div class=" col-6 col-sm-4 col-md-3 programsContainer">
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