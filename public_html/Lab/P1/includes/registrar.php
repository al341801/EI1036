<?php
include("./gestionBD.php");

function handler($pdo,$table)
{
    $datos = $_REQUEST;
    if (count($_REQUEST) < 7) {
        $data["error"] = "No has rellenado el formulario correctamente";
        return;
    }
    $query = "INSERT INTO $table (id,nombre,apellidos,email, dni,clave,fot_file)
                        VALUES (?,?,?,?,?,?,?)";
                       
    echo $query;
    try { 
        $a=array($_REQUEST['id'],$_REQUEST['userName'], $_REQUEST['apellidos'],$_REQUEST['email'],$_REQUEST['dni'],$_REQUEST['passwd'],$_REQUEST['foto_file'] );
        print_r ($a);
        $consult = $pdo->prepare($query);
        $a=$consult->execute(array($_REQUEST['id'],$_REQUEST['userName'], $_REQUEST['apellidos'],$_REQUEST['email'],$_REQUEST['dni'],$_REQUEST['passwd'],$_REQUEST['foto_file'] ));
        if (1>$a)echo "InCorrecto";
    
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

$table = "A_cliente";
var_dump($_POST);
handler( $pdo,$table);
?>