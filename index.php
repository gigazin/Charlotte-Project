<?php
//precisa do controller para chamar os métodos
include_once("../Controller/administradorController.php");
?>

<!-- HTML DO SITE -->
<h1>CADASTRO DE ADMINISTRADOR DO SISTEMA</h1>
<form method="post">
    Nome: <input type="text" name="nome" id=""><br><br>
    Login: <input type="text" name="login" id=""><br><br>
    Senha: <input type="text" name="senha" id=""><br><br>
    <input type="submit" class="button" name="btnCadastrarAdm" value="CADASTRAR ADMINISTRADOR">
    <hr>
</form>


<h1>REALIZAR LOGIN</h1>
<form method="post">
    Login: <input type="text" name="login" id=""><br><br>
    Senha: <input type="text" name="senha" id=""><br><br>
    <input type="submit" class="button" name="btnLogin" value="LOGAR">
</form>
<hr>
<h1>ATUALIZAR DADOS ADMIN</h1>

<?php
$ola = "ola";
?>

<form method="post">
    ID do Admin: <input type="text" name="id" id=""><br><br>
    Novo Login: <input type="text" name="login" id=""><br><br>
    Nova Senha: <input type="text" name="senha" id=""><br><br>
    <input type="submit" class="button" name="btnAtualizarDados" value="ATUALIZAR DADOS">
</form>
<hr>
<h1>DELETAR UM ADMIN</h1>
<form method="post">
    ID do Admin: <input type="text" name="id" id=""><br><br>
    <input type="submit" class="button" name="btnDeletarAdmin" value="DELETAR ADMIN">
</form>
<hr>
<h1>LISTAR TODOS OS ADMINISTRADORES</h1>
<form method="post">
    <input type="submit" class="button" name="btnListarTodosAdm" value="LISTAR TODOS OS ADM">
</form>
<hr>
<h1>LISTAR ADMINISTRADOR POR ID</h1>
<form method="post">
    ID do Admin: <input type="text" name="id" id=""><br><br>
    <input type="submit" class="button" name="btnListarAdmID" value="LISTAR ADM POR ID">
</form>

<!-- HTML DO SITE -->


<?php

function cadastrarAdministrador()
{
    $campos = "nome,login,senha";
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $situacao = inserirAdministrador($campos, $nome, $login, $senha);
    echo $situacao;
}

function realizarLogin()
{
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $situacao = login($login, $senha);
    echo $situacao;
}

function atualizarDadosAdmin()
{
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $id = $_POST['id'];
    $situacao = atualizarAdministrador($login, $senha, $id);
    echo $situacao;
}

function deletarDadosAdmin()
{
    $id = $_POST['id'];
    $situacao = deletarAdministrador($id);
    echo $situacao;
}

function exibirTodosAdministradores()
{
    $arr = listarAdministradores();
    echo $arr;
}
//pega os dados via POST que foram digitados (ID) e chama a função listarUsuarioID da classe entregadorController
function exibirAdministradorPorID()
{

    $id = $_POST['id'];
    $arr = listarAdministradorID($id);
    echo $arr;
}


//verifica qual botão foi clicado e chama a função correta
if (array_key_exists('btnCadastrarAdm', $_POST)) {
    cadastrarAdministrador();
}
if (array_key_exists('btnLogin', $_POST)) {
    realizarLogin();
}
if (array_key_exists('btnAtualizarDados', $_POST)) {
    atualizarDadosAdmin();
}
if (array_key_exists('btnDeletarAdmin', $_POST)) {
    deletarDadosAdmin();
}
if (array_key_exists('btnListarTodosAdm', $_POST)) {
    exibirTodosAdministradores();
}
if (array_key_exists('btnListarAdmID', $_POST)) {
    exibirAdministradorPorID();
}
