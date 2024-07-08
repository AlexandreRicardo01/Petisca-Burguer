<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/styleCard.css"/>
        <link rel="icon" href="../icones/hamburguer.ico">
        <script src="../js/script.js"></script>
        <title>Cadastrar Cardápio</title>
    </head>
    <body>
        <div class="container">
            <div class="formEditar" id="formConfig">
                <form action="cadastrarCardapio.php" name="testeVali" method="POST">
                    <fieldset id="fieldsetConfig">
                        <legend><b>Cadastrar Cardápio</b></legend>
                        <br>
                        <div class="frente">
                            <div class="inputBox">
                                <input type="text" name="nome_card" id="nome_card" class="respUser" required>
                                <label for="nome_card" class="labelInput">Nome do cardápio:</label>
                            </div>
                            <div class="inputBox">
                                <div class="inputBox">
                                    <select id="tipo_card" name="tipo_card" class="respUser" required>
                                        <option value="selecione">--Selecione--</option>
                                        <option value="petisco">Petisco</option>
                                        <option value="hamburguer">Hamburguer</option>
                                    </select>
                                    <label for="tipo_card" class="labelInput">Tipo:</label>
                                </div>
                            </div>
                        </div>
                        <div class="frente">
                            <div class="inputBox">
                                <input type="text" name="descricao_card" id="descricao_card" class="respUser" required>
                                <label for="descricao_card" class="labelInput">Descrição:</label>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="valor_card" id="valor_card" class="respUser" required>
                                <label for="valor_card" class="labelInput">Valor:</label>
                            </div>
                        </div>
                        <div class="frente">
                            <div class="inputBox">
                                <input type="file" name="img_card" id="img_card" class="respUserCard" required>
                                <label class="labelInput" for="img_card" >Imagem do Cardápio:</label>
                            </div>
                        </div>
                        <button type="submit" name="btnEnviar" id="btnEnviarConfig" class="btnGeral">Enviar</button>
                        <button onclick="cancelar()" type="button" name="btnCancelar" id="btnCancelConfig" class="btnGeral">Cancelar</button>
                        <ul class="imgHambur" id="imgHamburBtn">
                            <img src="../imagens/hamburguer_resized.png">
                        </ul>
                    </fieldset>
                </form>
            </div>
            <div class="nav">
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
                                <li><a href="#">Cadastrar</a></li>
                                <li><a href="../cardapio/consultarCardapio.php">Consultar</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
    </body>
</html>