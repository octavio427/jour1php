<?php

$age = 32;
$majeur = "non";
$toto = ($age >= 18);

if ($toto) {
    $majeur = "oui";
}


$array = 
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

<p>Paul est majeur <?php echo $majeur;?>
    
</body>
</html>