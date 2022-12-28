<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/uploads/evenment.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold h-font" href="#">CR7 Hotel</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="<?php echo BURL.'product/home'?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="<?php echo BURL.'product/chambre'?>">chambre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="<?php echo BURL.'product/restaurant'?>">Restaurant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="<?php echo BURL.'product/event'?>">Event</a>
        </li>
      </ul>
      
      <div class="d-flex s">
        <?php if(empty($_SESSION['email'])){ ?><a href="<?php echo'logins'?>"><button type="button" class="btn btn-outline-warning me-lg-2 me-3">Login</button></a> <?php }?>
        <a href="<?php echo'sort'?>"><button type="button" class="btn btn-outline-warning">Logout</button></a>
      </div>
      
    </div>
  </div>
</nav>

    <section class="fisrt-page">
        <!-- <nav class="header">
            <div class="cr mt-4">
                <h1 >
                    <a  class="logo uppercase font-bold" href="">HOTEL <span class="text-yellow-500"> CR7</span></a>
                </h1>
            </div>
            <ul class="">
                <li class="inline-block m-4 ">
                    <a href="#">
                        <span>Home</span>
                    </a>
                </li>
                <li class="inline-block mr-4">
                    <a href="#">
                        <span>Reservation</span>
                    </a>
                </li>
                <li class="inline-block mr-4">
                    <a href="#">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </nav> -->

        <img src="/uploads/img/logo-removebg-preview (1).png" alt="logo hotel" class="img">
        <h1 class="pre">ÉVÈNEMENTS</h1>
    </section>
    <section class="event-s">
        <div class="event-space">
            <p>Un environnement idéal pour toutes sortes</p>
            <p> d’événements.</p>
        </div>
        <div class="event-pres">
            <div class="event-pre-des">
                <p class="event-p1">EVENTS</p> 
                <h3>Meeting & Reception</h3>
                <p class="event-p2">Un choix d’espaces de réception. Les espaces intérieurs peuvent être entièrement privatisés pour accueillir tout type de manifestation et jusqu’à 300 invités avec un cadre décontracté et des équipements de pointe.</p>
                <button>DEMANDER UN DEVIS</button>
            </div>
            <div class="event-img">
                <img src="/uploads/img/Event/Event-SL.jpg" alt="">
            </div>
        </div>
    </section>
    <div class="collection">
        <div class="barre"></div>
        <div class="model">
            <div class="slider">
                <input type="radio" class="radio" name="images" id="radio-1" checked>
                <input type="radio" class="radio" name="images" id="radio-2">
                <input type="radio" class="radio" name="images" id="radio-3">
                <input type="radio" class="radio" name="image" id="radio-4">

                <div class="slide" id="slide-1">
                    <img src="/uploads/img/Event/Event-SL.jpg" alt="image du chambre">
                    <div class="caption">Sale <span>SUPERIEURE</span></div>
                </div>
                <div class="slide" id="slide-2">
                    <img src="/uploads/img/Event/Jalsa.jpg" alt="image du chambre">
                    <div class="caption">Sale  <span>Deluxe</span></div>
                </div>
                <div class="slide" id="slide-3">
                    <img src="/uploads/img/Event/Sale-MT.jpg" alt="image du chambre">
                    <div class="caption">Sale <span>Supérieure</span></div>
                </div>
                <div class="slide" id="slide-4">
                    <img src="/uploads/img/Event/pexels-pixabay-159213.jpg" alt="image du chambre">
                    <div class="caption">Sale<span>Deluxe</span></div>
                </div>
                <div class="dots">
                    <label for="radio-1" id="label-1"></label>
                    <label for="radio-2" id="label-2"></label>
                    <label for="radio-3" id="label-3"></label>
                    <label for="radio-4" id="label-4"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="infrats">
        <div class="infrat">
            <div class="infrat-p">
                <p>Plusieurs configurations de salles sont disponibles sur demande, avec des équipements de dernières générations et un service sur mesure pour faire de votre réunion un succès. Une salle de sous-commission est située au premier étage de l’hôtel et peut accueillir jusqu’à 20 personnes.</p>
            </div>
        </div>
            <div class="infrat-icon">
                <img src="/uploads/img/Icon/bouclier.png" alt="">
                <img src="/uploads/img/Icon/document.png" alt="">
                <img src="/uploads/img/Icon/navigateur.png" alt="">
                <img src="/uploads/img/Icon/film.png" alt="">
            </div>
    </div>
    <div class="offret-event">
        <div class="offret">
            <h3>RÉSERVER POUR UN ÉVÉNEMENT</h3>
            <p>Réservez votre prochain séjour à l'Hivernage Hotel & Spa directement sur notre site,</p>
            <p> et bénéficiez de nombreux avantages exclusifs.</p>
            <button>RESERVER MAINTENANT</button>
        </div>
    </div>
    
</body>
</html>