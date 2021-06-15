<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["form_number"] == "2") {
		$file = $_FILES['file'];

		$fileName = $_FILES['file']['name'];
		$fileNameTemporary = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExtension = explode('.', $fileName);
		$fileActualExtension = strtolower(end($fileExtension));

		$allowed = array('pdf', 'docx', 'doc', 'odt', 'txt');

		if (in_array($fileActualExtension, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 204800) {
					$fileNameNewName = uniqid('', true) . "." . $fileActualExtension;
					$fileDestination = './uploads/' . $fileNameNewName;
					move_uploaded_file($fileNameTemporary, $fileDestination);

					$query = "INSERT INTO `files`(`file`) VALUES ('$fileDestination')";
					$result = mysqli_query($con, $query);
					$err = mysqli_error($con);
					if ($result) {
						echo "<h2>Twój plik został przesłany pomyślnie</h2>";
					} else {
						echo "<h2>Wystąpił błąd</h2>";
					}
				} else {
					echo "<h2>Plik jest zbyt duży</h2>";
				}
			} else {
				echo "<h2>Wystąpił błąd</h2>";
			}
		} else {
			echo "<h2>Niewłaściwe rozszerzenie pliku</h2>";
		}
	}
}
