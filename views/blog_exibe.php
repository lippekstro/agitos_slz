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

<section class="blog-exibe">

    <h1><?= $postagem->titulo ?></h1>
    <div class="container-autor-data">
        <span><?= $postagem->nomeAutor($postagem->id_usuario) ?></span>
        <span><?= $postagem->data_publicacao ?></span>
    </div>

    <div class="container-img-blog-exibe">
        <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($postagem->imagem_post); ?>" alt="" width="100%" height="auto">
    </div>
    <?php
    $conteudo = $postagem->conteudo;
    $texto_quebrado = explode("<br />", nl2br($conteudo));
    foreach ($texto_quebrado as $paragrafo) :
    ?>
        <p>
            <?= $paragrafo ?>
        </p>
    <?php endforeach; ?>

</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>