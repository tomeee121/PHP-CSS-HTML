<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["form_number"] == "0") {
		$suma = 0;
		if (isset($_POST['Fotowoltaika'])) {
			$suma += $_POST['Fotowoltaika'] * 28000;
			$f = true;
		} else {
			$f = false;
		}
		if (isset($_POST['Pompy'])) {
			$suma += $_POST['Pompy'] * 21000;
			$p = true;
		} else {
			$p = false;
		}
		if (isset($_POST['Rekuperacja'])) {
			$suma += $_POST['Rekuperacja'] * 10000;
			$r = true;
		} else {
			$r = false;
		}

		$query = "INSERT INTO `kalkulacje`(`fotowoltaika`, `pompy`, `rekuperacja`, `cena`) VALUES ('$f', '$p', '$r', '$suma')";
		$result = mysqli_query($con, $query);
		$err = mysqli_error($con);
		if ($result) {
			echo "<h2 style='font-weight: 700'>Koszty szacowane wymienionych instalacji: $suma zł</h2>";
		} else {
			echo "<h2 style='font-weight: 700'>Wystąpił błąd podczas zapisu informacji: $err</h2>";
		}
	}
}
