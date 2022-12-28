
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/uploads/chambre.css">
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



<div class="container-fluid px-lg-4 ">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/uploads/img/decor/pexels-max-vakhtbovych-7045767.jpg" class="w-100 h-25 d-block" />
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
                <form action="<?php echo'chambretype'?>" method="POST">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Date de Réservation</label>
                            <input id="dated" type="date" class="form-control shadow-none"> 
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Date de Sortie</label>
                            <input id='datef' type="date" class="form-control shadow-none"> 
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Chambre</label>
                            <select class="form-select selector" name='option' aria-label="Default select example">
                                <option value="ALL" selected>Selecter votre choix</option>
                                <option value="Single">lit Single</option>
                                <option value="Double">lit Double</option>
                                <option value="Suite">Suite</option>
                            </select> 
                        </div>
                        <div class="col-lg-3 mb-3" id="type">
                        </div>
                        
                        <div class="col-lg-2 mb-lg-2  mt-3">
                            <input type="submit" name="submit" value="submit" class="btn text-white shadow-none custom-bg">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!--Chambre-->
    <section>
        <div class="content">
            <?php foreach ($chambre as $cham) {?>
                <div class="card">
            
                    <div class="img">
                        <img src="/uploads/img/chambre-1/<?php echo$cham['img']?>" alt="">
                    </div>
                    <div class="desc">
                        <div class="disc">
                            <h3><?php echo$cham['name']?></h3>
                            <h4><?php echo$cham['type']?></h4>
                            <h6 class="suitetype"><?php echo$cham['suitetype']?></h6>
                            <p><?php echo$cham['descrption']?></p>
                        </div>
                        <div class="btn-r">
                            <?php if(isset($_SESSION["email"])){ ?>                    
                                <a class="disc" id='reserve' href="<?php echo'reservation/'.$cham['id']?>"><button  class="rev">Reserver</button></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </section>
    <!-- <dialog class="container-ter">
            <p>Reserver</p>   
    </dialog> -->
    <div class="tp">go</div>
    <!-- JavaScript Bundle with Popper -->
    <script src="/uploads/serch.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Initialize Swiper -->
    <script>
        var date = new Date();
        td=date.getDate();
        md=date.getMonth() + 1;
        if(td<10){
            td= 0 + td;
        }
        if(md<10){
            md= 0 + md;
        }
        yd=date.getFullYear();
        var dt= yd+"-"+md+"-"+td;
            document.getElementById('dated').setAttribute('min',dt);
            document.getElementById('datef').setAttribute('min',dt);
    
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
      });
    </script>
</body>
</html>