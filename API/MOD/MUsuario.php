<?php 

require_once "MConexion.php";


class ModeloUsuario extends ModeloConexion
{
    public function setUsuario($idu,$ci,$nombre,$apellido,$pass)
    {
        $sql = "INSERT INTO usuario('idu', 'ci', 'nombre', 'apellido', 'pass') 
            VALUES ($idu,$ci,$nombre,$apellido,$pass)";
        $this->sentencia_subir($sql);
    }

    public function getUsuario($CI, $PASS){
        $sql="SELECT * from Usuario 
            where (CI, PASS) = ('$CI', '$PASS')";
        return $this->sentencia_mostrar($sql);
    }
    public function getUsuario_All(){
        $sql="SELECT * from Usuario";
        return $this->get_ALL($sql);
    }
}

?>