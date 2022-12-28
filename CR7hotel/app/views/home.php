<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/uploads/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/uploads/chambre.css">
</head>
<body class="bg-light">

<nav class="navbar-expand-lg bg-white shadow-sm fixed-top">
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
                    <a  class="logo uppercase font-bold ml-6 w-120px" href="">HOTEL <span class="text-yellow-500"> CR7</span></a>
                </h1>
            </div>
            <ul class="">
                <li class="inline-block m-4 ">
                    <a href="#">
                        <span>Home</span>
                    </a>
                </li>
                <li class="inline-block mr-4">
                    <a href="">
                        <span>Reservation</span>
                    </a>
                </li>
                <li class="inline-block mr-4">
                    <a href="#">
                        <span>Restauration</span>
                    </a>
                </li>
                <li class="inline-block mr-4">
                  <a href="">
                      <span>Chambre</span>
                  </a>
              </li>
            </ul>
        </nav> -->

        <img src="/uploads/img/logo-removebg-preview (1).png" alt="logo hotel" class="img">
        <h1 class="pre">URBAN & UNIQUE</h1>
        <h1 class="deu">LUXE ET</h1>
        <h1 class="tro">CONVIVIALITE</h1>
        <div class="btn">RESERVE</div>
    </section>
    <section class="spat-form">
      <div class="ads-spa">
        <div class="indice">
            <div class="text-i">
                <h3>WELCOME</h3>
                <p>Hivernage Hotel & Spa
                propose à ses hôtes une plongée au cœur du triangle d’or de Marrakech, de par sa situation dans le quartier branché de l’Hivernage, à quelques minutes à pied de la légendaire place Jamâa el Fna...</p>
            </div>
            <img src="/uploads/img/pexels-pixabay-221457.jpg" alt="image hotel" class="img-1">
        </div>
      </div>
    </section>
    <section class="session-C">
        <div class="S-C">
            <div class="chambre">
                <div class="cbr-1">
                    <p class="cbr-1ex">EXPLORER</p>
                    <p>Chambres & Suites</p>
                </div>
                <div class="cbr-2">
                    <p>Le confort et le raffinement avec un avantage incontestable. Une vue imprenable sur la Koutoubia et les montagnes de l’Atlas</p>
                    <button class="cbr-2-btn">DECOUVRIR</button>
                </div>
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
                    <img src="/uploads/img/Luxe/lux1.jpg" alt="image du chambre">
                    <div class="caption">CHAMBRE <span>SUPERIEURE</span></div>
                </div>
                <div class="slide" id="slide-2">
                    <img src="/uploads/img/Luxe/lux2.jpg" alt="image du chambre">
                    <div class="caption">Chambre  <span>Deluxe</span></div>
                </div>
                <div class="slide" id="slide-3">
                    <img src="/uploads/img/Luxe/lux3.jpg" alt="image du chambre">
                    <div class="caption">Twin <span>Supérieure</span></div>
                </div>
                <div class="slide" id="slide-4">
                    <img src="/uploads/img/Luxe/lux5.jpg" alt="image du chambre">
                    <div class="caption">Suite <span>Deluxe</span></div>
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
    <div class="restaux">
        <div class="res-1">
            <p>Atmosphère Chaleureuse</p>
            <img src="/uploads/img/Chef/pexels-naim-benjelloun-2291599.jpg" alt="">
        </div>
        <div class="res-des">
            <h3>RESTAURATION</h3>
            <p>Une Expérience</p> <p> Gastronomique </p> 
            <p> Mémorable</p>
            <span>Ouvert: 7/7 12:00H - 02:00H </span>
            <button>SAVOURER</button>
        </div>
        <div class="res-2">
            <img src="/uploads/img/Chef/pexels-cottonbro-studio-6466292.jpg" alt="">
            <p>Plaisirs Culinaires</p>
        </div>
    </div>
    <div class="spat">
        <div class="spat-img"><img src="/uploads/img/Spat/pexels-castorly-stock-3610006.jpg" alt="image spat" class="img-spat"></div>
        <div class="spat-des"><h3>Spa & Wellness</h3>
            <p></p>Well-being is above all a matter of mind. Drawing on Moroccan traditions and know-how in the field of beauty and relaxation, Mogador Hotels & Resorts offers travellers spas and treatment rooms equipped with Jacuzzis, saunas and hammams. Offering travellers an exclusive and refreshing wellness experience, these relaxation areas allow them to let go in a clean and quiet environment. They also allow them to succumb to the benefits of natural massages made from exceptional products, but also to evacuate toxins, tone their muscles and permanently reconnect their bodies with their minds.</p></div>
    </div>
    <div class="offret-space">
      <div class="offret">
          <h3>MEILLEUR TARIF GARANTI</h3>
          <p>Réservez votre prochain séjour à l'Hivernage Hotel & Spa directement sur notre site,</p>
          <p> et bénéficiez de nombreux avantages exclusifs.</p>
          <button>RESERVER MAINTENANT</button>
      </div>
  </div>
    <footer>
        <div class="main-content">
          <div class="left box">
            <h2>About us</h2>
            <div class="content">
              <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
              <div class="social">
                <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
                <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
              </div>
            </div>
          </div>
  
          <div class="center box">
            <h2>Address</h2>
            <div class="content">
              <div class="place">
                <span class="fas fa-map-marker-alt"></span>
                <span class="text">Maroc, Marrekech</span>
              </div>
              <div class="phone">
                <span class="fas fa-phone-alt"></span>
                <span class="text">+212-524526700</span>
              </div>
              <div class="email">
                <span class="fas fa-envelope"></span>
                <span class="text">Cr7@cr7.com</span>
              </div>
            </div>
          </div>
  
          <div class="right box">
            <h2>Contact us</h2>
            <div class="content">
              <form action="#">
                <div class="email">
                  <div class="text">Email *</div>
                  <input type="email" required>
                </div>
                <div class="msg">
                  <div class="text">Message *</div>
                  <textarea rows="2" cols="25" required></textarea>
                </div>
                <div class="btn">
                  <button type="submit">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="bottom">
          <center>
            <span class="credit">Created By <a href="https://www.codingnepalweb.com">CodingNepal</a> | </span>
            <span class="far fa-copyright"></span><span> 2020 All rights reserved.</span>
          </center>
        </div>
      </footer>
    

</body>
</html>