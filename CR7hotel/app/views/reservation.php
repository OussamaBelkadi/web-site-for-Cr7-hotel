<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/uploads/reservation.css">
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
          <a class="nav-link  me-2" href="<?php echo BURL.'product/reserve'?>">Reservation</a>
        </li>
      </ul>
      
      <div class="d-flex s">
        <a href="<?php echo'logins'?>"><button type="button" class="btn btn-outline-warning me-lg-2 me-3">Login</button></a>    
        <a href="<?php echo'sort'?>"><button type="button" class="btn btn-outline-warning">Logout</button></a>
      </div>
      
    </div>
  </div>
</nav>

    <div class="container-fluid px-lg-4 mt-5 slid">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide slid">
                <img src="/uploads/img/decor/pexels-donald-tong-189296.jpg" class="w-100 h-25 d-block" />
                </div>
                <div class="swiper-slide">
                <img src="/uploads/img/decor/pexels-donald-tong-189296.jpg"  class="w-100 h-25 d-block"/>
                </div>
                <div class="swiper-slide">
                <img src="/uploads/img/decor/pexels-pixabay-161758.jpg" class="w-100 h-25 d-block"/>
                </div>
                <div class="swiper-slide">
                <img src="/uploads/img/decor/pexels-pixabay-261102.jpg" class="w-100 h-25 d-block"/>
                </div>
                <div class="swiper-slide">
                <div class="swiper-slide">
                <img src="/uploads/img/decor/pexels-donald-tong-189296.jpg" class="w-100 h-25 d-block" />
                </div>
            </div>
        </div>
    </div>
    <!-- Check Availability -->
    <div class="container form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h2>RESERVER VOS CHAMBRE</h2>
                
                <form action="<?php echo BURL.'product/reservech';?>" method="POST">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Date de Réservation</label>
                            <input type="date" name="dated" class="form-control shadow-none"> 
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Date de Sortie</label>
                            <input type="date" name="datef" class="form-control shadow-none"> 
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Date de Sortie</label>
                            <input type="number" name="idc" value="<?php echo$id ?>" class="form-control shadow-none"> 
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Date de Sortie</label>
                            <input type="number" name="idu" value="<?php echo$_SESSION['id'] ?>" class="form-control shadow-none"> 
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Chambre</label>
                            <select  class="form-select selector" aria-label="Default select example">
                                <option selected>O</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select> 
                        </div>
                        <!-- <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Nombre du Personne</label>
                            <input type="number" name='nbrp' class="form-control shadow-none numberPr" value="4" min="0"> 
                        </div> -->
                        <div class="col-lg-2 mb-lg-3 mt-2 img">
                            <input id='btn-res' name='Enregister' type="submit" value="Enregister" class="btn text-white shadow-none custom-bg">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div id="suite" class="container suite">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h2>Choisie Votre Suite</h2>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" style="font-weight: 500;">Chambre</label>
                            <select class="form-select selector" aria-label="Default select example">
                                <option selected>Selecter votre choix</option>
                                <option value="1">Standard suite rooms</option>
                                <option value="2">Junior</option>
                                <option value="3">Presidential suite</option>
                                <option value="4">Penthouse suites</option>
                                <option value="5">Honeymoon suites</option>
                                <option value="5">Bridal suites</option>
                            </select> 
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Nombre du Personne</label>
                            <select class="form-select selector" aria-label="Default select example">
                                <option selected>Selecter votre choix</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                                <option value="4">5</option>
                                <option value="5">6</option>
                            </select> 
                        </div>
                        <div class="col-lg-2 mb-lg-3 mt-2">
                           <a href=""><input type="submit" value="submit" class="btn text-white shadow-none custom-bg"></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="fromper">
            
        </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
      });
    </script>
    <script src="/uploads/reserve.js"></script>
</body>
</html>