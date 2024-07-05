<?php
$age = 19;
$taille = 1.90;
$prenom = "Luka";
$ville = "Cannes";

$chat = 6;
$chien = 4;
$animaux = $chat + $chien;

if ($animaux >= 10){
    $texte = " Waouh, vous avez beaucoup d'animaux!";
}
if ($animaux <= 10){
    $texte = " Vous avez quelques animaux";
}

$c = 8;
$d = 96;
$total = $c + $d ;

$texte1 = "Bonjour, " ;
$texte2 = "J'habite à " ;
$totaltexte = $texte1 . $texte2 . $ville;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <h1>Hello <?php echo $prenom ?></h1>
    <p>J'ai <?= $age; ?> ans.</p>
    <p>J'habite a <?php echo $ville ?>.</p>
    <p>Ma taille est de <?php echo $taille ?> M.</p>

        <p>J'ai <?php echo $chat; ?> chat(s).</p>
        <p>J'ai <?php echo $chien; ?> chien(s).</p>
        <p>J'ai <?php echo $animaux; ?> animaux.</p>

        <p><?php echo $texte;?></p>

            <p>J'ai <?= $c; ?> sacs de Fraises Francaise.</p>
            <p>J'ai <?= $d; ?> sacs de Fraises espagne.</p>
            <p>J'ai <?= $total; ?> sacs de Fraises aux totales.</p>

    
</body>
</html>