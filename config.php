<?php
		$conn = mysqli_connect('localhost', 'user_02', '**********', 'konta');
		if (!$conn) {
		$message = 'Nie można połączyć z bazą danych';
		echo "<script type='text/javascript'>alert('$message');</script>";
		exit;
		}
?>