<?php
$page = "exercice2";
include '../header.php';
?>
<p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieure à 20 :</p>
  <ul>
    <li>multiplier la première variable avec la deuxième</li>
    <li>afficher le résultat</li>
    <li>incrementer la première variable</li>
  </ul>
<?php
$age = 0;
$number = 45;
while ($age <= 20)
{
    $result = $age * $number;
    echo 'le résultat est '.$result.' Youpi!! <br>';
    $age++;
}
 ?>
<?php
include '../footer.php';
 ?>
