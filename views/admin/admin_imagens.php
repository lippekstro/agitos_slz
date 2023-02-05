<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/imagem.php';

try {
    $lista = Imagem::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<section class="container-table">
    <table>
        <caption>Administração de Imagens da Página Inicio</caption>
        <tr>
            <th>imagem</th>
            <th>data de upload</th>
            <th>
                <a href="/agitos_slz/views/admin/adicionar_imagem_inicio.php">
                    <span class="material-symbols-outlined">add</span>
                </a>
            </th>
        </tr>
        <?php foreach($lista as $img): ?>
        <tr>
            <td><img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($img['imagem_inicio']); ?>" alt=""></td>
            <td><?= $date->format(new DateTime($img['data_upload'])) ?></td>
            <td>
                <a href="/agitos_slz/controllers/deletar_imagem_controller.php?id_imagem=<?= $img['id_imagem'] ?>">
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