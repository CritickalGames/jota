<?php 

require_once "MConexion.php";


class ModeloGrupo extends ModeloConexion
{
    public function setGrupo($idg, $nombre, $materia)
    {
        $sql = "INSERT INTO grupo('idg', 'nombre', 'materia') 
            VALUES ($idg, $nombre, $materia)";
        $this->sentencia_subir($sql);
    }

    public function getGrupo($idg){
        $sql="SELECT * from grupo where (idg) = ('$idg')";
        return $this->sentencia_mostrar($sql);
    }
    public function getGrupo_ALL(){
        $sql="SELECT * from grupo";
        return $this->get_ALL($sql);
    }
}

?>