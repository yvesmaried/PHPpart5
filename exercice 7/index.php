<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 7</title>
</head>

<body>
    <h1>exercice 7</h1>
    <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>

    <?php

        $region = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
        $region[51] = 'Reims';
        echo $region[51];
        print_r($region)
    ?>
</body>

</html>