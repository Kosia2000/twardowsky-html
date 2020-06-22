	<?php 
	
	$con = mysqli_connect("localhost", "user_02", "**********", "konta");

	$user_ip = $_SERVER['REMOTE_ADDR'];

	$select = "SELECT * FROM wizyty where ip = '$user_ip'";
	
	$count_visits = mysqli_num_rows(mysqli_query($con, $select));
	if($count_visits < 1)
	{
		$sql = "INSERT INTO wizyty(ip) VALUES('$user_ip')";
		mysqli_query($con, $sql);
	}

	$select_all = "SELECT * FROM wizyty";
	$all_visits = mysqli_num_rows(mysqli_query($con, $select_all));


	echo "Liczba wizyt: ".$all_visits;

	?>
