	 <?php
        
		if(!isset($_SESSION)) 
		{ 
			session_start(); 
		} 
		if(isset($_POST['loguj']))
		{
            include("../config.php");
			$login=$_POST["login"];
            $haslo=$_POST["haslo"];
			$haslo1 = md5($haslo); 
			$zapytanie="SELECT * FROM uzytkownicy WHERE login=\"$login\" AND haslo=\"$haslo1\";";
			$wynik=mysqli_query($conn,$zapytanie);
			$row= mysqli_num_rows($wynik);
			if($row == 1)
			{
                $_SESSION["login"] = $_POST["login"];
                $message = "Zalogowano";
                echo "<script type='text/javascript'>alert('$message');</script>";
				
                header('Location: index.php');
			}
			else
			{
                $message = "Błędny login albo hasło";
                echo "<script type='text/javascript'>alert('$message');</script>";
				
			}
			
            mysqli_close($conn);
		}
	 ?>
