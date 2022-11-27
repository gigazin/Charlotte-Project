<?php
include_once("../../../DAO/entregadorDAO.php");

//funcao intermediaria entre a view e o DAO para inserir o usuario, aqui deve ficar as regras de validacao (se for nulo, se ja existe, etc)

function inserirEntregador($fields, $nome, $turno, $cidade, $veiculo, $bonificacao,$salario, $coordenador_idcoordenador)
{
    $entregadorDAO = new entregadorDAO();
    $params = array($nome, $turno, $cidade, $veiculo, $bonificacao, $salario, $coordenador_idcoordenador);
    $entregadorDAO->insert($fields, $params);
    //header("Location: View/index.php");
}


function listarEntregadores()
{
    $entregadorDAO = new entregadorDAO();
    $arr = $entregadorDAO->load();
    return $arr;
}

//
function listarEntregadorID($id)
{
    $entregadorDAO = new entregadorDAO();
    $fields = "id,nome";
    $add = "WHERE id = ".$id.";";
    $arr = $entregadorDAO->load($fields, $add);
    return $arr;
}


