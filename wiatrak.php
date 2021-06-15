<?php
require_once "./config.php";
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["form_number"] == "3") {
		$square = $_POST['square'];
		$speed = $_POST['speed'];
		if (isset($_POST['turbineType'])) $turbineType = $_POST['turbineType'];
		else $rodzaj = '';

		$query = "INSERT INTO `wiatrak`(`square`, `speed`, `turbineType`) VALUES ('$square','$speed','$turbineType')";
		$result = mysqli_query($con, $query);
		$err = mysqli_error($con);
		if ($result) { $sumaZeWzoru = round(0.5*1.225*$square*$speed*$speed*$speed*$turbineType*0.9*0.92*0.95*0.28*8760,2); 
			echo <<<END
			<h3 style="text-align: center";>Dane podstawowe</h1>
			<div class="main-wrapper">
			<table style="width: 600px; height: 400px; margin-left: auto; margin-right: auto" class="table table-dark">
				<tr>
					<td style="vertical-align: middle";>Wartość roczna produkowanej energii dla tego typu turbiny, dla podanych parametrów wynosi:</td> <td style="vertical-align: middle";> $sumaZeWzoru Wh </>
				</tr>
			</table>
			</div>
			END;
		} else {
			echo "<h4 style='font-weight: 700'>Wystąpił błąd podczas zapisu informacji: $err</h2>";
		}
		
	}
}
