<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Accès aux apprenants de Sonatel Academy</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="logo.png" alt="logo de la Sonatel Academy">
    <?php
    if (isset($_POST['mot_de_passe']) and $_POST['mot_de_passe'] ==  "colysenghor") {

        echo '<h1>Bravo! Vous y êtes</h1>
                <p class="aut">Maintenant renseignez la promo<br>pour y accéder</p>
            <div id="div">
                <div class="div1">
                    <form action="promo1.php" method="post">
                        <fieldset>
                            <legend class="leg">Promo 1</legend>
                            <p>Code<input type="text" name="code"></p>
                            <p>Nom<input type="text" name="nom"></p>
                            <p>Mois<input type="text" name="mois"></p>
                            <p>Année<input type="text" name="an"></p>
                            <input type="submit" value="Valider">
                        </fieldset>
                    </form>
                </div>
                <div class="div1" id="div2">
                    <form action="promo2.php" method="post">
                        <fieldset>
                            <legend class="leg">Promo 2</legend>
                            <p>Code<input type="text" name="code"></p>
                            <p>Nom<input type="text" name="nom"></p>
                            <p>Mois<input type="text" name="mois"></p>
                            <p>Année<input type="text" name="an"></p>
                            <input type="submit" value="Valider">
                        </fieldset>
                    </form>
                </div>
            </div>
            <p id="aut">
            Cette page est dédiée à l\'administration de Sonatel Academy.<br>Si vous n\'y travaillez pas,
            inutile d\'insister vous ne trouverez pas les codes d\'accés !
            </p>
        ';
    } 
    else{
        echo '<p>OOPS : mot de passe incorrect</p>';
    }
    ?>


</body>

</html>