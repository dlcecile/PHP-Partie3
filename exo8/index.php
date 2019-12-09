<?php
$page = "exercice8";
include '../header.php';
?>
<p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!..</p>
<?php
$age = 200;
while ($age >= 0)
{
    echo 'Enfin!! '.$age.' <br>';
    $age= $age-12;
}
 ?>
<?php
include '../footer.php';
 ?>
