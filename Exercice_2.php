<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $tableau = array ();
        for($i=1; $i<10; $i++){
            $tableau [$i] = rand(1,100);
        }
      sort ($tableau);
      $valeurs = implode (";", $tableau);
      echo "Les valeurs sont : ".$valeurs;
        
        ?>
    </body>
</html>
