<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/local.php';

try {
    $lista = Local::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<section class="container-table">
    <table>
        <caption>Administração de Locais</caption>
        <tr>
            <th>Nome do Local</th>
            <th>Endereço</th>
            <th>Categoria</th>
            <th>Tipo</th>
            <th colspan="2">
                <a href="/agitos_slz/views/admin/adicionar_local.php">
                    <span class="material-symbols-outlined">add</span>
                </a>
            </th>
        </tr>

        <?php foreach ($lista as $local) : ?>
            <tr>
                <td><?= $local['nome'] ?></td>
                <td><?= $local['endereco'] ?></td>
                <td><?= $local['categoria'] ?></td>
                <td><?= $local['tipo'] ?></td>
                <td>
                    <a href="/agitos_slz/views/admin/editar_local.php?id_local=<?= $local['id_local'] ?>">
                        <span class="material-symbols-outlined">edit</span>
                    </a>
                </td>
                <td>
                    <a href="/agitos_slz/controllers/deleta_local_controller.php?id_local=<?= $local['id_local'] ?>">
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