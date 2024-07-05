<?php

$str = " la plateforme ";
$str2 = " vive ";
$str3 = " contenant ! ";
$totalstr = $str. $str2. $str3;

$val = 6;
$val1 = 4 ;
$totalval = $val + $val1;

$myBool = true ;
$myBool1 = false ;

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

<p><?php echo $totalstr; ?></p>

<p>total <?php echo $totalval; ?></p>

<?php echo $myBool ?>
<?php echo $myBool1?>
    
</body>
</html>