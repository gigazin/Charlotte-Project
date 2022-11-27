<?php
include_once("../../../Model/entregadorModel.php");
require_once("../../../Database/database.php");

class entregadorDAO extends database
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
    public function insert($fields, $params = null)
    {
        $numparams = "";
        for ($i = 0; $i < count($params); $i++) $numparams .= ",?";
        $numparams = substr($numparams, 1);
        $sql = "INSERT INTO entregador ($fields) VALUES ($numparams)";
        $t = $this->insertDB($sql, $params);
        return $t;
    }

    public function load($fields = "*", $add = "")
    {
        if (strlen($add) > 0) $add = " " . $add;
        $sql = "SELECT $fields FROM entregador$add";
        return $this->selectDB($sql, null, 'entregador');
    }


    public function update($fields, $params = null, $where = null)
    {
        $fields_T = "";
        for ($i = 0; $i < count($fields); $i++) $fields_T .= ", $fields[$i] = ?";
        $fields_T = substr($fields_T, 2);
        $sql = "UPDATE entregador SET $fields_T";
        if (isset($where)) $sql .= " WHERE $where";
        $t = $this->updateDB($sql, $params);
        return $t;
    }

    public function delete($where = null, $params = null)
    {
        $sql = "DELETE FROM entregador";
        if (isset($where)) $sql .= " WHERE $where";
        $t = $this->deleteDB($sql, $params);
        return $t;
    }
}
