<?php

include("../conectarbd.php");

$recid = filter_input(INPUT_POST, 'id_forn');

$recnome_forn = filter_input(INPUT_POST, 'nome_forn');

$reccep_forn = filter_input(INPUT_POST, 'cep_forn');

$reccnpj_forn = filter_input(INPUT_POST, 'cnpj_forn');

$recendereco_forn = filter_input(INPUT_POST, 'endereco_forn');

$recn_forn = filter_input(INPUT_POST, 'n_forn');

$reccomplemento_forn = filter_input(INPUT_POST, 'complemento_forn');

$recbairro_forn = filter_input(INPUT_POST, 'bairro_forn');

$reccidade_forn = filter_input(INPUT_POST, 'cidade_forn');

$recestado_forn = filter_input(INPUT_POST, 'estado_forn');

$rectel_cel_forn = filter_input(INPUT_POST, 'tel_cel_forn');

$recemail_forn = filter_input(INPUT_POST, 'email_forn');


if (mysqli_query($conn, "UPDATE tb_fornecedor SET  "
                . "nome_forn='$recnome_forn', "
                . "cep_forn='$reccep_forn',"
                . "endereco_forn='$recendereco_forn',"
                . "n_forn='$recn_forn',"
                . "complemento_forn='$reccomplemento_forn',"
                . "bairro_forn='$recbairro_forn',"
                . "cidade_forn='$reccidade_forn',"
                . "estado_forn='$recestado_forn',"
                . "tel_cel_forn='$rectel_cel_forn',"
                . "email_forn='$recemail_forn'"
        . "WHERE id_forn='$recid'")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarfornecedor.php';</script>";
} else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>