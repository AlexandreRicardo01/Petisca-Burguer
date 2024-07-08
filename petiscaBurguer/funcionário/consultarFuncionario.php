<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Funcionario</title>
        <link href="../css/style.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../css/styleFunc.css">
        <link type="text/css" rel="stylesheet" href="../fontawesome/css/all.min.css">
        <link rel="icon" href="../icones/hamburguer.ico">
        <script src="../js/script.js"></script>
    </head>

    <body>
        <h1 class="tituloConsultar">Consultar Funcionários Cadastradas</h1>
        <table border="2" id="tableConfig">
            <tr>
                <td align="center"> <strong>ID</strong></td>
                <td align="center"> <strong>Nome</strong></td>	
                <td align="center"> <strong>CPF</strong></td>		
                <td align="center"> <strong>Data de Nascimento</strong></td> 
              <!--  <td align="center"> <strong>Rg</strong></td>-->
                <!-- <td align="center"> <strong>Orgão Expeditor</strong></td>-->		
               <!--  <td align="center"> <strong>Uf</strong></td> -->
               <!--  <td align="center"> <strong>Data Expedição</strong></td>-->
                <td align="center"> <strong>Estado Civil</strong></td>		
                <td align="center"> <strong>Etnia</strong></td> 
                <td align="center"> <strong>Sexo</strong></td>	
                <td align="center"> <strong>Escolaridade</strong></td>		
                <td align="center"> <strong>Tempo Experiencia</strong></td> 
                <!-- <td align="center"> <strong>Qualificação</strong></td>--> 	
                <!-- <td align="center"> <strong>Cep</strong></td>		
                <!-- <td align="center"> <strong>Endereço</strong></td> 
                <!-- <td align="center"> <strong>Numero</strong></td>	
                <!-- <td align="center"> <strong>Complemento</strong></td>		
                <!-- <td align="center"> <strong>Bairro</strong></td> -->
                <td align="center"> <strong>Cidade</strong></td> 	
                <td align="center"> <strong>Estado</strong></td>		
               <!--  <td align="center"> <strong>Tel fixo</strong></td> -->
                <td align="center"> <strong>Celular</strong></td>	
              <!--  <td align="center"> <strong>Whatsapp</strong></td>-->		
                <td align="center"> <strong>E-mail</strong></td> 
               <!-- <td align="center"> <strong>Ctps</strong></td>	
              <!--  <td align="center"> <strong>Cnh</strong></td> 	
               <!-- <td align="center"> <strong>Titulo Eleitor</strong></td>		
               <!-- <td align="center"> <strong>Pis Pasep</strong></td> 
               <!-- <td align="center"> <strong>Certidão Nasc</strong></td>	
               <!-- <td align="center"> <strong>Certidão Casamento</strong></td>-->		
                <td align="center"> <strong>Função</strong></td> 
                <td align="center"> <strong>Salário</strong></td> 	
                <td align="center"> <strong>Horário</strong></td>
                <!--<td align="center"> <strong>Descrição</strong></td>-->
                 <!--<td align="center"> <strong>Descrição</strong></td> 
                <!-- <td align="center"> <strong>Banco</strong></td>	
                <!-- <td align="center"> <strong>Agencia</strong></td>		
                <!-- <td align="center"> <strong>Tipo de Conta</strong></td> 
               <!--  <td align="center"> <strong>Numero Pix</strong></td>-->
                <td align="center"> <strong>Editar</strong></td>
                <td align="center"> <strong>Excluir</strong></td>



            </tr>

            <?php
            include("../conectarbd.php");
            $selecionar = mysqli_query($conn, "SELECT * FROM tb_funcionario");
            while ($campo = mysqli_fetch_array($selecionar)) {
                ?>
                <tr>
                    <td align="center"><?= $campo["id_func"] ?></td>
                    <td align="center"><?= $campo["nome_func"] ?></td>
                    <td align="center"><?= $campo["cpf_func"] ?></td>
                    <td align="center"><?= $campo["data_nasc_func"] ?></td>
                   <!-- <td align="center"><?= $campo["rg_func"] ?></td> -->
                   <!-- <td align="center"><?= $campo["orgao_expedidor_func"] ?></td> -->
                   <!-- <td align="center"><?= $campo["uf_func"] ?></td> -->
                   <!-- <td align="center"><?= $campo["data_expedicao_func"] ?></td> -->
                    <td align="center"><?= $campo["estado_civil_func"] ?></td>
                    <td align="center"><?= $campo["etnia_func"] ?></td>
                    <td align="center"><?= $campo["sexo_func"] ?></td>
                    <td align="center"><?= $campo["escolaridade_func"] ?></td>
                    <td align="center"><?= $campo["tempo_experiencia_func"] ?></td>
                   <!-- <td align="center"><?= $campo["qualificacao_func"] ?></td>-->
                   <!-- <td align="center"><?= $campo["cep_func"] ?></td>-->
                   <!-- <td align="center"><?= $campo["endereco_func"] ?></td>-->
                   <!-- <td align="center"><?= $campo["n_func"] ?></td>-->
                   <!-- <td align="center"><?= $campo["complemento_func"] ?></td>-->
                   <!-- <td align="center"><?= $campo["bairro_func"] ?></td>-->
                    <td align="center"><?= $campo["cidade_func"] ?></td>
                    <td align="center"><?= $campo["estado_func"] ?></td>
                    <td align="center"><?= $campo["tel_cel_func"] ?></td>
                    <td align="center"><?= $campo["email_func"] ?></td>
                   <!-- <td align="center"><?= $campo["ctps_func"] ?></td> -->
                   <!-- <td align="center"><?= $campo["cnh_func"] ?></td> -->
                   <!-- <td align="center"><?= $campo["titulo_eleitor_func"] ?></td> -->
                   <!-- <td align="center"><?= $campo["pis_pasep_func"] ?></td> -->
                   <!-- <td align="center"><?= $campo["cert_nasc_func"] ?></td> -->
                   <!-- <td align="center"><?= $campo["cert_casamento_func"] ?></td> -->
                    <td align="center"><?= $campo["funcao_func"] ?></td>
                    <td align="center"><?= $campo["salario_func"] ?></td>
                    <td align="center"><?= $campo["horario_func"] ?></td>
                    <!--<td align="center"><?= $campo["descricao_func"] ?></td>-->
                    <!--<td align="center"><?= $campo["banco_func"] ?></td>-->
                   <!-- <td align="center"><?= $campo["agencia_func"] ?></td>-->
                   <!-- <td align="center"><?= $campo["tipo_conta_func"] ?></td>-->
                   <!-- <td align="center"><?= $campo["conta_func"] ?></td>-->
                   <!-- <td align="center"><?= $campo["n_pix_func"] ?></td>-->
                    <td align="center"><a href="FormEditarFuncionario.php?editarid=<?php echo $campo ['id_func']; ?>" id="btnEditar"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td align="center"><a href="excluirFuncionario.php?p=excluir&func=<?php echo $campo['id_func']; ?>"><strong id="btnExcluir" onclick="return confirm('Tem certeza que deseja deletar?')"><i class="fa-sharp fa-solid fa-xmark"></i></strong></a></td>
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
                        <li><a href="#">Consultar</a></li>
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
