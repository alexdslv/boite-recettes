<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="dist/style.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Indie+Flower&display=swap" rel="stylesheet">
<body class="main">
    <div class="form-container">
        <h1>La boîte à recettes</h1>
        <form action="functions/loginAction.php" method="post">
            <input type="text" name="pseudo" placeholder="Votre pseudo">
            <input type="submit" value="connexion">
        </form>
        <div class="message">
            <?php
                if( isset($_GET["message"])){
                    echo $_GET["message"];
                }
            ?>
        </div>
    </div>
   
</body>
</html>