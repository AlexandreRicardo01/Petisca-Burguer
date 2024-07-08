<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome_func = $_POST["nome_func"];
        $cpf_func = $_POST["cpf_func"];
        $data_nasc_func = $_POST["data_nasc_func"];
        $rg_func = $_POST["rg_func"];
        $orgao_expedidor_func = $_POST["orgao_expedidor_func"];
        $uf_func = $_POST["uf_func"];
        $data_expedicao_func = $_POST["data_expedicao_func"];
        $estado_civil_func = $_POST["estado_civil_func"];
        $etnia_func = $_POST["etnia_func"];
        $sexo_func = $_POST["sexo_func"];
        $escolaridade_func = $_POST["escolaridade_func"];
        $tempo_experiencia_func = $_POST["tempo_experiencia_func"];
        $qualificacao_func = $_POST["qualificacao_func"];
        $cep_func = $_POST["cep_func"];
        $endereco_func = $_POST["endereco_func"];
        $n_func = $_POST["n_func"];
        $complemento_func = $_POST["complemento_func"];
        $bairro_func = $_POST["bairro_func"];
        $cidade_func = $_POST["cidade_func"];
        $estado_func = $_POST["estado_func"];
        $tel_cel_func = $_POST["tel_cel_func"];
        $email_func = $_POST["email_func"];
        $ctps_func = $_POST["ctps_func"];
        $cnh_func = $_POST["cnh_func"];
        $titulo_eleitor_func = $_POST["titulo_eleitor_func"];
        $pis_pasep_func = $_POST["pis_pasep_func"];
        $cert_nascimento_func = $_POST["cert_nascimento_func"];
        $cert_casamento_func = $_POST["cert_casamento_func"];
        $funcao_func = $_POST["funcao_func"];
        $salario_func = $_POST["salario_func"];
        $horario_func = $_POST["horario_func"];
        $descricao_func = $_POST["descricao_func"];
        $banco_func = $_POST["banco_func"];
        $agencia_func = $_POST["agencia_func"];
        $tipo_conta_func = $_POST["tipo_conta_func"];
        $conta_func= $_POST["conta_func"];
        $n_pix_func= $_POST["n_pix_func"];


        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql =  "INSERT INTO tb_funcionario(nome_func, cpf_func, data_nasc_func,"
                . " rg_func, orgao_expedidor_func, uf_func, data_expedicao_func, estado_civil_func,"
                . " etnia_func, sexo_func, escolaridade_func, tempo_experiencia_func,"
                . " qualificacao_func, cep_func, endereco_func, n_func, complemento_func,"
                . " bairro_func, cidade_func, estado_func, tel_cel_func,"
                . " email_func, ctps_func, cnh_func, titulo_eleitor_func, pis_pasep_func,"
                . " cert_nascimento_func, cert_casamento_func, funcao_func, salario_func, horario_func,"
                . " descricao_func, banco_func, agencia_func, tipo_conta_func, conta_func, n_pix_func ) "
                . "VALUES ('$nome_func', '$cpf_func', '$data_nasc_func', '$rg_func', $orgao_expedidor_func,"
                . "  '$uf_func', '$data_expedicao_func', '$estado_civil_func',"
                . " '$etnia_func', '$sexo_func', '$escolaridade_func', '$tempo_experiencia_func',"
                . " '$qualificacao_func', '$cep_func', '$endereco_func', '$n_func',"
                . " '$complemento_func', '$bairro_func', '$cidade_func', '$estado_func',"
                . " '$tel_cel_func', '$email_func', '$ctps_func', '$cnh_func',"
                . " '$titulo_eleitor_func', '$pis_pasep_func', '$cert_nascimento_func',"
                . " '$cert_casamento_func', '$funcao_func', '$salario_func', $horario_func, '$descricao_func',"
                . " '$banco_func', '$agencia_func', '$tipo_conta_func', '$conta_func', '$n_pix_func')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = 'consultarFuncionario.php';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

/