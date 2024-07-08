<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Editar Funcionário</title>
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/styleFunc.css">
        <script src="../js/script.js"></script>
        <link rel="icon" href="../icones/hamburguer.ico">
    </head>

    <body>

        <?php
        include("../conectarbd.php");

        $recid = filter_input(INPUT_GET, 'editarid');

        $selecionar = mysqli_query($conn, "SELECT * FROM tb_funcionario WHERE id_func=$recid");

        $campo = mysqli_fetch_array($selecionar);
        ?>

        <div class="formEditar" id="formConfig">
            <form method="post" action="editarFuncionario.php">
                <fieldset id="fieldsetConfig">
                    <legend>Alterar Funcinário</legend>
                    <!esta linha cria um campo oculto para passar o id_funcs, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
                    <input type="hidden" name="id" value="<?= $campo["id_func"] ?>"> 
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="nome_func" value="<?= $campo["nome_func"] ?>" required>
                            <label for="nome_func" class="labelInput">Nome:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" id="cpf_func" name="cpf_func" maxlength="14" onkeypress="masc_cpf_func()" value="<?= $campo["cpf_func"] ?>"  required>
                            <label for="" class="labelInput">CPF:</label><br>
                        </div>
                        <div class="inputBox">
                            <input type="date" class="respUser" name="data_nasc_func" value="<?= $campo["data_nasc_func"] ?>" required>
                            <label for="" class="labelInput">Data Nascimento:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="sexo_func" value="<?= $campo["sexo_func"] ?>" required>
                            <label for="" class="labelInput">Sexo:</label><br>
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="uf_func" value="<?= $campo["uf_func"] ?>" required>
                            <label for="" class="labelInput">UF:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="date" class="respUser" name="data_expedicao_func" value="<?= $campo["data_expedicao_func"] ?>" required>
                            <label for="" class="labelInput">Data Expedição :</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" id="rg_func" name="rg_func" maxlength="9" onkeypress="masc_rg_func()" value="<?= $campo["rg_func"] ?>" required>
                            <label for="" class="labelInput">RG:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="etnia_func" value="<?= $campo["etnia_func"] ?>" required>
                            <label for="etnia_func" class="labelInput">Etinia:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="estado_civil_func" value="<?= $campo["estado_civil_func"] ?>" required>
                            <label for="" class="labelInput">Estado Civil:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="escolaridade_func" value="<?= $campo["escolaridade_func"] ?>" required>
                            <label for="" class="labelInput">Escolaridade:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="orgao_expedidor_func" value="<?= $campo["orgao_expedidor_func"] ?>" required>
                            <label for="orgao_expedidor_func" class="labelInput">Orgão Expedidor:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" id="cep_func" name="cep_func" maxlength="9" onkeypress="masc_cep_func()" value="<?= $campo["cep_func"] ?>" required>
                            <label for="" class="labelInput">CEP:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="endereco_func" value="<?= $campo["endereco_func"] ?>" required>
                            <label for="" class="labelInput">Endereço:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="n_func" value="<?= $campo["n_func"] ?>" required>
                            <label for="" class="labelInput">Número:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="complemento_func" value="<?= $campo["complemento_func"] ?>">
                            <label for="" class="labelInput">Complemento:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="bairro_func" value="<?= $campo["bairro_func"] ?>" required>
                            <label for="" class="labelInput">Bairro:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="cidade_func" value="<?= $campo["cidade_func"] ?>" required>
                            <label for="" class="labelInput">Cidade:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="estado_func" value="<?= $campo["estado_func"] ?>" required>
                            <label for="" class="labelInput">Estado:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" id="tel_cel_func" name="tel_cel_func" maxlength="14" onkeypress="masc_tel_cel_func()" value="<?= $campo["tel_cel_func"] ?>" required>
                            <label for="" class="labelInput">Tel/Celular:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="email_func" value="<?= $campo["email_func"] ?>" required>
                            <label for="" class="labelInput">E-mail:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="tempo_experiencia_func" value="<?= $campo["tempo_experiencia_func"] ?>" required>
                            <label for="tempo_experiencia_func" class="labelInput">Tempo Experiência:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="qualificacao_func" value="<?= $campo["qualificacao_func"] ?>" required>
                            <label for="" class="labelInput">Qualificação:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="ctps_func" maxlength="11" value="<?= $campo["ctps_func"] ?>" required>
                            <label for="" class="labelInput">CTPS:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="cnh_func" maxlength="9" value="<?= $campo["cnh_func"] ?>" required>
                            <label for="" class="labelInput">CNH:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="titulo_eleitor_func" maxlength="12" value="<?= $campo["titulo_eleitor_func"] ?>" required>
                            <label for="" class="labelInput">Título de Eleitor:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" id="pis_pasep_func" name="pis_pasep_func" maxlength="14" value="<?= $campo["pis_pasep_func"] ?>" required>
                            <label for="pis_pasep_func" class="labelInput">PIS PASEP:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="cert_nascimento_func" value="<?= $campo["cert_nascimento_func"] ?>">
                            <label for="cert_nascimento_func" class="labelInput">Certidão de Nascimento:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="cert_casamento_func" value="<?= $campo["cert_casamento_func"] ?>">
                            <label for="cert_casamento_func" class="labelInput">Certidão de Casamento:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="horario_func" value="<?= $campo["horario_func"] ?>" required>
                            <label for="horario_func" class="labelInput">Horário:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="funcao_func" value="<?= $campo["funcao_func"] ?>" required>
                            <label for="funcao_func" class="labelInput">Função:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="salario_func" value="<?= $campo["salario_func"] ?>" required>
                            <label for="" class="labelInput">Salário:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="descricao_func" value="<?= $campo["descricao_func"] ?>" required>
                            <label for="descricao_func" class="labelInput">Descrição:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="banco_func" value="<?= $campo["banco_func"] ?>" required>
                            <label for="" class="labelInput">Banco:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="agencia_func" value="<?= $campo["agencia_func"] ?>" required>
                            <label for="" class="labelInput">Agência:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="tipo_conta_func" value="<?= $campo["tipo_conta_func"] ?>" required>
                            <label for="" class="labelInput">Tipo de Conta:</label><br> 
                        </div>
                        <div class="inputBox">
                            <input type="text" class="respUser" name="conta_func" value="<?= $campo["conta_func"] ?>" required>
                            <label for="conta_func" class="labelInput">Conta:</label><br> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" class="respUser" name="n_pix_func" value="<?= $campo["n_pix_func"] ?>" required>
                            <label for="n_pix_func" class="labelInput">Número do Pix:</label><br> 
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
        <script src="../js/CEPfunc.js"></script>
    </body>

</html>
