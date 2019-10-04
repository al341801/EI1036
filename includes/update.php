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
    
    $query = "UPDATE $table SET nombre=?, email=?, clave=? WHERE $cliente_id=(?)"; 
    $consult = $pdo->prepare($query);
    $a=$consult->execute(array($valor));
    if (1>$a)echo "InCorrecto2";
    return ($consult->fetchAll(PDO::FETCH_ASSOC));
    
}
$table = "A_cliente";
var_dump(S_POST);
handler($pdo, $table);

?>