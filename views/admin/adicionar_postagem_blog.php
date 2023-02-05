<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
?>

<div class="container-form">
    <h1>Cadastro de Postagem</h1>
    <form action="/agitos_slz/controllers/adiciona_postagem_controller.php" method="post" enctype="multipart/form-data">
        <div class="form-item">
            <div class="col-25">
                <label for="titulo">Título</label>
            </div>
            <div class="col-75">
                <input type="text" id="titulo" name="titulo" placeholder="Título" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="conteudo">Conteúdo</label>
            </div>
            <div class="col-75">
                <textarea id="conteudo" name="conteudo" placeholder="Escreva uma nova notícia..." style="height:200px"></textarea>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="imagem_post">Imagem</label>
            </div>
            <div class="col-75">
                <input type="file" id="imagem_post" name="imagem_post">
            </div>
        </div>
        <div class="form-item" style="align-self: flex-end;">
            <button type="submit" class="sucesso">Postar</button>
        </div>
    </form>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>