
<?php
	include 'db/query.php';
	$q = $_GET["q"];
	$sqlquery = "SELECT * FROM psiezodiaki WHERE znak LIKE '%".$q."%';";
	$result = query($sqlquery);
	if ($result->count == 0) {
		echo "{}";
	} else {
		while($row = $result->next()) {
			echo "{";
			echo "\"znak\": \"" . $row["znak"]  . "\"," ;
			echo "\"data\": \"" . $row["dataur"]  . "\"," ;
			echo "\"rasa\": \"" . $row["rasa"]  . "\"," ;
			echo "\"opis\": \"" . $row["opis"]  . "\"," ;
			echo "\"piosenka\": \"" . $row["piosenka"]  . "\"," ;
			echo "}";
		}
	}
?>