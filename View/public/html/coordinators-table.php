<?php
include_once("../../../Controller/coordenadorController.php");

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
    <link rel="stylesheet" href="/View/public/css/style-coord-table.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Glory:wght@100&family=Great+Vibes&family=Raleway:wght@100;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Glory:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
</head>
<body>

    <header class="pageHeader">
        <div class ="admin-icon">
            <a href="./admin-menu.php">
                <img src="../img/admin-icon.png" alt="Ícone perfil administrador">
            </a>
        </div>
        <nav class="menu">
            <ul class="menuItemsDiv">
                <li class="menuItems"><a href="./admin-menu.php" target="_self" class="color">Menu</a></li>
                <li class="menuItems"><a href="#" class="color" id="coordinatorText">Coordenadores</a></li>
                <li class="menuItems"><a href="./delivery-table.php" target="_self" class="color">Entregadores</a></li>
                <li class="menuItems"><a href="../../../api/index.php" target="_self" class="color">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main class="pageMainContent">
        <div class="contentWrapper">
            <div class="tableWrapper">
                <table class="coordinatorsTable">
                    <thead>
                        <tr class="tableHeader">
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Cidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $dados = listarCoordenador();
                            $array = [];
                            foreach($dados as $key => $row){
                                $nome = $row->getNome();
                                $cpf = $row->getCpf();
                                $cidade = $row->getCidade();
                                $array[] = 
                                    "<tr class='tableCells'>
                                    <td id='nameCell'>$nome</td>
                                    <td id='CPFCell'>$cpf</td>
                                    <td id='cityCell'>$cidade</td>
                                    </tr>"
                                ;
                                echo $array[$key];
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tableButtons">
            <nav class="tableMenu">
                <ul class="tableMenuItems">
                    <li class="tableMenuOption">Buscar</li>
                </ul>
            </nav>
        </div>
    </main>
    
</body>
</html>