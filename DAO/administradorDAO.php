<?php
include_once("../Model/administradorModel.php");
require_once("../Database/database.php");

class administradorDAO extends database
{

    public function __destruct()
    {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
        foreach (array_keys(get_defined_vars()) as $var) {
            unset(${"$var"});
        }
        unset($var);
    }
    //

//inserir no banco passando os parametros e as regras SQL(chama a funcao do database pra inserir)    
 
    public function load($campos = "*", $add = "")
    {
        if (strlen($add) > 0) $add = " " . $add;
        $sql = "SELECT $campos FROM administrador$add";
        return $this->selectDB($sql, null, 'administrador');
    }


}
