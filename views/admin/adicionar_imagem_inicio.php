<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
?>

<section class="container-form">
    <h1>Cadastro de Imagens</h1>
    <form action="/agitos_slz/controllers/adiciona_imagem_controller.php" method="post" enctype="multipart/form-data">
        <div class="form-item">
            <div class="col-25">
                <label for="imagem_inicio">Imagem</label>
            </div>
            <div class="col-75">
                <input type="file" id="imagem_inicio" name="imagem_inicio" required>
            </div>
        </div>
        <div class="form-item" style="align-self: flex-end;">
            <button type="submit" class="sucesso">Cadastrar Imagem</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>