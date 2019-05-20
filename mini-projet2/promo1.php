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
    if ((isset($_POST['code']) && $_POST['code'] == 'kxy') and 
    (isset($_POST['nom']) && $_POST['nom'] == 'sortant') and 
    (isset($_POST['mois']) && $_POST['mois'] == 'novembre') and 
    (isset($_POST['an']) && $_POST['an'] == '2018')
    ) {

        echo  '<h1>Liste des apprenants</h1>';

        $fichier = 'promo1.txt'; // fichier

        if (file_exists($fichier)) {
            if (filesize($fichier) != 0) { // le fichier n'est pas vide

                $lignes = file($fichier);

                echo '<table class="tab" bgcolor="lime" border="1" style="border-collapse:collapse" cellpadding="10">';
                echo '<caption>Détails du fichier ' . $fichier . '</caption>';
                echo '<tr bgcolor="green">';
                echo '<th>Code</th>';
                echo '<th>Prénom</th>';
                echo '<th>Nom</th>';
                echo '<th>Date de naissance</th>';
                echo '<th>Numéro de téléphone</th>';
                echo '<th>Adresse email</th>';
                echo '<th>Statut</th>';
                echo '</tr>';

                foreach ($lignes as $ligne_num => $ligne) { // on lit le fichier de façon séquentielle
                    $array = explode('|', $ligne); // je retire le séparateur
                    echo '<tr>';
                    echo '<td class="td">' . $array[0] . '</td>';
                    echo '<td class="td">' . $array[1] . '</td>';
                    echo '<td class="td">' . $array[2] . '</td>';
                    echo '<td class="td">' . $array[3] . '</td>';
                    echo '<td class="td">' . $array[4] . '</td>';
                    echo '<td class="td">' . $array[5] . '</td>';
                    echo '<td class="td">' . $array[6] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else { // fichier vide
                echo 'Le fichier ' . $fichier . ' ne contient aucun enregistrement.';
            }
        } else { // fichier inexistant
            echo 'Le fichier ' . $fichier . ' n\'existe pas.';
        }
    } else {
        echo '<p>Erreur : vérifier vos données</p>';
    }
    ?>
    <div id="menu">
        <ul>
            <li><a href="modpromo1.php">Modification </a></li>
            <li><a href="exclupromo1.php">Exclusion</a></li>
            <li><a href="inscripromo1.php">Inscription</a></li>
        </ul>
    </div>

</body>

</html>