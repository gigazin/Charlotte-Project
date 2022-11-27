<?php
include_once("./Controller/administradorController.php");
?>

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
                id="username"
                placeholder="Insira seu nome de usuário..."
                class="inputBox"
              />
              <div class="passwordInput>"><h3 class="inputText">Senha</h3></div>
              <input
                type="password"
                name="senha"
                id="password"
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

if (array_key_exists('btnLogin', $_POST)) {
    realizarLogin();
}



