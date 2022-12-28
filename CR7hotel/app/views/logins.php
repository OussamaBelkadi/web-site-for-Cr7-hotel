<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/uploads/login.css">
  </head>
  <body>
    <div class="login">
        <h1>login</h1>
        <form action="<?php echo'loginuser'?>" method="POST">
             <?php if(isset($data)){ ?>
              <div class="error"><h4>Input is faild</h4></div>
            <?php }?>
            <div class="form-group">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <?php if(isset($vide)){ ?>
              <div class="error"><p>Merci de renseigner une adresse email </p></div>
            <?php }?>

            <div class="form-group">
                <label class="form-label" for="password">Mot de passe</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <?php if(isset($vide)){ ?>
              <div class="error"><p>Merci de renseigner votre mot de passe</p></div>
            <?php }?>
            <a href="<?php echo BURL.'product/for'?>">Registrer</a>
            <input class="btn btn-success w-100" name="submit" type="submit" value="Connecter">
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>