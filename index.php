<?php 
require_once 'classe/Compte.php';

//On instance le compte 
$compte1 = new Compte('Benoit', 500);

// On dépose 100 euros
$compte1->deposer(100);


?>

<p> <?=$compte1->voirSolde(); ?></p>

<?php 

$compte1->retirer(400);

var_dump($compte1);
?>





<!-- // $compte2 = new Compte('robert');


// On écrit dans la propriété solde
// $compte2 ->solde = '800.25';
// var_dump($compte2); -->
