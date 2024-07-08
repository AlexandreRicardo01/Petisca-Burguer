<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'func');



  if(mysqli_query($conn, "DELETE FROM tb_funcionario WHERE id_func=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'consultarFuncionario.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>