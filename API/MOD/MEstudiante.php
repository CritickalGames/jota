<?php 
require_once "MConexion.php";


class ModeloEstudiante extends ModeloConexion
{
    public function setEstudiante($ide, $idu, $idg )
    {
        $sql = "INSERT INTO estudiante (ide, idu, idg) 
        VALUES ('$ide', '$idu', '$idg')";
        $this->sentencia_subir($sql);
    }

    public function getEstudiante($ide){
        $sql="SELECT * from estudiante where (ide) = ('$ide')";
        return $this->sentencia_mostrar($sql);
    }
    public function getEstudiante_ALL(){
        $sql="SELECT * from estudiante";
        return $this->get_ALL($sql);
    }
/*
    public function getPersona_PorUsuario($idu){
        $sql="SELECT * from estudiante where (ide) = ('$idu')";
        return $this->sentencia_mostrar($sql);
    }
*/
}

?>