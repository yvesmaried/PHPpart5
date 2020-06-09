<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 4</title>
</head>

<body>
    <h1>exercice 4</h1>
    <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>

    <?php

        $month = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
        $month [7] = "août";
        echo $month [7];
    ?>
</body>

</html>