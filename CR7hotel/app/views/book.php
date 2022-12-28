
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/uploads/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body class="bg-light">

            <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top mb-5">
            <div class="container-fluid">
                <a class="navbar-brand text-dark me-5 fw-bold h-font" href="#">CR7 Hotel</a>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link text-dark active me-2" aria-current="page" href="<?php echo BURL?>">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-dark me-2" href="<?php echo BURL.'product/chambre'?>">chambre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-dark me-2" href="<?php echo BURL.'product/reserve'?>">Reservation</a>
                    </li>
                </ul>
                
                <div class="d-flex s">
                    <a href="<?php echo'logins'?>"><button type="button" class="btn btn-outline-warning me-lg-2 me-3">Login</button></a>  
                    <a href="<?php echo'sort'?>"><button type="button" class="btn btn-outline-warning">Logout</button></a>
                </div>
                
                </div>
            </div>
            </nav>

                <div class="row my-5 d-flex justify-content-center text-justify">
                    <h3 class="fs-4 mb-3 ">Recent Orders</h3>
                    <div class="col-10">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>

                                <tr>
                                    <th scope="col" width="50">id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Des</th>
                                    <th scope="col">Type de Suite</th>
                                    <th scope="col">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($product as $prod){?>
                                <tr>
                                    <th scope="row"></th>
                                    <th ><?php echo $prod['dated']?></th>
                                    <td><?php echo $prod['datef'] ?></td>
                                    <td><?php echo $prod['name'] ?></td>
                                    <td><?php echo $prod['type'] ?></td>
                                    <td><a class="mod" href="product"><button>Modifier</button></a></td>
                                    <td><a class="sup" href=""><button>Supprimer</button></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>