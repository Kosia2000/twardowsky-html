<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<header>
    <div class="cursor"></div>  
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top " style = "text-align: center;">
            <div class="navbar-brand"></div>
            <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content" id="nav">
                <div class="nav-item" >
                    <a class="nav-link text-light font-weight-bold px-3" href="index.php">
                        <img class = "logo" src="img/logo.png" alt="Legendarz">    
                    </a>
                </div>
    
                <div class="nav-item dropdown" >
                    <a class="nav-link text-light font-weight-bold px-3 dropdown-toggle" data-toggle="dropdown" >Film TWARDOWSKY Allegro</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://www.youtube.com/watch?v=hRdYz8cnOW4">Część 1.</a>
                            <a class="dropdown-item" href="https://www.youtube.com/watch?v=M-skpeuYmfE">Część 2.</a>
                        </div>
                </div>
    
                <div class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="autorzy.php">Autorzy</a>
                </div>
    
                <?php
                    if($_SESSION["login"] ?? "" != "")
                    {
                        include("navbar-premium.php");
                    }
                
                ?>

                <div class="nav-item">

                <?php
                    if($_SESSION["login"] ?? "" != "")
                    {
                        include("navbar-logout.php");
                    }
                    else{ 
                        include("navbar-login.php");
                    }
                
                ?>

                </div>
        
            </div>
        </nav>
    </div>
</header>

