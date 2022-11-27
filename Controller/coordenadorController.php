<?php
include_once("../../../DAO/coordenadorDAO.php");
function listarCoordenador()
{
    $coordenadorDAO = new coordenadorDAO();
    $arr = $coordenadorDAO->load();
    return $arr;
}

function listarCoordenadorID($id)
{
    $coordenadorDAO = new coordenadorDAO();
    $fields = "id,nome";
    $add = "WHERE id = ".$id.";";
    $arr = $coordenadorDAO->load($fields, $add);
    return $arr;
}