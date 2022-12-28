<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/uploads/add.css">
</head>
<body>
    <form action="<?php echo BURL.'product/upload/'.$element['id'] ?>" method="POST" enctype='multipart/form-data'>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <input  class="file" type="file" value="<?php echo$element['img']?>" name='files'>
        <input type="text" name="name" value="<?php echo$element['name']?>" placeholder=" Nom du Chambre">
        <input type="text" name="des" placeholder=" Description" value="<?php echo$element['descrption'] ?>">
        <select  name="type" class="select">
                                <!-- <option selected>Selecter votre choix</option> -->
                                <option value="Singel">Singel</option>
                                <option value="Double">Doubel</option>
                                <option value="Suite">Suite</option>
        </select> 
        <select name="suitetype" class="suite" id="suite">
                                <option value="">Selecter votre choix</option>
                                <option value="Standard suite rooms">Standard suite rooms</option>
                                <option value="Junior">Junior</option>
                                <option value="Presidential suite">Presidential suite</option>
                                <option value="Penthouse suites">Penthouse suites</option>
                                <option value="Honeymoon suites">Honeymoon suites</option>
                                <option value="Bridal suites">Bridal suites</option>
        </select> 
        <input type="text" name="des" value="<?php echo$element['descrption']?>" placeholder=" Description">
        <input type="text" name="prix" placeholder="Prix" value="<?php echo$element['prix'] ?>">
        <a href="<?php echo'/upload'.$element['id']?>"><button name="submit">MODIFIER</button></a>
        <a href="<?=BURL.'product/dashbord'?>">Go back</a>
    </form>
    <script src="/uploads/form.js"></script>
</body>
</html>