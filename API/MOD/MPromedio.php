<?php 

require_once "MConexion.php";


class ModeloPromedio extends ModeloConexion
{
    public function setPromedio($idp,$ide,$periodo,$nota)
    {
        $sql = "INSERT INTO promedio('idp', 'ide', 'periodo', 'nota') 
            VALUES ($idp,$ide,$periodo,$nota)";
        $this->sentencia_subir($sql);
    }

    public function getPromedio($idp){
        $sql="SELECT * from promedio where (idp) = ('$idp')";
        return $this->sentencia_mostrar($sql);
    }
    public function getPromedio_ALL(){
        $sql="SELECT * from promedio";
        return $this->get_ALL($sql);
    }
}

?>