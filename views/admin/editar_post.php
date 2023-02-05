<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/postagem.php';

try {
    $id_post = $_GET['id_post'];
    $postagem = new Postagem($id_post);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<div class="container-form">
    <h1>Edição de Postagem</h1>
    <form action="/agitos_slz/controllers/edita_postagem_controller.php" method="post">
        <input type="hidden" id="id_post" name="id_post" value="<?= $postagem->id_post ?>">
        <div class="form-item">
            <div class="col-25">
                <label for="titulo">Título</label>
            </div>
            <div class="col-75">
                <input type="text" id="titulo" name="titulo" placeholder="Título" value="<?= $postagem->titulo ?>" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="conteudo">Conteúdo</label>
            </div>
            <div class="col-75">
                <textarea id="conteudo" name="conteudo" placeholder="Escreva uma nova notícia..." style="height:200px">
                    <?= $postagem->conteudo ?>
                </textarea>
            </div>
        </div>
        <div class="form-item" style="align-self: flex-end;">
            <button type="submit" class="sucesso">Atualizar</button>
        </div>
    </form>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>