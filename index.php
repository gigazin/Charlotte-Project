<?php
//precisa do controller para chamar os métodos
include_once("./Controller/administradorController.php");
?>

<!-- HTML DO SITE -->
<!-- <h1>CADASTRO DE ADMINISTRADOR DO SISTEMA</h1>
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
-->


<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projeto Charlotte</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/View/public/css/reset.css" />
    <link rel="stylesheet" href="/View/public/css/style.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Glory:wght@100&family=Great+Vibes&family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Glory:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header class="pageHeader">
      <div class="headerWrapper"></div>
    </header>

    <main class="parentDiv">
      <div class="wrapper" id="mainWrapperDiv">
        <!-- Project logo -->
        <div class="parentLogoDiv">
          <div class="projectLogo">
            <h1 class="projectTitle">Projeto Charlotte</h1>
          </div>
        </div>
        <!-- <div class="centerLine"></div> -->
        <!-- Login area -->
        <div class="parentLoginDiv">
          <div class="login">
            <h2 class="loginText"><strong>Login</strong></h2>
            <div class="loginSideBar">
              <hr class="sideBar" />
            </div>
          </div>
          <div class="loginUserInputArea">
            <form method="post" class="loginForm">
              <div class="usernameInput">
                <h3 class="inputText">Usuário / E-mail</h3>
              </div>
              <input
                type="text"
                name="usuario"
                placeholder="Insira seu nome de usuário..."
                class="inputBox"
              />
              <div class="passwordInput>"><h3 class="inputText">Senha</h3></div>
              <input
                type="password"
                name="senha"
                placeholder="Insira sua senha..."
                class="inputBox"
              />
              <input type="submit" class="signInButton" name="btnLogin" value="E n t r a r">
              </input>
            </form>
          </div>
    </main>
  </body>
</html>



<!-- HTML DO SITE -->


<?php

function realizarLogin()
{
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];
    $situacao = login($login, $senha);
    echo $situacao;
}



// function atualizarDadosAdmin()
// {
//     $login = $_POST['login'];
//     $senha = $_POST['senha'];
//     $id = $_POST['id'];
//     $situacao = atualizarAdministrador($login, $senha, $id);
//     echo $situacao;
// }


//verifica qual botão foi clicado e chama a função correta


if (array_key_exists('btnLogin', $_POST)) {
    realizarLogin();
}



