<?php

include_once("./Model/administradorModel.php");
require_once("./Database/database.php");

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

    public function update($campos, $params = null, $where = null)
    {
        $campos_T = "";
        for ($i = 0; $i < count($campos); $i++) $campos_T .= ", $campos[$i] = ?";
        $campos_T = substr($campos_T, 2);
        $sql = "UPDATE administrador SET $campos_T";
        if (isset($where)) $sql .= " WHERE $where";
        $t = $this->updateDB($sql, $params);
        return $t;
    }
}
