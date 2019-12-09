<?php
$page = "exercice3";
include '../header.php';
?>
<p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieure ou égale à 10 :</p>
  <ul>
    <li>multiplier la première variable avec la deuxième</li>
    <li>afficher le résultat</li>
    <li>décrémenter la première variable</li>
<?php
$age = 100;
$number = 5;
while ($age >= 10)
{
    $result = $age * $number;
    echo 'le résultat est '.$result.' Youpi!! <br>';
    $age--;
}
 ?>
<?php
include '../footer.php';
 ?>
