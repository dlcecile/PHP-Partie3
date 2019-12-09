<?php
$page = "exercice4";
include '../header.php';
?>
<p>Créer une variable et l'initialiser à 1.Tant que cette variable n'atteint pas 10, il faut :</p>
  <ul>
    <li>l'afficher</li>
    <li>l'incrementer de la moitié de sa valeur</li>

<?php
$age = 1;
while ($age < 10)
{
    echo 'Voici mon age '.$age.' Youpi!! <br>';
    $age = $age + ($age /2);
}
 ?>
<?php
include '../footer.php';
 ?>
