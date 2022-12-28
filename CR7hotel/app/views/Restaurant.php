<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="/uploads/retaurant.css">
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
      <?php if(empty($_SESSION['email'])){?><a href="<?php echo'logins'?>"><button type="button" class="btn btn-outline-warning me-lg-2 me-3">Login</button></a> <?php }?>
        <a href="<?php echo'sort'?>"><button type="button" class="btn btn-outline-warning">Logout</button></a>
      </div>
      
    </div>
  </div>
</nav>

    <section class="fisrt-page">
        <!-- <nav class="header">
            <div class="">
                <h1 >
                    <a  class="logo uppercase font-bold" href="">HOTEL <span class="text-yellow-500"> CR7</span></a>
                </h1>
            </div>
            <ul class="">
                <li class="">
                    <a href="#">
                        <span>Home</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span>Reservation</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </nav> -->

        <img src="/uploads/img/logo-removebg-preview (1).png" alt="logo hotel" class="img">
        <h1 class="pre">RESTAURATION</h1>
    </section>
    <div class="pre-offret">
        <h3 class="res-barre">RESTAURATION</h3>
        <h4>La Table Du Marché</h4>
    </div>
    <section class="table">
        <div class="image-table">
            <img src="/uploads/img/table/pexels-life-of-pix-67468.jpg" alt="">
        </div>
        <div class="image-table">
            <img src="/uploads/img/table/pexels-pixabay-262047.jpg" alt="">
        </div>
        <div class="image-table">
            <img src="/uploads/img/table/pexels-pixabay-460537.jpg" alt="">
        </div>
        <div class="image-table">
            <img src="/uploads/img/table/pexels-rene-asmussen-1581384 (1).jpg" alt="">
        </div>
    </section>
    <div class="rest-ads">
        <p>Un établissement à l’esprit familial, qui sert une cuisine</p> <p>inventive de saison à base de produits du terroir. Il s’agit d’une table incontournable</p>
        <p> et d’une véritable institution gastronomique de Marrakech.</p>
        <button>Reserver Une Table</button>
        <p class="p-tel">Par téléphone : 0524-424109</p>
        <p class="p-tel">Ouvert 7/7 de 12:00H à 02:00H</p>
    </div>
    <section class="food-dash">
        <h4>EXTRAIT DE LA CARTE</h4>
        <div class="dash-food">
            <div class="plat">
                <img src="/uploads/img/Plat/pexels-ella-olsson-1640772.jpg" alt="">
                <div class="plat-des">
                    <h4>Spaghetti</h4>
                    <p>Fruits de mer, tomates confites, basilic</p>
                </div>
            </div>
            <div class="plat">
                <img src="/uploads/img/Plat/pexels-jan-n-g-u-y-e-n-🍁-699953.jpg" alt="">
                <div class="plat-des">
                    <h4>Spaghetti</h4>
                    <p>Fruits de mer, tomates confites, basilic</p>
                </div>
            </div>
            <div class="plat">
                <img src="/uploads/img/Plat/dash.jpg" alt="">
                <div class="plat-des">
                    <h4>Spaghetti</h4>
                    <p>Fruits de mer, tomates confites, basilic</p>
                </div>
            </div>
            <div class="plat">
                <img src="/uploads/img/Plat/kockiz.jpg" alt="">
                <div class="plat-des">
                    <h4>Spaghetti</h4>
                    <p>Fruits de mer, tomates confites, basilic</p>
                </div>
            </div>
            <div class="plat">
                <img src="/uploads/img/Plat/tajin.jpg" alt="">
                <div class="plat-des">
                    <h4>Spaghetti</h4>
                    <p>Fruits de mer, tomates confites, basilic</p>
                </div>
            </div>
            <div class="plat">
                <img src="/uploads/img/Plat/danone.jpg" alt="">
                <div class="plat-des">
                    <h4>Spaghetti</h4>
                    <p>Fruits de mer, tomates confites, basilic</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="expot">
            <img src="/uploads/img/Plat/chef.jpg" alt="">
            <div class="expot-des">
                <p class="expot-p">DÉCOUVRIR</p>
                <h4>La Table Du Marché Gourmet Market</h4>
                <p class="des-expot">Le rendez-vous des amateurs de pâtisserie et de boulangerie traditionnelles et européenne. Des viennoiseries alléchantes ainsi que des pâtisseries marocaines peuvent se déguster accompagnées d’un jus de fruit frais, d’un thé raffiné ou encore d’un café à l’arôme puissant.</p>
                <p>Ouvert 7/7 de 7:00 AM jusqu'au 03:00H du matin</p>
                <button class="btn-expot">Voir le Menu</button>
            </div>
        </div>
    </section>
</body>
</html>