<!DOCTYPE html>

<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <title>Editar Fornecedor</title>
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/styleForn.css">
        <script src="../js/script.js"></script>
        <link rel="icon" href="../icones/hamburguer.ico">
    </head>

    <body>
        <?php
        include("../conectarbd.php");
        $recid = filter_input(INPUT_GET, 'editarid');
        $selecionar = mysqli_query($conn, "SELECT * FROM tb_fornecedor WHERE id_forn=$recid");
        $campo = mysqli_fetch_array($selecionar);
        ?>
        <div class="formEditar" id="formConfig">
            <form method="post" action="editarFornecedor.php">
                <fieldset id="fieldsetConfig">
                    <legend>Alterar Fornecedor</legend>
                    <input type="hidden" name="id_forn" value="<?= $campo["id_forn"] ?>"> 
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="nome_forn" class="respUser" value="<?= $campo["nome_forn"] ?>" required> 
                            <label class="labelInput">Nome:</label><br>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="cnpj_forn" class="respUser" maxlength="14" value="<?= $campo["cnpj_forn"] ?>" required> 
                            <label for="cnpj_forn" class="labelInput">Cnpj:</label><br>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="cep_forn" id="cep_forn" class="respUser" maxlength="9" onkeypress="masc_cep_forn()" value="<?= $campo["cep_forn"] ?>" required> 
                            <label for="cep_forn" class="labelInput">CEP:</label><br>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="endereco_forn" id="endereco_forn" class="respUser" value="<?= $campo["endereco_forn"] ?>" required> 
                            <label for="endereco_forn" class="labelInput">Endereço:</label><br>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="cidade_forn" id="cidade_forn" class="respUser" value="<?= $campo["cidade_forn"] ?>" required>
                            <label for="cidade_forn" class="labelInput">Cidade:</label><br>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="n_forn" id="n_forn" class="respUser" value="<?= $campo["n_forn"] ?>" required>  
                            <label for="n_forn" class="labelInput">Número:</label><br>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="complemento_forn" id="complemento_forn" class="respUser" value="<?= $campo["complemento_forn"] ?>"> 
                            <label for="complemento_forn" class="labelInput">Complemento:</label><br>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="bairro_forn" id="bairro_forn" class="respUser" value="<?= $campo["bairro_forn"] ?>"> 
                            <label for="bairro_forn" class="labelInput">Bairro:</label><br>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="estado_forn" id="estado_forn"  class="respUser" value="<?= $campo["estado_forn"] ?>" required> 
                            <label for="estado_forn" class="labelInput">Estado:</label><br>
                        </div>                    
                        <div class="inputBox">
                            <input type="text" name="tel_cel_forn" id="tel_cel_forn" class="respUser" maxlength="14" onkeypress="masc_tel_cel_forn()" value="<?= $campo["tel_cel_forn"] ?>" required> 
                            <label for="tel_cel_forn" class="labelInput">Tel/Cel:</label><br>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="email_forn" id="email_forn" class="respUser" class="email_forn" value="<?= $campo["email_forn"] ?>" required> 
                            <label for="email_forn" class="labelInput">E-mail:</label><br>
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
        <script src="../js/CEPforn.js"></script>
    </body>
</html>
