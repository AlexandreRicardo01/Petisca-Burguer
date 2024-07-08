<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/styleForn.css">
        <link rel="icon" href="../icones/hamburguer.ico">
        <script src="../js/script.js"></script>

        <title>Cadastrar Fornecedor</title>
    </head>
    <body>
        <div class="formEditar" id="formConfig">
            <form action="cadastrarfornecedor.php" method="POST">
                <fieldset id="fieldsetConfig">
                    <legend><b>Cadastrar Fornecedor</b></legend> 
                    <br>
                    <div class="frente">
                        <div class="inputBox">        
                            <input type="text" name="nome_forn" id="nome_forn" class="RespUser"  required>
                            <label for="nome_forn" class="labelInput">Nome:</label>
                        </div>
                        <div class="inputBox">        
                            <input type="text" name="cnpj_forn" id="nome_forn" class="RespUser" maxlength="14" required>
                            <label for="cnpj_forn" class="labelInput">Cnpj:</label>
                        </div>
                        <div class="inputBox">       
                            <input name="cep_forn" type="text" id="cep_forn" value="" class="RespUser" maxlength="9" onkeypress="masc_cep_forn()" required >
                            <label for="cep_forn" class="labelInput" >CEP:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="endereco_forn" value="" id="endereco_forn" class="RespUser"  required >
                            <label for="endereco_forn" class="labelInput">Endereço:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="cidade_forn" value="" id="cidade_forn" class="RespUser"  required >
                            <label for="cidade_forn" class="labelInput">Cidade:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="n_forn" value="" id="n_forn" class="RespUser"  required >
                            <label for="n_forn" class="labelInput">Número:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="complemento_forn" value="" id="complemento_forn" class="RespUser">
                            <label for="complemento_forn" class="labelInput">Complemento:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="bairro_forn" value="" id="bairro_forn" class="RespUser"  required >
                            <label for="bairro_forn" class="labelInput">Bairro:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="estado_forn" value="" id="estado_forn" class="RespUser"  required >
                            <label for="estado_forn" class="labelInput">Estado:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="tel_cel_forn" id="tel_cel_forn" class="RespUser" maxlength="14" onkeypress="masc_tel_cel_forn()" required >
                            <label for="tel_cel_forn" class="labelInput">Tel/Cel:</label>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email_forn" id="email_forn" class="RespUser"  required >
                            <label for="email_forn" class="labelInput">E-mail:</label>
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
                            <li><a href="../cardapio/formCardapio.php">Cadastrar</a></li>
                            <li><a href="../cardapio/consultarCardapio.php">Consultar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <script src="../js/CEPforn.js"></script>
    </body>
</html>