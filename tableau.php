<?php
$tableau = array('Jean','Robert','Paul','Joe','Alain');
echo $tableau[0];

$tableau[1]='Nadia';

$tableau=array();
$tableau[0] = 'Jean';
$tableau[1] = 'Robert';
$tableau[2] = 'Paul';
$tableau[3] = 'Joe';
$tableau[4] = 'Alain';

$tableau=array();
$tableau[] = 'Jean';
$tableau[] = 'Robert';
$tableau[] = 'Paul';
$tableau[] = 'Joe';
$tableau[] = 'Alain';

$tableau = ['Jean','Robert','Paul','Joe','Alain'];

//Tableau associatif

$tableau = array ('A1' => 'Jean', 'B4' => 'Robert', 3=>'Paul','Toto'=>'Joe','H'=>'Alain');

$tableau = array();
$tableau['A1'] = 'Jean';
$tableau['B4'] = 'Robert';
$tableau[3] = 'Paul';
$tableau['toto'] = 'Joe';
$tableau ['H'] = 'Alain';

//Pertinences des clefs
$personne = array();
$personne['Nom'] = 'Martin';
$personne['Prenom'] = 'Monique';
$personne['Age'] = 50;

echo ' Age : '.$personne['Age'].'<nbr>';

//3 constantes de type tableau
const couleurs = array('rouge' , ' vert ', 'noir');
echo couleurs[1];

define ('COLORS', array (
        'rouge',
        'vert',
        'noir'
    ));
echo COLORS[1];

$tableau = array('Jean','Robert','Paul','Joe','Alain');
for ($i = 0 ; $i < sizeof($tableau) ; $i++) {
echo $tableau [$i].'<br>';   
}

$tableau = array ('Jean','Robert','Paul','Joe','Alain');
foreach ($tableau as $val) {
    echo $val.'<nbr :>';
}

$tableau = array ('Al' => 'Jean' , 'B4' => 'Robert', 3=> 'Paul', 'toto' => 'Joe', 'H' => 'Alain');
foreach ($tableau as $cle => $val) {
    echo 'cle : ' .$cle. ', valeur : '.$val.'<br>';
}
$tableau = array ('Al' => 'Jean' , 'B4' => 'Robert', 3=> 'Paul', 'toto' => 'Joe', 'H' => 'Alain');
foreach ($tableau as $val) {
    echo 'valeur : '.$val. '<br / >';
}
$tab = [0];
foreach ($tab as &$val) {
    var_dump($val);
    $tab[1]=1;
}

$tableau = array ('Al' => 'Jean' , 'B4' => 'Robert', 3=> 'Paul', 'toto' => 'Joe', 'H' => 'Alain');
print_r($tableau);

$tableau = array('Al' =>'jean', 'B4' => 'Robert',3=> 'Paul', 'Toto' => 'Joe', 'H'=> 'Alain');
$taille = count ($tableau);
echo 'La taille du tableau est :  '.$taille;

$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
if (in_array('Robert', $tableau)) {
    echo ' , Robert est dans le tableau ';
}

$tableau = array ('10','33','55','78');
if (in_array('33', $tableau, true)) {
    echo ' , 33 est dans le tableau';
}else{
    echo ' , 33 est pas dans le tableau ' ;
}

$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
if (array_key_exists (3 , $tableau)) {
    echo ' , la clef 3 est dans le tableau';
}

$tableau = array ('Jean' , 'Robert', 'Paul', 'Joe' , 'Alain');
if (array_key_exists (4, $tableau)) {
echo ' , la clef 4 est dans le tableau' .$tableau [4];
}

$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
sort ($tableau);
foreach ($tableau as $cle =>$valeur) {
 echo 'Cle :  ' .$cle. ', valeur : ' .$valeur. '<br>' ;
}

$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
asort ($tableau);
foreach ($tableau as $cle =>$valeur) {
 echo 'Cle :  ' .$cle. ', valeur : ' .$valeur. '<br>' ;
}

$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
rsort ($tableau);
foreach ($tableau as $cle =>$valeur) {
 echo 'Cle :  ' .$cle. ', valeur : ' .$valeur. '<br>' ;
}

//$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
//asort ($tableau);
//foreach ($tableau as $cle =>$valeur) {
// echo 'Cle :  ' .$cle. ', valeur : ' .$valeur. '<br>' ;
//}

//$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
//ksort ($tableau);
//foreach ($tableau as $cle =>$valeur) {
// echo 'Cle :  ' .$cle. ', valeur : ' .$valeur. '<br>' ;
//}

//$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
//krsort ($tableau);
//foreach ($tableau as $cle =>$valeur) {
// echo 'Cle :  ' .$cle. ', valeur : ' .$valeur. '<br>' ;
//}

//$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
//$cle_element = array_search ('Robert' , $tableau);
//echo "la cle de l'élément recherchez est : " .$cle_element;

//$tableau = array ('Al'=>'Jean', 'B4' => 'Robert' ,3=> 'Paul', 'Toto' => 'Joe', 'H' => 'Alain');
//$cle_element = array_search('Robert, $tableau');
//echo "<la clé de l'élément recherché est :  ".$cle_element;

//$ensemble = "1;2;3;4;5";
//explode($tableau, $ensemble);
//$tableau = explode (";" , $ensemble);
//echo "La premiere valeur du tableau est : " .$tableau[0]."<br />";
//echo "la derniere valeur du tableau est : " .$tableau[count($tableau)-1];

$ensemble = "1-2-3-4-5";
$tableau = explode("-" , $ensemble);
echo " ,  Les valeurs du tableau sont : ";
foreach ($tableau as $valeur) {
    echo $valeur.";";
}

$tableau = array ("   Jean","Robert","Paul");
implode($ensemble, $tableau);
foreach ($tableau as $valeur) {
   echo $valeur. ";";

//$tableau = array ("   Jean","Robert","Paul");
//$noms=implode(";" , $tableau);
//echo "les noms sont : ".$noms;

//$ensemble = "1;2;3;4;5";
//$tableau=str_split($ensemble,2);
//echo " , Les elements sont : ";
//foreach ($tableau as $valeur) {
//    echo $valeur. "  ";   
//}

//$tableau = array ("   Jean","Robert","Paul");
//array_push ($tableau, "Joe"," Alain");
//echo $tableau[4];

//$tableau =array ("Jean","Robert","Paul");
//$nom = array_pop ($tableau);
//echo "Le nom supprimé est : " .$nom ;

//$tableau =array ("Jean","Robert","Paul");
//echo "Avant la suppression , le nombre d'éléments dans le tableau est : ".count($tableau)."<br />";
//$nombre_elements = count($tableau);
//for ($i=0;$i<nombre_elements;$i++) {
//    $nom = array_pop($tableau);
//}
//echo "le dernier nom supprimé est : " .$nom."<br />";
//echo "Apres suppression, nb élements : " .count ($tableau);
}

$tableau = array ("Jean","Robert","Paul");
$cle_aleatoire = array_rand ($tableau);
echo "Nom sélectionné au hasard : ".$tableau [$cle_aleatoire];

$tableau = array ("Jean","Robert","Paul");
$tableau_cle_aleatoire = array_rand($tableau,2);
echo "Premier nom : " .$tableau[$tableau_cle_aleatoire[0]]."<br>";
echo "Second nom : " .$tableau[$tableau_cle_aleatoire[1]];
