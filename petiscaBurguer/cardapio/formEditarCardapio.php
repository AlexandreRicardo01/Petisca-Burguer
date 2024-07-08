<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Editar Cardápio</title>
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/styleCard.css"/>
        <link rel="icon" href="imagens/formulario.png">
        <link rel="icon" href="../icones/hamburguer.ico">
        <script src="../js/script.js"></script>
    </head>
    <body>
        <?php
        include("../conectarbd.php");
        $recid = filter_input(INPUT_GET, 'editarid');
        $selecionar = mysqli_query($conn, "SELECT * FROM tb_cardapio WHERE id_card=$recid");
        $campo = mysqli_fetch_array($selecionar);
        ?>
        <div class="formEditar" id="formConfig">
            <form method="post" action="editarCardapio.php">
                <fieldset id="fieldsetConfig">
                    <legend><b>Editar cardapio</b></legend>
                    <br>
                    <!esta linha cria um campo oculto para passar o id_servicos, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
                    <input type="hidden" name="id" value="<?= $campo["id_card"] ?>"> 
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="nome_card" placeholder="Nome" class="respUser" value="<?= $campo["nome_card"] ?>" required>
                            <label class="labelInput">Nome do cardapio:</label> 
                        </div>
                        <div class="inputBox">
                            <input type="text" name="tipo_card" placeholder="Tipo" class="respUser" value="<?= $campo["tipo_card"] ?>" required>
                            <label class="labelInput">Tipo:</label> 
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="descricao_card" placeholder="Descrição" class="respUser" value="<?= $campo["descricao_card"] ?>" required>
                            <label class="labelInput">Descrição:</label>
                        </div>
                        <div class="inputBox">
                            <input type="float" name="valor_card" placeholder="Valor" class="respUser" value="<?= $campo["valor_card"] ?>" required>
                            <label class="labelInput">Valor:</label>
                        </div>
                    </div>
                    <div class="frente">
                        <div class="inputBox">
                            <input type="text" name="img_card" class="respUser" value="<?= $campo["img_card"] ?>" required>
                            <label class="labelInput">Imagem:</label>
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
    </body>
</html>
