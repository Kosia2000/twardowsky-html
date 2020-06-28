<?php
		$conn = mysqli_connect("localhost", "user", "**********", "konta");
		if (!$conn) {
		$message = 'Nie można połączyć z bazą danych';
		echo "<script type='text/javascript'>alert('$message');</script>";
		exit;
		}
?>