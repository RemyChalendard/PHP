<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php     
$tableau = array (6, 25, 35,61);
$tableau2 = array(12,24,46) ;
$somme = 0 ;
$nb_tableau=count($tableau);
$nb_tableau2=count($tableau2);
for ($i=0; $i<$nb_tableau; $i++) {
    for ($j=0; $j<$nb_tableau2; $j++) {
        $somme = $somme + $tableau [$i] * $tableau2 [$j];
    }
} 
echo "la valeur S est : ".$somme;        
        ?>
    </body>
</html>
