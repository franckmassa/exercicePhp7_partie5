<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice7</title>
</head>
<body>
  <p>
    <?php
    //Déclaration de la variable haut De France avec pour index le numéro des départements
    $hautDeFrance = array('60' => 'Oise', '02' => 'Aisne',
    '80' => 'Somme', '59' => 'Nord', '62' => 'Pas-De-Calais', '51' => 'Marne');
    //Affichage du département de la ville de Reims
    echo $hautDeFrance [51];
    ?>
  </p>
</body>
</html>
