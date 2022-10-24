<?php

    require_once "../MOD/MEstudiante.php";
    require_once "../MOD/MUsuario.php";
    $ci = $_GET["ci"];
    $contra = $_GET["contra"];
    $objEstudiante = new ModeloEstudiante();
    $objUsuario = new ModeloUsuario();

    //$CI = $_POST['CI'];
    //$contra = $_POST['Contraseña'];
    //$mostrar=$objEstudiante->getEstudiante($CI);

    //$myJSON = json_encode($mostrar);

    echo $bool;

?>