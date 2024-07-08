<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Funcionário</title>
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/styleFunc.css">
        <link rel="icon" href="../icones/hamburguer.ico">
        <script src="../js/script.js"></script>
        <script src="../js/cep.js"></script>
    </head>
    <body>
        <div class="formEditar" id="formConfig">
            <form method="post" action="cadastrarFuncionario.php">
                <fieldset id="fieldsetConfig">
                    <legend><b>Cadastrar Funcionários</b></legend>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="nome_func" id="nome_func" class="respUser" required/>
                            <label for="nome_func" class="labelInput">Nome:</label></div>
                        <div class="inputBox">
                            <input type="text" name="cpf_func" id="cpf_func" class="respUser" maxlength="14" onkeypress="masc_cpf_func()" onblur="return TestaCPF(this.value)" required />
                            <label for="cpf_func" class="labelInput">CPF:</label>
                        </div>
                        <div class="inputBox">
                            <input type="date" name="data_nasc_func" id="data_nasc_func" class="respUser" required/>
                            <label for=data_nasc_func" class="labelInput">Data de Nascimento:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <select id="sexo_func" name="sexo_func" class="respUser" required>
                                <option value="selecione">--Selecione--</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="outros">Outros</option>
                            </select>
                            <label for="sexo_func" class="labelInput">Sexo:</label>
                        </div>
                        <div class="inputBox">
                            <select name="uf_func" class="respUser" id="uf_func" required>
                                <option value="selecione">--Selecione--</option>
                                <option value="distritoFederal">DF</option>
                                <option value="acre">AC</option>
                                <option value="alagoas">AL</option>
                                <option value="amapa">AP</option>
                                <option value="amazonas">AM</option>
                                <option value="bahia">BA</option>
                                <option value="ceara">CE</option>
                                <option value="espiritoSanto">ES</option>
                                <option value="goias">GO</option>
                                <option value="maranhao">MA</option>
                                <option value="matoGrosso">MT</option>
                                <option value="matoGrossoSul">MS</option>
                                <option value="minasGerais">MG</option>
                                <option value="para">PA</option>
                                <option value="paraiba">PB</option>
                                <option value="parana">PR</option>
                                <option value="pernambuco">PE</option>
                                <option value="piaui">PI</option>
                                <option value="rioDeJaneiro">RJ</option>
                                <option value="rioGrandeNorte">RN</option>
                                <option value="rioGrandeSul">RS</option>
                                <option value="rondonia">RO</option>
                                <option value="roraima">RR</option>
                                <option value="santaCatarina">SC</option>
                                <option value="saoPaulo">SP</option>
                                <option value="sergipe">SE</option>
                                <option value="tocantins">TO</option>
                            </select>
                            <label for="uf_func" class="labelInput">UF:</label>
                        </div>
                        <div class="inputBox">
                            <input type="date" id="data_expedicao_func" name="data_expedicao_func" class="respUser" required/>
                            <label for="data_expedicao_func" class="labelInput">Data Expedição:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="rg_func" id="rg_func" class="respUser" maxlength="9" onkeypress="masc_rg_func()" required/>
                            <label for="rg_func" class="labelInput">RG:</label>
                        </div>
                        <div class="inputBox">
                            <select id="etnia_func" name="etnia_func" class="respUser" required>
                                <option value="selecione">--Selecione--</option>
                                <option value="brancos">Branco</option>
                                <option value="pardos">Pardo</option>
                                <option value="pretos">Preto</option>
                                <option value="amarelo">Amarelo</option>
                                <option value="indigena">Indígena</option>
                                <option value="outros">Outros</option>
                                <option value="naoDeclarado">Não declarado</option>
                            </select>
                            <label for="etnia_func" class="labelInput">Etnia:</label>
                        </div>
                        <div class="inputBox">
                            <select id="estado_civil_func" name="estado_civil_func" class="respUser" required>
                                <option value="selecione">--Selecione--</option>
                                <option value="solteiro">Solteiro</option>
                                <option value="casado">Casado</option>
                                <option value="separado">Separado</option>
                                <option value="divorciado">Divorciado</option>
                                <option value="viuvo">Viúvo</option>
                            </select>
                            <label for="estado_civil_func" class="labelInput">Estado Civil:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" id="escolaridade_func" name="escolaridade_func" class="respUser" required />
                            <label for="escolaridade_func" class="labelInput">Escolaridade:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="orgao_expedidor_func" id="orgao_expedidor_func" class="respUser" required/>
                            <label for="orgao_expedidor_func" class="labelInput">Orgão Expedidor:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" id="cep_func" name="cep_func" class="respUser" maxlength="9" onkeypress="masc_cep_func()" required/>
                            <label for="cep_func" class="labelInput">CEP:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" id="endereco_func" name="endereco_func" class="respUser" required />
                            <label for="endereco_func" class="labelInput">Endereço:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" id="n_func" name="n_func" class="respUser" required />
                            <label for="n_func" class="labelInput">Número:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" id="complemento_func" name="complemento_func" class="respUser" />
                            <label for="complemento_func" class="labelInput">Complemento:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" id="bairro_func" name="bairro_func" class="respUser" required />
                            <label for="bairro_func" class="labelInput">Bairro:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" id="cidade_func" name="cidade_func" class="respUser" required />
                            <label for="cidade_func" class="labelInput">Cidade:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" id="estado_func" name="estado_func" class="respUser" required />
                            <label for="estado_func" class="labelInput">Estado:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="tel_cel_func" id="tel_cel_func" class="respUser" maxlength="14" onkeypress="masc_tel_cel_func()" required>
                            <label for="tel_cel_func" class="labelInput">Tel/Celular:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email_func" id="email_func" class="respUser" required>
                            <label for="email_func" class="labelInput">E-mail:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" id="tempo_experiencia_func" name="tempo_experiencia_func" class="respUser" required />
                            <label for="tempo_experiencia_func" class="labelInput">Tempo Experiência:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" id="qualificacao_func" name="qualificacao_func" class="respUser" required />
                            <label for="qualificacao_func" class="labelInput">Qualificação:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="ctps_func" id="ctps_func" class="respUser" maxlength="11" required>
                            <label for="ctps_func" class="labelInput">CTPS:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="cnh_func" id="cnh_func" class="respUser" maxlength="9" required>
                            <label for="cnh_func" class="labelInput">CNH:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="titulo_eleitor_func" id="titulo_eleitor_func" class="respUser" maxlength="12" required>
                            <label for="titulo_eleitor_func" class="labelInput">Titulo de Eleitor:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="pis_pasep_func" id="pis_pasep_func" class="respUser" maxlength="14" onkeypress="masc_pis_pasep_func()" required>
                            <label for="pis_pasep_func" class="labelInput">PIS PASEP:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="cert_nascimento_func" id="cert_nascimento_func" class="respUser" maxlength="40" onkeypress="masc_cert_nascimento_func()">
                            <label for="cert_nascimento_func" class="labelInput">Certidão Nascimento:</label>
                        </div>
                    </div> 
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="cert_casamento_func" id="cert_casamento_func" class="respUser" maxlength="40" onkeypress="masc_cert_casamento_func()">
                            <label for="cert_casamento_func" class="labelInput">Certidão de Casamento:</label>
                        </div> 
                        <div class="inputBox">
                            <input type="text" name="horario_func" id="horario_func" class="respUser" required>
                            <label for="horario_func" class="labelInput">Horário:</label>
                        </div>
                        <div class="inputBox">
                            <label for="funcao_func" class="labelInput">Função:</label>
                            <select id="funcao_func" name="funcao_func" class="respUser" required>
                                <option value="selecione">--Selecione--</option>
                                <option value="gerente">Gerente</option>
                                <option value="funcionario">Funcionário</option>
                            </select>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="salario_func" id="salario_func" class="respUser" required>
                            <label for="salario_func" class="labelInput">Salário:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="descricao_func" id="descricao_func" class="respUser" required>
                            <label for="descricao_func" class="labelInput">Descrição:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="banco_func" id="banco_func" class="respUser" required>
                            <label for="banco_func" class="labelInput">Banco:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="number" name="agencia_func" id="agencia_func" class="respUser" required>
                            <label for="agencia_func" class="labelInput">Agência:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="tipo_conta_func" id="tipo_conta_func" class="respUser" required>
                            <label for="tipo_conta_func" class="labelInput">Tipo de Conta:</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="conta_func" id="conta_func" class="respUser" required>
                            <label for="conta_func" class="labelInput">Conta:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="n_pix_func" id="numero_pix_func" class="respUser" required>
                            <label for="n_pix_func" class="labelInput">Número do Pix:</label>
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
        <script src="../js/CEPfunc.js"></script>
    </body>
</html>

