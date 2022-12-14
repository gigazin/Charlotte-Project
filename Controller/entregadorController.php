<?php
include_once("../../../DAO/entregadorDAO.php");

//funcao intermediaria entre a view e o DAO para inserir o usuario, aqui deve ficar as regras de validacao (se for nulo, se ja existe, etc)

function inserirEntregador($fields, $nome, $turno, $cidade, $veiculo, $bonificacao,$salario, $idcoordenador)
{
    if($nome == "" || $turno == "" || $cidade == ""  || $veiculo ==  "" || $bonificacao == "" || $salario == "" || $idcoordenador == ""){
        return "Inválido";
    }
    $entregadorDAO = new entregadorDAO();
    $params = array($nome, $turno, $cidade, $veiculo, $bonificacao, $salario, $idcoordenador);
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

function deletarEntregador($id)
{
    $entregadorDAO = new entregadorDAO();
    $where = "id = ?";
    $params = array($id);
    $entregadorDAO->delete($where, $params);
    $result = $entregadorDAO->load();
    return $result==0? 'Entregador não encontrado!' : header("Refresh: 0");
}

