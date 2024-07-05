
<?php

$text = "Hello La Plateforme!";
$text1 = "Hello La Plateforme!";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<!--en ligne-->

    <?php echo $text; ?>

<!--en bloc-->
        <div>
            <p>
                <?= $text1; ?>
            </p>
        </div>
    
</body>
</html>