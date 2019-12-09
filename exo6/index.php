<?php
$page = "exercice6";
include '../header.php';
?>
<p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
<?php
$age = 20;
while ($age >= 0)
{
    echo 'C est presque bon!! '.$age.' <br>';
    $age--;
}
 ?>
<?php
include '../footer.php';
 ?>
