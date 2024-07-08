<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome_card= filter_input(INPUT_POST, 'nome_card');

$rectipo_card= filter_input(INPUT_POST, 'tipo_card');

$recdescricao_card= filter_input(INPUT_POST, 'descricao_card');

$recvalor_card= filter_input(INPUT_POST, 'valor_card');

$recimg_card= filter_input(INPUT_POST, 'img_card');



  if(mysqli_query($conn, "UPDATE tb_cardapio SET nome_card='$recnome_card', tipo_card='$rectipo_card', descricao_card='$recdescricao_card', valor_card='$recvalor_card', img_card='$recimg_card' WHERE id_card=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'consultarCardapio.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>