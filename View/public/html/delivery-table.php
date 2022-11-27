<?php
include_once("../../../Controller/entregadorController.php");
include_once("../../../Controller/coordenadorController.php");

if (array_key_exists('btnDeletarEntregador', $_POST)) {
    excluirEntregador();
}
function excluirEntregador()
{
    $id = $_POST['IDentregador'];
    deletarEntregador($id);
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Charlotte</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/View/public/css/reset.css" />
    <link rel="stylesheet" href="/View/public/css/style-delivery-table.css" />

    <!-- Script -->
    <script src="../js/table-script.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Glory:wght@100&family=Great+Vibes&family=Raleway:wght@100;400;500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Glory:wght@300;500;700&display=swap" rel="stylesheet" />
</head>

<body>

    <header class="pageHeader">
        <div class="admin-icon">
            <a href="./admin-menu.php">
                <img src="../img/admin-icon.png" alt="Ícone perfil administrador">
            </a>
        </div>
        <nav class="menu">
            <ul class="menuItemsDiv">
                <li class="menuItems"><a href="./admin-menu.php" target="_self" class="color">Menu</a></li>
                <li class="menuItems"><a href="./coordinators-table.php" target="_self" class="color">Coordenadores</a></li>
                <li class="menuItems"><a href="#" class="color" id="deliveryText">Entregadores</a></li>
                <li class="menuItems"><a href="/index.php" target="_self" class="color">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main class="pageMainContent">
        <div class="contentWrapper">
            <div class="tableWrapper">
                <table class="deliveryTable">
                    <thead>
                        <div class="tableHeader">
                            <h3 id="nameHeader">Nome</h3>
                            <h3 id="shiftHeader">Turno</h3>
                            <h3 id="cityHeader">Cidade</h3>
                            <h3 id="vehicleHeader">Veículo</h3>
                            <h3 id="wageHeader">Salário</h3>
                            <h3 id="coordinatorHeader">Coordenador</h3>

                            </d>
                    </thead>
                    <tbody>


                        <?php
                        $dados = listarEntregadores();
                        $array = [];
                        foreach ($dados as $key => $row) {
                            $nome = $row->getNome();
                            $veiculo = $row->getVeiculo();
                            $turno = $row->getTurno();
                            $salario = $row->getSalario();
                            $result = listarCoordenadorID($row->getIdCoordenador());
                            $IdCoordenador = $result[0]->getNome();
                            $cidade = $row->getCidade();
                            $array[] =
                                "<tr class='tableCells'>
                                    <td id='nameCell'>$nome</td>
                                    <td id='shiftCell'>$turno</td>
                                    <td id='cityCell'>$cidade</td>
                                  <td id='vehicleCell'>$veiculo</td>
                                    <td id='wageCell'>$salario</td>
                                    <td id='coordinatorCell'>$IdCoordenador</td>
                                    </tr>";
                            echo $array[$key];
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="buttonWrapper">
            <div class="tableButtons">
                <button class="del-button" onclick="openDeleteModal()">Deletar</button>
            </div>
        </div>

        <!-- Page blur -->
        <div class="pageBlur" id="pgBlur"></div>

        <!-- Modals -->
        <div class="delete-modal-wrapper" id="delete-modal">
            <div class="modal-title">
                <h3 class="modal-title-text">Deletar Entregador</h3>
            </div>
            <div class="delete-form-wrapper">
                <form class="delete-form" method="post">
                    <div class="delete-row">
                        <div class="input-wrapper">
                            <div class="input-title">
                                <h3 class="input-title-text">ID do Entregador</h3>
                            </div>
                            <input type="text" name="IDentregador" placeholder="Informe o ID..." class="input-box" />
                        </div>
                    </div>
                    <div class="delete-row-buttons">
                        <div class="input-wrapper">
                            <input type="submit" name="btnDeletarEntregador" value="Deletar" class="input-button" />
                        </div>
                        <div class="input-wrapper">
                            <button class="input-button" onclick="closeDeleteModal()">Cancelar</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        </div>
    </main>

</body>

</html>


