<?php
    require("head.php");
?>
<?php
    require("functions/database.php");
    $reponse = $db->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
    $reponse->bindParam(":pseudo", $_GET["pseudo"]);
    $reponse->execute();

    if (isset($_GET["message"])){
        echo $_GET["message"];?>
    <button> Ajouter une recette</button>
    <nav>
    <a href="functions/disconectAction.php">RETOUR</a>
    </nav>
    <?php
    }else{
    while($donnees=$reponse->fetch(PDO::FETCH_ASSOC)){
        ?>
<nav>
<a href="functions/disconectAction.php">RETOUR</a>
</nav>
        <div class="recette">
        <?php
        $donnees=str_replace(array("\r\n","\n"),'<br />',$donnees);

        ?>
            <h2 class="titre"><?=$donnees['recette']?></h2>
            <h3>Ingrédients</h3>
            <p class="ing"><?=$donnees['ingredient']?></p>
            <h3>Etapes</h3>
            <p class="ing"><?=$donnees['etape']?></p>
        </div>
        <img class="img" src="<?=$donnees['image']?>">

        
    <?php
    }
    }
?>