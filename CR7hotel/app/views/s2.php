<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/uploads/signup.css">
</head>
<body>
    
    <form action="<?php echo'signup'?>" method="post">
    <h2>Sign Up</h2>
            <p>
                <label for="Email" class="floatLabel">Username</label>
                <input id="Email" name="username" type="text">
            </p>
            <p>
                <label for="password" class="floatLabel">Password</label>
                <input id="password" name="email" type="text">
                <span>Enter a password longer than 8 characters</span>
            </p>
            <p>
                <label for="confirm_password" class="floatLabel">Confirm Password</label>
                <input id="confirm_password" name="password" type="password">
                <span>Your passwords do not match</span>
            </p>
            <p>
                <input type="submit" value="Create My Account"  name="submit" id="submit">
            </p>
	</form>
</body>
</html>
