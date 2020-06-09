<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 10</title>
</head>

<body>
    <h1>exercice 10</h1>
    <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.</p>
    <p>Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du
        département</p>

    <?php

        $region = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
        foreach($region as $key => $value){
            print "$key $value" . '<br>';
           }
    ?>
</body>

</html>