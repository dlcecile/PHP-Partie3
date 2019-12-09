<?php
$page = "exercice5";
include '../header.php';
?>
<p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
<?php
$age = 1;
while ($age <= 15)
{
    echo 'on y arrive presque!! '.$age.' <br>';
    $age++;
}
 ?>
<?php
include '../footer.php';
 ?>
