<?php

require_once "../MOD/MUsuario.php";


$CI = $_POST['CI'];
$contra = $_POST['Contraseña'];


/***** */

    $obj = new ModeloUsuario();
    //$mostrar['Correo']==$correo && $mostrar['Contraseña']==$contra
    $myUser=($obj->getUsuario($CI, $contra));
    if ($myUser==TRUE) {
        //var_dump ($myUser["ci"]);
        //echo "Exito";
        //header("Location: ./../../HTML/Promedio.html");
        ?>
        <script>

            

        </script>        
        <?php
    }else{
        echo "fail";
        //header("Location: ./../../Index.html");
    }
    
    

    echo "<br><center><h1>".$CI."-".$contra."</h1></center>";


/***** */
?> 