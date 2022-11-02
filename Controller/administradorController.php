<?php
include_once("../DAO/administradorDAO.php");

//funcao intermediaria entre a view e o DAO para inserir o administrador, aqui deve ficar as regras de validacao (se for nulo, se ja existe, etc)
function inserirAdministrador($campos, $nome, $login, $senha)
{
    $administradorDAO = new administradorDAO();
    $params = array($nome, $login, $senha);

    if (checkLogin($login)) {
        return 'Administrador já existe, use outro login!';
    } else {
        $administradorDAO->insert($campos, $params);
        return 'Administrador cadastrado!';
    }
}

function checkLogin($login)
{
    $administradorDAO = new administradorDAO();
    $fields = "login";
    $add = 'WHERE login = "' .  "$login" . '";';
    $arr = $administradorDAO->load($fields, $add);
    $b = !empty($arr) && $arr[0]->getLogin() ? true : false;
    return $b;
}

function login($login, $senha)
{
    $administradorDAO = new administradorDAO();
    $fields = "login,senha";
    $add = 'WHERE login = "' .  "$login" . '" and senha =  "' . "$senha" . '";';
    $arr = $administradorDAO->load($fields, $add);
    $mensagem = !empty($arr) && $arr[0]->getLogin() && $arr[0]->getSenha() == $senha ? 'Login realizado!' : 'Dados incorretos!';
    return $mensagem;
}


function atualizarAdministrador($novoLogin, $novaSenha, $id)
{
    $administradorDAO = new administradorDAO();

    $fields = array("login", "senha");
    $params = array("$novoLogin", "$novaSenha", $id);
    $where = "id = ?";
    $result = $administradorDAO->update($fields, $params, $where);

    return $result==0 ? 'Administrador não encontrado!' : 'Dados do administrador atualizados!';
}

function deletarAdministrador($id)
{
    $administradorDAO = new administradorDAO();

    $where = "id = ?";
    $params = array($id);
    $administradorDAO->delete($where, $params);
    $result = $administradorDAO->load();
    return $result==0? 'Administrador não encontrado!' : 'Administrador deletado!';
}

function listarAdministradores()
{
    $administradorDAO = new administradorDAO();
    $arr = $administradorDAO->load();
    $listaAdministradores = "";
    foreach ($arr as $key => $row) {
        $listaAdministradores .= $row->getId() . " - " . $row->getNome() . " - "
            . $row->getLogin() . " - " . $row->getSenha() . "<br>\n";
    }
    return $listaAdministradores;
}

//
function listarAdministradorID($id)
{
    $administradorDAO = new administradorDAO();
    $fields = "id,nome";
    $add = "WHERE id = " . $id . ";";
    $arr = $administradorDAO->load($fields, $add);

    $administradorID = "<br>\n" . $arr[0]->getId() . " - " . $arr[0]->getNome() . "<br>\n";
    return $administradorID;
}
