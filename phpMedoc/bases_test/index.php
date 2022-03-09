<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

        <label for="longueur">Longueur</label>
        <input type="number" name="longueur">
        <label for="largeur">Largeur</label>
        <input type="number" name="largeur">
     
        <input type="submit" value="Calcul">

    </form>

    <p>Résultat</p>


    

<?php

$long = $_POST['longueur'];
$larg = $_POST['largeur'];


// var_dump(($long <= 0 && $larg <=0));

function carre($a, $b)
{
 return sqrt($a*$a + $b*$b) ;
}

if ($long <= 0 && $larg <=0) {

    echo "Les valeurs doivent être supérieures à 0" ;
    
} elseif (empty($long && $larg)) {

    echo "Veuillez renseigner les deux champs";

} else {

    $a = $long;
    $b = $larg;
    echo "l'hypotenuse est égale à : " . carre($a, $b);
}

echo "<br>";


for ($i=1; $i<=25; $i++) {
    echo($i);
}
echo "<br>";
for ($i = 25 ; $i > 0 ; $i-- ) {
   
    echo($i);
}
echo "<br>";

for ( $i = 0 ; $i < 11 ; $i++ ){
    for ( $v = 0 ; $v <= $i ; $v++ ){
    echo($v);
}
    echo('</br>');   
}
echo "<br>";

// $limit = 5;
// function limit () {
    
//     return ($limit - 1);
// }

// for ($i=0; $i<$limit; $i++){
//     for ($v=0; $v<$i; $v++){
//         echo($v);
//     }
    
//     echo('</br>');
// }
// limit();


$students = [
    array(8, 13, 14),
    array(2, 6, 20),
    array(19, 11, 1),
];

$studentsLength = count($students);

function array_multisum(array $arr): float {
    $sum = array_sum($arr);
    foreach($arr as $child) {
        $sum += is_array($child) ? array_multisum($child) : 0;
    }
    return $sum;
}

echo"somme du tableau = " .  array_multisum($students) . " moyenne du tableau = " . array_multisum($students)/$studentsLength;
echo "<br>";
echo "<br>";

for ($i = 0; $i < $studentsLength; $i++) {
    for ($v = 0; $v < count($students[$i]); $v++);{
        echo"somme ligne = " . array_sum($students[$i]) . " moyenne =" . array_sum($students[$i])/$studentsLength;
        echo "<br>";

    }
}

?>
</body>
</html>