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

echo 'Age : '.$personne['Age'].'<nbr>';

//3 constantes de type tableau
const couleurs = array('rouge' , 'vert', 'noir');
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