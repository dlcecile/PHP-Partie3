<?php
$page = "exercice7";
include '../header.php';
?>
<p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
<?php
$age = 1;
while ($age < 100)
{
    echo 'On tient le bon bout!! '.$age.' <br>';
    $age= $age+15;
}
 ?>
<?php
include '../footer.php';
 ?>
