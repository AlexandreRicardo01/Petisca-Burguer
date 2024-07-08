<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funcionário</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleCard.css">
        <link rel="stylesheet" href="css/styleCart1.css">
        <link rel="icon" href="icones/hamburguer.ico">
        <script src="js/script.js"></script>
        
    </head>
    <body>
        <nav class="navBar">
            <ul class="imgHamburNav">
                <img src="imagens/hamburguer_resized.png">
            </ul>
            <ul class="menus">
                <span id="titulo_menu"><b>Petisca Burguer</b></span>
            </ul>
        </nav>
        <div class="titulo">
            <h1>Bem-vindo(a) a tela do funcionário do Petisca Burguer!</h1>
            <h1>Caso deseja pedir combo, acrescentar R$10,00 ao pedido.</h1>
        </div>
        <aside>
            <div class="cart">
                <h1 style="color: yellow">Carrinho</h1>
                <ul class="cart-items"></ul>
                <p class="total-price">Total: R$0.00</p>
                <button onclick="finalizarCompra()" type="button" id="btnFinalizar">Finalizar compra</button>
            </div>
        </aside>
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
                                    <button class="add-to-cart" data-name="<?= $linhas["nome_card"]?>" data-price="<?= $linhas["valor_card"]?>">Adicionar 🛒</button>
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

        <!-- <div class="cardapio">
             <h2>Cardápio</h2>
             <img src="imagens/img1.jpg" class="galeria">
             <img src="imagens/img2.jpg" class="galeria">
             <img src="imagens/img3.jpg" class="galeria">
             <img src="imagens/img4.jpg" class="galeria">
             <img src="imagens/img5.jpg" class="galeria">
             <img src="imagens/img6.jpg" class="galeria">
             <img src="imagens/img7.jpg" class="galeria">
             <img src="imagens/img8_1.jpg" class="galeria">
         </div> -->
        <button onclick="sair()" type="button" name="btnCancelar" id="btnCancelar" class="btnCancelar">Sair</button>
        <script src="js/jsCart.js"></script>
    </body>
</html>