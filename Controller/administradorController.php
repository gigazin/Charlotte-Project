<?php
include_once("./DAO/administradorDAO.php");

//funcao intermediaria entre a view e o DAO para inserir o administrador, aqui deve ficar as regras de validacao (se for nulo, se ja existe, etc)

function login($login, $senha)
{
    $administradorDAO = new administradorDAO();
    $fields = "login,senha";
    $add = 'WHERE login = "' .  "$login" . '" and senha =  "' . "$senha" . '";';
    $arr = $administradorDAO->load($fields, $add);
    $mensagem = !empty($arr) && $arr[0]->getLogin() && $arr[0]->getSenha() == $senha ? 'Login realizado!' : 'Dados incorretos!';
    return $mensagem;
}

