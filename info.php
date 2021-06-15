<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["form_number"] == "1") {
		$typ = $_POST['Typ'];
		$kto = $_POST['Osoba'];
		if (isset($_POST['współpraca'])) $rodzaj = $_POST['współpraca'];
		else $rodzaj = '';

		$query = "INSERT INTO `info`(`typ`, `osoba`, `wspolpraca`) VALUES ('$typ', '$kto', '$rodzaj')";
		$result = mysqli_query($con, $query);
		$err = mysqli_error($con);
		if ($result) {
			echo <<<END
			<div class='main-wrapper'>
			<h1>Dane podstawowe</h1>
			<table style="width: 400px; height: 400px;" class='table table-dark' border="5">
				<tr>
					<td style="vertical-align: middle";>Zainteresowanie usługą typu</td> <td> $typ </>
				</tr>
				<tr>
					<td style="vertical-align: middle";>Informacja o typie klienta</td> <td> $kto </td>
				</tr>
				<tr>
					<td style="vertical-align: middle";> Typ współpracy</td> <td> $rodzaj </td>
				</tr>
			</table>
			</div>
			END;
		} else {
			echo "<h2 style='font-weight: 700'>Wystąpił błąd podczas zapisu informacji: $err</h2>";
		}
		
	}
}
