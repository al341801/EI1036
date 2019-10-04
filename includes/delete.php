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
    $query = "DELETE FROM A_client WHERE client_id = ?";
    
    echo $query;
    
    try{
        $a=array($_REQUEST['client_id']);
        print_r ($a);
        $consult = $pdo->prepare($query);
        $a=$consult->execute(array($_REQUEST['client_id']));
        if (1>$a)echo "InCorrecto";
        /**$id = $_GET['client_id'];
        *$cosulta =$pdo->prepare($query);
        *$resultado = $consult->execute($id);
        **/
        /*$sentencia = $pdo->prepare($consulta);
        $sentencia->bind_param("sss",$val1);
        $val1= $_GET['client_id'];
        
        $sentencia->execute();
        $sentencia->close()
        */
        
     }catch (PDOException $ex){
         echo($ex->getMessage());
     }

}

$table = "A_cliente";
var_dump(S_POST);
handler($pdo, $table);
?>