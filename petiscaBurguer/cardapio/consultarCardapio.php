<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Consultar Cardapios</title>
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        <link type="text/css" rel="stylesheet" href="../css/styleCard.css">
        <link type="text/css" rel="stylesheet" href="../fontawesome/css/all.min.css">
        <link rel="icon" href="../icones/hamburguer.ico">
        <script src="../js/script.js"></script>
    </head>

    <body>
        <h1 class="tituloConsultar">Consultar Cardápio</h1>
        <table border="2" id="tableConfig">
            <tr class="conteudo">
                <td align="center"> <strong>ID</strong></td>	
                <td align="center"> <strong>Nome</strong></td>
                <td align="center"> <strong>Tipo</strong></td>
                <td align="center"> <strong>Descrição</strong></td>
                <td align="center"> <strong>Valor</strong></td>
                <td align="center"> <strong>Imagem</strong></td>
                <td width="10"> <strong>Editar</strong></td>
                <td width="10"> <strong>Deletar</strong></td>
            </tr>

            <?php
            include("../conectarbd.php");
            $selecionar = mysqli_query($conn, "SELECT * FROM tb_cardapio");
            while ($campo = mysqli_fetch_array($selecionar)) {
                ?>
                <tr>
                    <td align="center"><?= $campo["id_card"] ?></td>
                    <td align="center"><?= $campo["nome_card"] ?></td>
                    <td align="center"><?= $campo["tipo_card"] ?></td>
                    <td align="center"><?= $campo["descricao_card"] ?></td>
                    <td align="center"><?= $campo["valor_card"] ?></td>
                    <td align="center"><?= $campo["img_card"] ?></td>
                    <td align="center"><a href="formEditarCardapio.php?editarid=<?php echo $campo ['id_card']; ?>" id="btnEditar"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td align="center"><a href="excluirCardapio.php?p=excluir&cardapio=<?php echo $campo['id_card']; ?>"><strong id="btnExcluir" onclick="return confirm('Tem certeza que deseja deletar?')"><i class="fa-sharp fa-solid fa-xmark"></i></strong></a></td>
                </tr>
            <?php } ?>
        </table><br>
        <nav class="navBar">
            <ul class="imgHamburNav">
                <img src="../imagens/hamburguer_resized.png">
            </ul>
            <ul class="menus">
                <li class="itens"><a href="#">Fornecedor</a>
                    <ul class="subItens">
                        <li><a href="../fornecedor/formFornecedor.php">Cadastrar</a></li>
                        <li><a href="../fornecedor/consultarFornecedor.php">Consultar</a></li>
                    </ul>
                </li>
                <li class="itens"><a href="#">Funcionário</a>
                    <ul class="subItens">
                        <li><a href="../funcionário/formFuncionario.php">Cadastrar</a></li>
                        <li><a href="../funcionário/consultarFuncionario.php">Consultar</a></li>
                    </ul>
                </li>
                <li class="itens"><a href="../indexGerente.php">Cardápio</a>
                    <ul class="subItens">
                        <li><a href="formCardapio.php">Cadastrar</a></li>
                        <li><a href="#">Consultar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <button onclick="cancelar()" type="button" name="btnCancelar" id="btnCancelar" class="btnCancelar">Voltar</button>
</body>
</html>
