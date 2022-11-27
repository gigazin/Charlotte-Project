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

function inserirCoordenador($fields, $nome, $cidade, $cpf)
{
    if($nome == "" || $cidade == "" || $cpf == ""){
        return "Inválido";
    }
    $coordenadorDAO = new coordenadorDAO();
    $params = array($nome, $cidade, $cpf);
    $coordenadorDAO->insert($fields, $params);
    //header("Location: View/index.php");
}