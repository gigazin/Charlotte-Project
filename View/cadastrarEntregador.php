<?php
//precisa do controller para chamar os métodos
include_once("Controller/entregadorController.php");
?>

<!-- HTML DO SITE -->
<h1>CADASTRO DE ENTREGADOR</h1>
<form method="post">
    Nome: <input type="text" name="nome" id=""><br><br>
    Login: <input type="text" name="login" id=""><br><br>
    Senha: <input type="text" name="senha" id=""><br><br>
    <input type="submit" class="button" name="btnInserir" value="INSERIR ENTREGADOR">
    <hr> 
</form>


<h1>LISTAR UM ENTREGADOR</h1>
<form method="post">
    <input type="text" name="id" id=""><br><br>
    <input type="submit" class="button" name="btnListarUm" value="LISTAR ENTREGADR PELO ID">
    <hr>
</form>


<h1>LISTAR TODOS OS ENTREGADORES</h1>
<form method="post">
    <input type="submit" class="button" name="btnListarTodos" value="LISTAR ENTREGADORES">
</form>
<!-- HTML DO SITE -->


<?php

//pega os dados via POST que foram digitados nos campos e chama a função inserirUsuario da classe entregadorController
function capturarDadosEntregador()
{

    //alterar
    $fields = "nome,login,senha";

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    inserirEntregador($fields, $nome, $login, $senha);
}

//pega os dados via POST (submit) e chama a função listarUsuarios da classe entregadorController
function exibirTodosEntregadores()
{
    $arr = listarEntregadores();

    foreach ($arr as $key => $row) {
        echo $row->getId() . " - " . $row->getNome() . " - "
            . $row->getLogin() . " - " . $row->getSenha() . "<br>\n";
    }
}
//pega os dados via POST que foram digitados (ID) e chama a função listarUsuarioID da classe entregadorController
function exibirEntregadorPorID()
{

    $id = $_POST['id'];
    $arr = listarEntregadorID($id);
    echo "<br>\n" . $arr[0]->getId() . " - " . $arr[0]->getNome() . "<br>\n";
}




//verifica qual botão foi clicado e chama a função correta
if (array_key_exists('btnInserir', $_POST)) {
    capturarDadosEntregador();
}
if (array_key_exists('btnListarTodos', $_POST)) {
    exibirTodosEntregadores();
}

if (array_key_exists('btnListarUm', $_POST)) {
    exibirEntregadorPorID();
}
