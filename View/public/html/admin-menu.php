<?php

  include_once('../../../Controller/entregadorController.php');
  include_once('../../../Controller/coordenadorController.php');
  include_once('../../../Controller/administradorController.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projeto Charlotte</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/style-admin.css" />

    <!-- Script -->
    <script src="../js/script.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Glory:wght@100&family=Great+Vibes&family=Raleway:wght@100;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Glory:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  
  <body>

    <!-- Header -->
    <header class="pageHeader">
      <div class ="admin-icon">
        <img src="../img/admin-icon.png" alt="Ícone perfil administrador" />
      </div>
        <nav class="menu">
            <ul class="menuItemsDiv">
                <li class="menuItems"><a href="#" class="color" id="menuText">Menu</a></li>
                <li class="menuItems"><a href="./coordinators-table.php" target="_self" class="color">Coordenadores</a></li>
                <li class="menuItems"><a href="./delivery-table.php" target="_self" class="color">Entregadores</a></li>
                <li class="menuItems"><a href="/index.php" target="_self"
                class="color">Sair</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content -->
    <main class="parentAdminGod">
        <div class="parentAdminDiv">
          <div class="parentAdminWrapper"></div>
          <div class="admin-icon-profile">
            <div class="admin-profile-image"><img src="../img/admin-icon.png" alt="Foto de perfil administrador" id="admin-profile-picture"></div>
          </div>
          <div class="admin-profile-name">
            <h3 id="admin-name">Leuson Mario</h3>
          </div>
          <div class="admin-profile-info">
            <div class="content-divider"></div>
            <div class="parent-admin-info">
              <div class="admin-info">
                <button class="admin-info-button" onclick="openDeliveryRegisterModal()">
                  <h3 class="admin-info-element">Novo Entregador</h3>
                </button>
              </div>
              <div class="admin-info">
                <button id="btnNewCoord" class="admin-info-button" onclick="openCoordinatorRegisterModal()">
                  <h3 class="admin-info-element">Novo Coordenador</h3>
                </button>
              </div>
              <div class="admin-info">
                <button disabled class="admin-info-button" onclick="openAdminEditProfileModal()">
                  <h3 class="admin-info-element">Editar Perfil</h3>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Page blur wrapper -->
        <div class="pageBlur" id="pgBlur"></div>

        <!-- Modals -->
        <div class="delivery-register-modal-wrapper" id="delivery-reg-modal">
          <div class="modal-title">
            <h2 class="modal-title-text">Cadastro de Entregador</h2>
          </div>
          <div class="register-form-wrapper">
            <form class="register-form" method="post">
              <div class="register-row">
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">Nome</h3>
                  </div>
                  <input 
                    type="text"
                    name="nome"
                    placeholder="Informe o nome..."
                    class="input-box"
                    />
                </div>
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">Cidade</h3>
                  </div>
                  <input 
                    type="text"
                    name="cidade"
                    placeholder="Informe a cidade..."
                    class="input-box"
                    />
                </div>
              </div>
              <div class="register-row">
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">Turno</h3>
                  </div>
                  <input 
                    type="text"
                    name="turno"
                    placeholder="Informe o turno..."
                    class="input-box"
                    />
                </div>
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">Veículo</h3>
                  </div>
                  <input 
                    type="text"
                    name="veiculo"
                    placeholder="Informe o veículo..."
                    class="input-box"
                    />
                </div>
              </div>
              <div class="register-row">
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">
                        Bonificação
                    </h3>
                  </div>
                  <input 
                  type="text"
                  name="bonificacao"
                  placeholder="Informe a bonificação..."
                  class="input-box"
                  />
                </div>
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">
                        ID Coordenador
                    </h3>
                  </div>
                  <input 
                  type="text"
                  name="idcoordenador"
                  placeholder="Informe o ID do coordenador..."
                  class="input-box"
                  />
                </div>
              </div>
              <div class="register-row-buttons">
                  <div class="input-wrapper">
                    <input
                      type="submit"
                      name="btnCadastrarEntre"
                      value="Cadastrar"
                      class="input-button"
                    />
                  </div>
                  <div class="input-wrapper">
                    <button class="input-button" onclick="closeDeliveryRegisterModal()">Cancelar</button>
                  </div>
                </div>
            </form>
          </div>
        </div>

        <div class="coordinator-register-modal-wrapper" id="coordinator-reg-modal">
          <div class="modal-title">
            <h2 class="modal-title-text">
              Cadastro de Coordenador
            </h2>
          </div>
          <div class="register-form-wrapper">
            <form class="register-form" method="post">
              <div class="register-row">
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">Nome</h3>
                  </div>
                  <input
                    type="text"
                    name="nome"
                    placeholder="Informe o nome..."
                    class="input-box"
                    id="name-coord"
                  />
                </div>
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">CPF</h3>
                  </div>
                  <input
                    type="text"
                    name="cpf"
                    placeholder="Informe o CPF..."
                    class="input-box"
                    id="cpf-coord"
                  />
                </div>
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">Cidade</h3>
                  </div>
                  <input
                    type="text"
                    name="cidade"
                    placeholder="Informe a cidade..."
                    class="input-box"
                    id="city-coord"
                  />
                </div>
              </div>
              <div class="register-row-buttons">
                <div class="input-wrapper">
                    <input
                      type="submit"
                      name="btnCadastrarCoord"
                      value="Cadastrar"
                      class="input-button"
                    id="submit-coord"
                    />
                  </div>
                  <div class="input-wrapper">
                    <button class="input-button" onclick="closeCoordinatorRegisterModal()">Cancelar</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="admin-edit-profile-modal-wrapper" id="admin-edit-modal-wrapper">
          <div class="modal-title">
            <h3 class="modal-title-text">Editar Perfil</h3>
          </div>
          <div class="edit-form-wrapper">
            <form class="edit-form" method="post">
              <div class="edit-row">
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">Nova senha</h3>
                  </div>
                  <input
                    type="password"
                    name="novaSenha"
                    placeholder="Informe uma senha..."
                    class="input-box"
                  />
                </div>
                <div class="input-wrapper">
                  <div class="input-title">
                    <h3 class="input-title-text">Confirmar senha</h3>
                  </div>
                  <input
                    type="password"
                    name="confirmarSenha"
                    placeholder="Confirme sua senha..."
                    class="input-box"
                  />
                </div>
              </div>
              <div class="edit-row-buttons">
                <div class="input-wrapper">
                  <input
                    type="submit"
                    name="btnEditarAdm"
                    value="Confirmar"
                    class="input-button"
                  />
                </div>
                <div class="input-wrapper">
                  <button class="input-button" onclick="closeAdminEditProfileModal()">Cancelar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </main>
  </body>
</html>

<?php 
  if(array_key_exists('btnCadastrarEntre', $_POST)){
    cadastrarEntregador();
  }

  if(array_key_exists('btnCadastrarCoord', $_POST)){
    cadastrarCoordenador();
  }

  if(array_key_exists('btnEditarAdm',$_POST)){
    editarSenha();
  }
  
  
  function cadastrarEntregador(){
    $fields = "nome,turno,cidade,veiculo,bonificacao,salario,idcoordenador";
    $nome = $_POST['nome'];
    $cidade =$_POST['cidade'];
    $turno = $_POST['turno'];
    $veiculo = $_POST['veiculo'];
    $bonificacao = $_POST['bonificacao'];
    $idcoordenador = $_POST['idcoordenador'];

    $salario = rand(500,3000);
    if ($bonificacao==1) {
      $salario = $salario + $salario*0.13; 
    }

    $situacao = inserirEntregador($fields,$nome,$turno,$cidade,$veiculo,$bonificacao,$salario,$idcoordenador);
    echo $situacao;
  }

  function cadastrarCoordenador(){
    $fields = "nome,cidade,cpf";
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $cpf = $_POST['cpf'];
    inserirCoordenador($fields,$nome,$cidade,$cpf);
  }

  function editarSenha(){
    $novaSenha = $_POST['novaSenha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    $id = 1;
    atualizarSenhaAdministrador($novaSenha,$confirmarSenha,$id);
  }

?>