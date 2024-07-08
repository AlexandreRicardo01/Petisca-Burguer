<?php include_once "../conectarbd.php"; ?>
<html>
    <body>
        <?php
        $nome_forn = $_POST["nome_forn"];
        $cnpj_forn = $_POST["cnpj_forn"];
        $cep_forn = $_POST["cep_forn"];
        $endereco_forn = $_POST["endereco_forn"];
        $n_forn = $_POST["n_forn"];
        $complemento_forn = $_POST["complemento_forn"];
        $bairro_forn = $_POST["bairro_forn"];
        $cidade_forn = $_POST["cidade_forn"];
        $estado_forn = $_POST["estado_forn"];
        $tel_cel_forn = $_POST["tel_cel_forn"];
        $email_forn = $_POST["email_forn"];


        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, 'db_petiscaburguer');
        $sql = "INSERT INTO tb_fornecedor(nome_forn, cnpj_forn, cep_forn, endereco_forn, n_forn, complemento_forn, bairro_forn, cidade_forn, estado_forn, tel_cel_forn, email_forn) VALUES ( "
                . "'$nome_forn',"
                . " '$cnpj_forn', "
                . " '$cep_forn', "
                . " '$endereco_forn', "
                . " '$n_forn', "
                . "'$complemento_forn', "
                . "'$bairro_forn', "
                . "'$cidade_forn', "
                . "'$estado_forn', "
                . " '$tel_cel_forn', "
                . " '$email_forn')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !');
        window.location = 'Consultarfornecedor.php';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

/