<?php
include_once("../Model/administradorModel.php");
require_once("../Database/database.php");

class administradorDAO extends database
{

    //padrão do PHP
    public function __construct()
    {
    }
    private function __clone()
    {
    }

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
    public function insert($campos, $params = null)
    {
        $numparams = "";
        for ($i = 0; $i < count($params); $i++) $numparams .= ",?";
        $numparams = substr($numparams, 1);
        $sql = "INSERT INTO administrador ($campos) VALUES ($numparams)";
        $t = $this->insertDB($sql, $params);
        return $t;
    }

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

    public function delete($where = null, $params = null)
    {
        $sql = "DELETE FROM administrador";
        if (isset($where)) $sql .= " WHERE $where";
        $t = $this->deleteDB($sql, $params);
        return $t;
    }
}
