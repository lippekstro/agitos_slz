<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/postagem.php';

try {
    $lista = Postagem::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<section class="container-table">
    <table>
        <caption>Administração do Blog</caption>
        <tr>
            <th>Título</th>
            <th>Data de Publicação</th>
            <th>Autor</th>
            <th colspan="2">
                <a href="/agitos_slz/views/admin/adicionar_postagem_blog.php">
                    <span class="material-symbols-outlined">add</span>
                </a>
            </th>
        </tr>
        <?php foreach($lista as $post): ?>
        <tr>
            <td><?= $post['titulo'] ?></td>
            <td><?= $datahora->format(new DateTime($post['data_publicacao'])) ?></td>
            <td><?= $post['nome_autor'] ?></td>
            <td>
                    <a href="/agitos_slz/views/admin/editar_post.php?id_post=<?= $post['id_post'] ?>">
                        <span class="material-symbols-outlined">edit</span>
                    </a>
                </td>
                <td>
                    <a href="/agitos_slz/controllers/deleta_post_controller.php?id_post=<?= $post['id_post'] ?>">
                        <span class="material-symbols-outlined">delete</span>
                    </a>
                </td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>