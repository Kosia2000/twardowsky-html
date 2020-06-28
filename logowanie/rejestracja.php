<!DOCTYPE html>
<html lang = "pl">
    <head>
        <title>Rejestracja</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../css/color2.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>

<body>
	<div class = "container-fluid">
        <div class = "row">
            <div class = "col-lg-6 col-md-6 d-none d-md-block image-container">
            </div>
                <div class = "col-lg-6 col-md-6 form-container">
                    <div class = "col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                        <div class = "logo mb-3">
                            <img src="../img/logo.png" alt = "Logo" style = "width: 300px;">
                        </div>

                        <div class = "heading mb-4">
                            <h4>Załóż konto</h4>
                        </div>

                        <form METHOD="POST" action="rejestracja.php">
                            <div class = "form-input">
                                <span><i class = "fa fa-user"></i></span>
                                <input type="text" placeholder = "Login" name = "login" required>
                            </div>

                            <div class = "form-input">
                                <span><i class = "fa fa-lock"></i></span>
                                <input type="password" placeholder="Haslo" name = "haslo" required>
                            </div>

                            <div class = "form-input">
                                <span><i class = "fa fa-user"></i></span>
                                <input type="text" placeholder="Imie" name = "imie" required>
                            </div>

                            <div class = "form-input">
                                <span><i class = "fa fa-user"></i></span>
                                <input type="text" placeholder="Nazwisko" name = "nazwisko" required>
                            </div>

                            <div class = "text-left mb-3">
                                <input type="submit" name="dodaj" value="dodaj konto">
                            </div>

                            <div style = "color: #777">Masz już konto?
                                <a href="../login.php" class = "login-link">Zaloguj się</a>
                            </div>
                         </form>
                    </div>
                </div>
        </div>
    </div>
     
	<?php
		if(isset($_POST['dodaj']))
		{
            include("../config.php");
			$login=$_POST["login"];
			$haslo=$_POST["haslo"];
			$haslo1 = md5($haslo);
			$imie=$_POST["imie"];
			$nazwisko=$_POST["nazwisko"];
			$zapytanie="INSERT INTO uzytkownicy(login,haslo,imie,nazwisko) VALUES('$login','$haslo1','$imie','$nazwisko');";
			$sprawdz = "SELECT login FROM uzytkownicy WHERE login =\"$login\";";
			$wynikspr=mysqli_query($conn,$sprawdz);
			$row= mysqli_num_rows($wynikspr);
			if($row!=1)
			{
                $wynik=mysqli_query($conn,$zapytanie);
            
                if(!$wynik)
                {
                    echo "błąd zapytania: ".mysqli_errno($conn);
                }
                else{
                    $message = "Konto założone poprawnie";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
			}
            
            else
			{
                $message = "Podaj inną nazwę";
                echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
	 ?>
      <br>
     
	
</body>
</html>
