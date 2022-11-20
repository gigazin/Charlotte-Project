<?php
include_once("../../../DAO/coordenadorDAO.php");
function listarCoordenador()
{
    $coordenadorDAO = new coordenadorDAO();
    $arr = $coordenadorDAO->load();
    return $arr;
}

