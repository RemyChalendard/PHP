<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>       
        <?php
     
        $tab_caracteristique_dupont = array ("Prénom" => "Paul",
                                     "Profession" => "Ministre",
                                     "Age" => 50);
        
        $tab_caracteristique_durand = array ("Prénom" => "Robert",
                                     "Profession" => "Agriculteur",
                                     "Age" => 45);
        
$tab_personne['Dupont'] = $tab_caracteristique_dupont;
$tab_personne['Durand'] = $tab_caracteristique_durand;

//var_dump($tab_personne);

echo '<table border>';
echo '<thread><tr><th>';
echo 'Clé';
echo '</th><th colspan="2">';
echo 'Valeur';
echo '</th></tr></thread>';
foreach ($tab_personne as $cle => $val) {
$nombre_ligne = count ($val) + 1;

echo '<tr><td rowspan="'.$nombre_ligne.'">';
echo $cle ;
echo '</td>' ;
echo '<td>Clé</td><td>Valeur</td></tr>';
foreach ($val as $Cle2 => $Val2) {
echo '<tr>';
echo '<td>'.$Cle2.'</td>';
echo '<td>'.$Val2.'</td>';
echo '</tr>';
}
}
echo '</table>';
        ?>       
    </body>
</html>