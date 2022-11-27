<?php

//funcao intermediaria entre a view e o DAO para inserir o administrador, aqui deve ficar as regras de validacao (se for nulo, se ja existe, etc)

function login($login, $senha)
{
    include_once("./DAO/administradorDAO.php");
    $administradorDAO = new administradorDAO();
    $fields = "login,senha";
    $add = 'WHERE login = "' .  "$login" . '" and senha =  "' . "$senha" . '";';
    $arr = $administradorDAO->load($fields, $add);
    $mensagem = !empty($arr) && $arr[0]->getLogin() && $arr[0]->getSenha() == $senha ? 
    header("Location: ../View/public/html/admin-menu.php")
    : 'Dados incorretos!';
    return $mensagem;
}

function atualizarSenhaAdministrador($novaSenha,$id){
    include_once("../../../DAO/administradorDAO.php");
    $administradorDAO = new administradorDAO();
    $fields = array("senha");
    $params = array("$novaSenha",$id);
    $where = "id = ?";
    $result = $administradorDAO->update($fields,$params,$where);
    return $result == 0? 'administrador não encontrado':'dados do administrador atualizado';
}
