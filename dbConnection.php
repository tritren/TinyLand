<?php
function printResult($result_set) {
	while (($row = $result_set->fetch_assoc() ) !=false) {
		print_r ($row);
		echo "<br />";	
	}
	echo "Количество записей" .$result_set->num_rowe."<br />----------------------";

}
$mysqli = new mysqli ("localhost:8080", "root", "", "tinyland");
$mysqli->query ("SET NAMES 'utf8'");
$$result_set = $mysqli->query ("SELECT * FROM `teachers`");
printResult ($result_set);
$mysqli->close();
?>