<?php include_once "../conectarbd.php"; ?>
<html lang="pt-BR">
    <body>
        <?php
        $nome_card = $_POST["nome_card"];
        $tipo_card = $_POST["tipo_card"];
        $descricao_card = $_POST["descricao_card"];
        $valor_card = $_POST["valor_card"];
        $img_card = $_POST["img_card"];
        
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, 'db_petiscaburguer');
        $sql = "INSERT INTO tb_cardapio(nome_card, tipo_card, descricao_card, valor_card, img_card) "
                . "VALUES ('$nome_card', '$tipo_card',  '$descricao_card', '$valor_card', '$img_card')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = 'consultarCardapio.php';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>