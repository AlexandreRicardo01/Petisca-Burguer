<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Petisca Burguer</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleCard.css">
        <link rel="stylesheet" href="css/styleCart1.css">
        <link rel="icon" href="icones/hamburguer.ico">
    </head>
    <body>
        <nav class="navBar">
            <ul class="imgHamburNav">
                <img src="imagens/hamburguer_resized.png">
            </ul>  
            <ul class="menus">
                <li class="itens"><a href="#">Cardápio</a>
                </li>
                <li class="itens"><a href="login/formLogin.php">Login</a>
                </li>
            </ul>
        </nav>
        <div class="titulo">
            <h1>Bem-vindo(a) ao Petisca Burguer!</h1>
        </div>
        <table id="tableConfigCard">
            <tr>
                <?php
                include_once './conectarbd.php';
                $sql = "select * from tb_cardapio";
                $query = mysqli_query($conn, $sql) or die(mysqli_error($db));
                $linhas = mysqli_fetch_array($query);
                if ($linhas) {
                    $cont = 0;
                    while ($linhas = mysqli_fetch_array($query)) {
                        if ($cont > 4) {
                            echo "</tr><tr>";
                            $cont = 0;
                        }
                        ?>
                        <td>
                            <div id="div--img--card">
                                <img id="img--card" src="<?php echo 'imagens/' . $linhas['img_card']; ?>"><br>
                                <div id="comentarios--img--card">
                                    <span class="testeLegend"><?php echo "Nome: " . $linhas["nome_card"]; ?></span><br>
                                    <span class="testeLegend"><?php echo "Valor: R$ " . $linhas["valor_card"]; ?></span><br>
                                    <span class="testeLegend"><?php echo "Descrição: " . $linhas["descricao_card"]; ?></span><br>
                                </div>
                            </div>
                        </td>
                        <?php
                        $cont++;
                    }
                    ?>
                    <?php
                }
                ?>
            </tr>
        </table>
        <br><br><br><br>
        <script src="js/jsCart.js"></script>
    </body>
</html>