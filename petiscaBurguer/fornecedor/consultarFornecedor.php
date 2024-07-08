<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Fornecedores</title>
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        <link type="text/css" rel="stylesheet" href="../css/styleForn.css">
        <link type="text/css" rel="stylesheet" href="../fontawesome/css/all.min.css">
        <link rel="icon" href="../icones/hamburguer.ico">
        <script src="../js/script.js"></script>
    </head>

    <body>
        <h1 class="tituloConsultar">Consultar Fornecedores Cadastrados</h1>
        <table border="2" id="tableConfig">
            <tr>
                <td align="center"> <strong>ID</strong></td>	
                <td align="center"> <strong>Nome do Fornecedor:</strong></td>
                <td align="center"> <strong>Cnpj:</strong></td>
                <td align="center"> <strong>CEP:</strong></td>
                <td align="center"> <strong>Endereço:</strong></td>
                <td align="center"> <strong>N:</strong></td>
                <td align="center"> <strong>Complemento:</strong></td>
                <td align="center"> <strong>Bairro:</strong></td>
                <td align="center"> <strong>Cidade:</strong></td>
                <td align="center"> <strong>Estado:</strong></td>
                <td align="center"> <strong>Tel/Cel:</strong></td>
                <td align="center"> <strong>E-mail:</strong></td>
                <td width="10"> <strong>Editar</strong></td>
                <td width="10"> <strong>Deletar</strong></td>
            </tr>

            <?php
            include("../conectarbd.php");
            $selecionar = mysqli_query($conn, "SELECT * FROM tb_fornecedor");
            while ($campo = mysqli_fetch_array($selecionar)) {
                ?>
                <tr>
                    <td align="center"><?= $campo["id_forn"] ?></td>
                    <td align="center"><?= $campo["nome_forn"] ?></td>
                    <td align="center"><?= $campo["cnpj_forn"] ?></td>
                    <td align="center"><?= $campo["cep_forn"] ?></td>
                    <td align="center"><?= $campo["endereco_forn"] ?></td>
                    <td align="center"><?= $campo["n_forn"] ?></td>
                    <td align="center"><?= $campo["complemento_forn"] ?></td>
                    <td align="center"><?= $campo["bairro_forn"] ?></td>
                    <td align="center"><?= $campo["cidade_forn"] ?></td>
                    <td align="center"><?= $campo["estado_forn"] ?></td>
                    <td align="center"><?= $campo["tel_cel_forn"] ?></td>
                    <td align="center"><?= $campo["email_forn"] ?></td>
                    <td align="center"><a href="formEditarFornecedor.php?editarid=<?php echo $campo ['id_forn']; ?>" id="btnEditar"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td align="center"><a href="excluirFornecedor.php?p=excluir&forn=<?php echo $campo['id_forn']; ?>"><strong id="btnExcluir" onclick="return confirm('Tem certeza que deseja deletar?')"><i class="fa-sharp fa-solid fa-xmark"></i></strong></a></td>
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
                        <li><a href="../cardapio/formCardapio.php">Cadastrar</a></li>
                        <li><a href="../cardapio/consultarCardapio.php">Consultar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <button onclick="cancelar()" type="button" name="btnCancelar" id="btnCancelar" class="btnCancelar">Voltar</button>
</body>
</html>
