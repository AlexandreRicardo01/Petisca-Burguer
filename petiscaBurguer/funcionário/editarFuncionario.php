<?php

include("../conectarbd.php");

$recid = filter_input(INPUT_POST, 'id');

$recnnome_func = filter_input(INPUT_POST, 'nome_func');

$reccpf_func = filter_input(INPUT_POST, 'cpf_func');

$recdata_nasc_func = filter_input(INPUT_POST, 'data_nasc_func');

$recrg_func = filter_input(INPUT_POST, 'rg_func');

$recorgao_expedidor_func = filter_input(INPUT_POST, 'orgao_expedidor_func');

$recuf_func = filter_input(INPUT_POST, 'uf_func');

$recdata_expedicao_func = filter_input(INPUT_POST, 'data_expedicao_func');

$recestado_civil_func = filter_input(INPUT_POST, 'estado_civil_func');

$recetnia_func = filter_input(INPUT_POST, 'etnia_func');

$recsexo_func = filter_input(INPUT_POST, 'sexo_func');

$recescolaridade_func = filter_input(INPUT_POST, 'escolaridade_func');

$rectempo_experiencia_func = filter_input(INPUT_POST, 'tempo_experiencia_func');

$recqualificacao_func = filter_input(INPUT_POST, 'qualificacao_func');

$reccep_func = filter_input(INPUT_POST, 'cep_func');

$recendereco_func = filter_input(INPUT_POST, 'endereco_func');

$recn_func = filter_input(INPUT_POST, 'n_func');

$reccomplemento_func = filter_input(INPUT_POST, 'complemento_func');

$recbairro_func = filter_input(INPUT_POST, 'bairro_func');

$reccidade_func = filter_input(INPUT_POST, 'cidade_func');

$recestado_func = filter_input(INPUT_POST, 'estado_func');

$rectel_cel_func = filter_input(INPUT_POST, 'tel_cel_func');

$recemail_func = filter_input(INPUT_POST, 'email_func');

$recctps_func = filter_input(INPUT_POST, 'ctps_func');

$reccnh_func = filter_input(INPUT_POST, 'cnh_func');

$rectitulo_eleitor_func = filter_input(INPUT_POST, 'titulo_eleitor_func');

$recpis_pasep_func = filter_input(INPUT_POST, 'pis_pasep_func');

$reccert_nasc_func = filter_input(INPUT_POST, 'cert_nasc_func');

$reccert_casamento_func = filter_input(INPUT_POST, 'cert_casamento_func');

$recfuncao_func = filter_input(INPUT_POST, 'funcao_func');

$recsalario_func = filter_input(INPUT_POST, 'salario_func');

$rechorario_func = filter_input(INPUT_POST, 'horario_func');

$recdescricao_func = filter_input(INPUT_POST, 'descricao_func');

$recbanco_func = filter_input(INPUT_POST, 'banco_func');

$recagencia_func = filter_input(INPUT_POST, 'agencia_func');

$rectipo_conta_func = filter_input(INPUT_POST, 'tipo_conta_func');

$recconta_func = filter_input(INPUT_POST, 'conta_func');

$recn_pix_func = filter_input(INPUT_POST, 'n_pix_func');







if (mysqli_query($conn, "UPDATE tb_funcionario SET nome_func='$recnnome_func', cpf_func='$reccpf_func', data_nasc_func='$recdata_nasc_func',"
                . "rg_func='$recrg_func',orgao_expedidor_func='$recorgao_expedidor_func', uf_func='$recuf_func',"
                . "data_expedicao_func='$recdata_expedicao_func', estado_civil_func='$recestado_civil_func',"
                . "sexo_func='$recsexo_func', escolaridade_func='$recescolaridade_func', tempo_experiencia_func='$rectempo_experiencia_func',qualificacao_func='$recqualificacao_func',"
                . "cep_func='$reccep_func',endereco_func='$recendereco_func',n_func='$recn_func',complemento_func='$reccomplemento_func',bairro_func='$recbairro_func',"
                . "cidade_func='$reccidade_func',estado_func='$recestado_func',tel_cel_func='$rectel_cel_func',"
                . "email_func='$recemail_func',ctps_func='$recctps_func',cnh_func='$reccnh_func',titulo_eleitor_func='$rectitulo_eleitor_func',pis_pasep_func='$recpis_pasep_func',"
                . "cert_nascimento_func='$reccert_nascimento_func',cert_casamento_func='$reccert_casamento_func',funcao_func='$recfuncao_func',salario_func='$recsalario_func',"
                . "horario_func='$rechorario_func',descricao_func='$recdescricao_func',banco_func='$recbanco_func',tipo_conta_func='$rectipo_conta_func',"
                . "agencia_func='$recagencia_func',conta_func='$recconta_func',n_pix_func='$recn_pix_func'"
                . "WHERE id_func='$recid'")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'consultarFuncionario.php';</script>";
} else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>