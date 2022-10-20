<?php

    require_once "../MOD/MEstudiante.php";
    $obj = new ModeloEstudiante();

    $mostrar=$obj->getEstudiante($ide);

    $myJSON = json_encode($mostrar);

    echo $myJSON;

?>