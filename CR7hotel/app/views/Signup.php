<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/uploads/signup.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="titel">Registrer</div>
            <form action="<?php echo'signup'?>" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nom Complet</span>
                        <input type="text" name="name" placeholder="Entrer votre Nom" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nom utilisateur</span>
                        <input type="text" name="username" placeholder="Entrer votre Nom" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" placeholder="Entrer votre Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Numéraux du Télephone</span>
                        <input type="text" name="num" placeholder="Num Télephone" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mot de passe</span>
                        <input type="password" name="motpass" placeholder="Mot de passe" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Reprend le mot de passe</span>
                        <input type="password" name="remotpass" placeholder="Reprend le mot de passe" required>
                    </div>
                </div>
                    <div class="button">
                        <a href=""><input type="submit" name="submit" value="Enregistrer"></a>
                    </div>
                
            </form>

        
    </div>
</body>
</html>