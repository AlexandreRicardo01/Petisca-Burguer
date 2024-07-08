<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'cardapio');


if(mysqli_query($conn, "DELETE FROM tb_cardapio WHERE id_card=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'consultarCardapio.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>