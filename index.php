<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!doctype html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/kursor.css">
    <title>Magiczne zawody</title>
  </head>

  <body>
  <?php include("navbar.php"); ?>

  <main>
    <div class="back">
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron-fluid bg-cover text-white">
            <div class="container-fluid">
              <h1 class="display-4">Czarnoksiężnicy</h1>
              <p style = "font-style:italic;" class="lead"> Tego też czarta [Farela] i czarnoksiężnicy w swoich wsiach wzywają, którzy mają zwierciadła kryształowe, mają też swoje egzorcyzmy, oni zową [je] konjuracye,
                  którymi go przyzywają do onego zwierciadła, aby się ukazał chłopięciu (jeszcze niewinnemu) w onym zwierciadle; tamże przez znaki ukaże skarby w ziemi, gdzie kruszce będą ołowne, srebrne, złote albo o co będzie pytał majster (...)
                  Wieleć jest zaprawdę takich, co się w tych naukach czartowskich obierają, które szkodzą duszy i ciału; i znałem takich wiele zwłaszcza tych, którzy się wizyami nikczemnymi zwierciadłem parali,
                  szukając skarbów albo wietrunków kruszcowych.
              </p>
              <hr class="my-4">
              <p>Postępek prawa czartowskiego przeciw narodowi ludzkiemu 1570, Kraków 1892</p>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- Moving menu -->
      <section class="section">
      <div class="container text-center">
        <h2 class="text-dark" style = "padding-top:2em;">Książki</h2>
        <p class="text-secondary">z cyklu Legendarz</p>
      </div>

      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="img/bestiariusz2.jpeg" class="img-fluid p-4" alt="Bestiariusz Słowiański część pierwsza i druga">
                </div>
                <div class="card-body">
                  
                    <article>
                    <h3 class="card-title">Bestiariusz Słowiański część pierwsza i druga</h3>
                    <p class="card-text">
                    "Bestiariusz słowiański. Część pierwsza i druga” to wyjątkowe wydanie popularnych „Bestiariuszy”, w którym zebrane zostały dwie dotychczas osobne części tego tytułu, czyli „Rzecz o skrzatach, wodnikach i rusałkach” 
                    oraz „Rzecz o biziach, kadukach i samojadkach”. Dzięki temu niesamowite, pobudzające wyobraźnię historie o mitycznych stworzeniach, przekazywane z pokolenia na pokolenie przez 
                    naszych przodków, znajdziemy teraz w jednej, obszernej publikacji, którą uzupełniają jedyne w swoim rodzaju, piękne ilustracje autorstwa Pawła Zycha i Witolda Vargasa. 
                    </p>
                    <br>
                    <div class="d-flex justify-content-center">
                      <a class="btn btn-success" href="https://bonito.pl/k-1609287-bestiariusz-slowianski-czesc-pierwsza-i-druga" role="button" style = "text-align:center;">Kup!</a>
                    </div>
                    
                    </article>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="img/swieci.jpeg" class="img-fluid w-50 p-4" alt="Święci i Biesy">
                      </div>
                      <div class="card-body">
                          <article>
                          <h3 class="card-title">Święci i Biesy</h3>
                          <p class="card-text">
                          Witold Vargas i Paweł Zych, uznany i ceniony duet autorski, tym razem zabierają nas w podróż po zaświatach i ziemskim padole śladami legend o polskich świętych i biesach. 
                          W oparciu o ludowe wierzenia, przekazy historyczne i literaturę hagiograficzną autorzy odtworzyli kilkaset historii o niebiańskich wysłannikach i ich diabelskich oponentach działających na naszych ziemiach. Książka napisana barwnym, 
                          gawędziarskim stylem, bogata w ciekawostki historyczne, literackie, krajoznawcze. Opowieść o niebiańskich i piekielnych bohaterach dopełniają znakomite ilustracje oparte na kulturowych wyobrażeniach i fantazji autorów. 
                          </p>
                          <br>
                          <div class="d-flex justify-content-center">
                            <a class="btn btn-success" href="https://bonito.pl/k-90472823-swieci-i-biesy" role="button" style = "text-align:center;">Kup!</a>
                          </div>
                          
                          </article>
                        
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="img/duchy.jpeg" class="img-fluid w-50 p-4" alt="Duchy polskich miast i zamków">
                      </div>
                      <div class="card-body">
                        
                          <article>
                          <h3 class="card-title">Duchy polskich miast i zamków</h3>
                          <p class="card-text">
                          Pięknie ilustrowany leksykon duchów, zjaw i upiorów straszących w polskich miastach i zamkach. 
                          Autorzy odszukali w polskiej historii i legendach postacie najbardziej znane, ale też te zapomniane, a ciekawe duchy i widma. 
                          </p>
                          <div class="d-flex justify-content-center">
                            <a class="btn btn-success" href="https://bonito.pl/k-42083014-duchy-polskich-miast-i-zamkow" role="button" style = "text-align:center;">Kup!</a>
                          </div>
                          
                          </article>
                        
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="img/magiczne_zawody.jpeg" class="img-fluid p-4" alt="">
                </div>
                <div class="card-body">
                  
                    <article>
                    <h3 class="card-title">Magiczne zawody. Kowal, czarodziej, alchemik</h3>
                    <p class="card-text">
                    „Magiczne zawody. Kowal, czarodziej, alchemik” to kolejna książka autorstwa Witolda Vargasa i Pawła Zycha, stanowiąca kontynuację niezwykle popularnej serii Legendarz. 
                    Autorzy „Bestiariusza słowiańskiego” skupiają się tym razem na mitycznym zawodzie kowala. Wśród najczęściej powtarzających się wątków w etnicznej historii kowalstwa pojawiają się bogowie-kowale, czarownicy, pakt z diabłem, niebiańskie pochodzenie żelaza oraz transmutacja, polegająca na przemianie surowca w szlachetny kruszec. 
                    Książka, zawierająca wiele ciekawych opowieści, jak również kilkadziesiąt ilustracji autorstwa znanego tandemu, jest wspaniałą pozycją dla każdego miłośnika kultury słowiańskiej. 
                    </p>
                    <div class="d-flex justify-content-center">
                      <a class="btn btn-success" href="https://bonito.pl/k-90659975-magiczne-zawody-kowal-czarodziej-alchemik" role="button" style = "text-align:center;">Kup!</a>
                    </div>
                    
                    </article>
                  
                </div>
              </div>
        </div>
      </div>
    </section>

    <section id = "counter" class = "counter">
      <div class="main_counter_area">
        <div class="overlay p-y-3">
          <div class="container">
            <div class="row">
              <div class="main_counter_content text-center white-text wow  fadeInUp">
                <div class="col-md-3">
                  <div class="single_counter p-y-2 m-t-1">
                    <h2 class="statistic-counter">
                        <?php 
                    
                          include_once "licznik/licznik.php";

                        ?>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </main>
  <?php include("footer.html"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src = "js/jquery-1.11.3.min.js" crossoring="anonymus"></script>-->
    <!--<script src = "js/bootstrap.js" crossoring="anonymus"></script>-->
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/Counter-UP/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="skrypty/kursor.js"></script>
  </body>
</html>