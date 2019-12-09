<?php
$page = "exercice1";
include '../header.php';
?>
<p>Créer une variable et l'initialiser à 0.Tant que cette variable n'atteint pas 10, il faut : </p>
<ul>
  <li>l'afficher</li>
  <li>l'incrementer</li>
</ul>
<section>
<?php

for ($age = 1; $age <= 10; $age++)
{
    echo 'Vous avez '. $age .' ans';
}
 ?>
</section>
<?php
include '../footer.php';
 ?>
