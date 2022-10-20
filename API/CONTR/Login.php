<?php

require_once "../MOD/MUsuario.php";


$CI = $_POST['CI'];
$contra = $_POST['Contraseña'];


/***** */

    $obj = new ModeloUsuario();
    //$mostrar['Correo']==$correo && $mostrar['Contraseña']==$contra

    if (($obj->getUsuario($CI, $contra))==TRUE) {
        //echo $mostrar['CI'];
        //echo "Exito";
        header("Location: ./../../HTML/Promedio.html");
    }else{
        echo "fail";
        header("Location: ./../../Index.html");
    }
    
    

    echo "<br><center><h1>".$CI."-".$contra."</h1></center>";


/***** */
?> 