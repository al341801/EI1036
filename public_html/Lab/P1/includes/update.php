<?php
include("./gestionBD.php");

/**
*@title: Borrar
*@author Maria Angeles <al341915@uji.es> @copyright 2019 Maria Angeles
*@author Maria <al341801@uji.es> @copyright 2019 Maria
*@author Mireia <al361873@uji.es> @copyright 2019 Mireia
*license CC-BY-NC-SA
*/

function handler($pdo,$table)
{
 
    $query = "SELECT * FROM A_cliente WHERE client_id=(?)"; 
    $consult = $pdo->prepare($query);
    $a=$consult->execute(array($_REQUEST['client_id']));
    if (1>$a)echo "InCorrecto2";
    echo $a;
    $a=$consult->fetchAll(PDO::FETCH_ASSOC);
    var_dump($a);
    return $a;
    
}
$table = "A_cliente";

var_dump($_POST);
$b=handler($pdo, $table);
echo $b;
$userName=$b[1];
$email=$b[3];
$passwd=$b[5];

include(dirname(__FILE__)."/../partials/registerForm.php");



?>