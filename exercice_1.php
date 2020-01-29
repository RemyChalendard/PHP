<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $tableauA = array ();
        $tableauA = array ();
        $tableauAB = array ();

        for($i=0; $i<10; $i++){
            $tableauA[$i]= $i+1;
            $tableauB[$i]= $i+10+1;
            $tableauAB[$i]=  $tableauA[$i]+$tableauB[$i];
            echo '<br>'.'A'.$tableauA[$i].'B'.$tableauB[$i].'C'.$tableauAB[$i].'<br>';
        }
            var_dump($tableauA);
            var_dump($tableauB);
            var_dump($tableauAB);
        ?>
    </body>
</html>