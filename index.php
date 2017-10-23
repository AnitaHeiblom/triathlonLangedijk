<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title>Triathlon Langedijk</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="segment">
    <img src="images/logo_triathlon_langedijk.png" alt="Logo triathlon Langedijk" width="205" height="103">
</div>
<div class="black-bar">
</div>

<div class="white-bar">
    <div class="container">
        <a href="https://www.facebook.com/zwefilo/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://twitter.com/zwefilo"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/channel/UCvcPU9wPOFJsHIDqAlDSPow"><i class="fa fa-youtube"
                                                                              aria-hidden="true"></i></a>
    </div>
</div>

<div class="container-fluid">
    <div id="carouselExample">
        <div class="carousel-inner row w-auto mx-auto" role="listbox">
            <div class="carousel-item col-12 col-md-4 active">
                <img class="img-fluid mx-auto d-block" src="images/zwemmen.jpg" alt="Zwemmen">
            </div>
            <div class="carousel-item col-12 col-md-4">
                <img class="img-fluid mx-auto d-block" src="images/fietsen.jpg" alt="Fietsen">
            </div>
            <div class="carousel-item col-12 col-md-4">
                <img class="img-fluid mx-auto d-block" src="images/lopen.jpg" alt="Lopen">
            </div>
    </div>
</div>


<div class="row no-gutters">
    <div class="col col-lg-4">
        <hr class="blue">
    </div>
    <div class="col col-lg-4">
        <hr class="red">
    </div>
    <div class="col col-lg-4">
        <hr class="green">
    </div>
</div>


<!--navigatie moet boven aan de pagina blijven als je naar beneden scrollt-->

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Triathlon Langedijk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active dropdown">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="inschrijving.php">Inschrijving <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organisatie <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="bestuur.html">Bestuur</a>
                        <a class="dropdown-item" href="vrijwilligers.html">Vrijwilligers</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Deelnemersinformatie <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="deelnemers.html">Deelnemers</a>
                        <a class="dropdown-item" href="algemeen.html">Algemeen</a>
                        <a class="dropdown-item" href="zwemmen.html">Zwemmen</a>
                        <a class="dropdown-item" href="fietsen.html">Fietsen</a>
                        <a class="dropdown-item" href="lopen.html">Lopen</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="uitslagen.html">Uitslagen<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fotos.html">Foto&rsquo;s<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sponsors <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="sponsors.html">Sponsoroverzicht</a>
                        <a class="dropdown-item" href="sponsorworden.html">Sponsor worden</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="links.html">Links<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="main-content">
        <div class="row">
            <div class="col-12 col-lg-8 col-md-9 col-sm-12">
                <h2>Welkom bij Triathlon Langedijk</h2>
                <p>Triatlon Langedijk is een 1/8e triathlon die wordt gehouden in Oudkarspel, vlak boven Alkmaar. Het is een laagdrempelig evenement waar zowel toppers als de lokale recreanten meedoen en staat vooral voor respect voor elkaar en voor gezelligheid.
                    Voor in de agenda:
                    De Triathlon Langedijk 2018 wordt gehouden op woensdag, <time datetime="2018-06-20"> 20 juni 2018</time>.
                </p>
            </div>
                <div class="col-12 col-lg-4 col-md-3 sm-12">
                    <div class="side-bar">
                    <h2>Nieuws</h2>
                    <p>Incididunt sirloin chicken biltong do aliqua doner bacon kevin shoulder dolore. Cillum ullamco
                        t-bone, ball tip pancetta dolor tempor corned beef aute pork chop. Labore commodo strip steak
                        chuck, dolore alcatra burgdoggen ut. Pancetta exercitation sed shankle bacon ipsum laborum pork
                        chop biltong qui t-bone occaecat nostrud. In incididunt ham hock, dolore lorem occaecat
                        cupidatat venison boudin deserunt short ribs in hamburger velit magna. Shank turducken
                        landjaeger alcatra non qui kielbasa in hamburger picanha laboris meatball doner labore.</p>
                </div>
                </div>
        </div>
</div>
</div>
    <div class="footer">

        <div class="row no-gutters">
            <div class="col col-lg-4">
                <hr class="blue">
            </div>
            <div class="col col-lg-4">
                <hr class="red">
            </div>
            <div class="col col-lg-4">
                <hr class="green">
            </div>
        </div>
        <div class="container">
            <div class="row">

                </div>
            </div>
        </div>

    </div>
    </div>
</div>
</div>

<script src="javascript.js" type="text/javascript"></script>
</body>
</html>