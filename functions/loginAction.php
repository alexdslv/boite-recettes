<?php
require("database.php");
if( empty($_POST["pseudo"])){
    $message = "Vous devez mettre un pseudo";
    header("Location: ../login.php?message=$message");
}

if( !empty($_POST["pseudo"])){
    $req = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
    $req->bindParam(":pseudo", $_POST["pseudo"]);
    $req->execute();

    $donnees = $req->fetch(PDO::FETCH_ASSOC);
if ($donnees == false){
        $message = "Aucune recette pour ce pseudo !";
        header("location: ../main.php?message=$message");

}else{
    $pseudo = $_POST["pseudo"];
    session_start();
    $_SESSION["pseudo"] = $_POST["pseudo"];
    header("Location: ../main.php?pseudo=$pseudo");
    }
}


?>