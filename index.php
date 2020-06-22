<!DOCTYPE html>
<html lang="pl">
<head>
        <title>Logowanie</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/color.css">
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
                            <img src="img/logo.png" alt = "Logo" style = "width: 300px;">
                        </div>
                        <div class = "heading mb-4">
                            <h4>Zaloguj się</h4>
                        </div>

                        <form METHOD="POST" action="index.php">
                            <div class = "form-input">
                                <span><i class = "fa fa-user"></i></span>
                                <input type="text" placeholder = "Login" name = "login" required>
                            </div>
                            <div class = "form-input">
                                <span><i class = "fa fa-lock"></i></span>
                                <input type="password" placeholder="Haslo" name = "haslo" required>
                            </div>
                            

                            <div class = "text-left mb-3">
                                <input type="submit" name="loguj" value="zaloguj">
                                
                            </div>
                            
                            <div style = "color: #777">Nie masz jeszcze konta?
                                <a href="logowanie/rejestracja.php" class = "register-link">
                                    Zarejestruj się!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
    </div>
    
<?php 
        include("config.php");
        include("logowanie/logowanie.php");
?>


	 
	
</body>
</html>
