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
    
    $datos = $_REQUEST;
    $query = "DELETE FROM A_cliente WHERE client_id = (?)";
    
    echo $query;
    
    try{
        $a=array($_REQUEST['client_id']);
        print_r ($a);
        $consult = $pdo->prepare($query);
        $b=$consult->execute(array($_REQUEST['client_id']));
        if (1>$b)echo "InCorrecto";
      
        
     }catch (PDOException $ex){
         echo($ex->getMessage());
     }

}

$table = "A_cliente";
var_dump($_POST);
handler($pdo, $table);
?>