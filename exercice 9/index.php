<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 9</title>
</head>

<body>
    <h1>exercice 9</h1>
    <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>

    <?php

        $region = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
        foreach($region as $value){
            print $value.' ';
           }
    ?>
</body>

</html>