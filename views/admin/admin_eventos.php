<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/evento.php';

try {
    $lista = Evento::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<?php if (count($lista) > 0) : ?>
    <section class="container-table">
        <table>
            <caption>Administração de Eventos</caption>
            <tr>
                <th>Nome do Evento</th>
                <th>Data</th>
                <th>Local</th>
                <th colspan="2">
                    <a href="/agitos_slz/views/admin/adicionar_evento.php">
                        <span class="material-symbols-outlined">add</span>
                    </a>
                </th>
            </tr>
            <?php foreach ($lista as $post) : ?>
                <tr>
                    <td><?= $post['nome_evento'] ?></td>
                    <td><?= $date->format(new DateTime($post['data_evento'])) ?></td>
                    <td><?= $post['local_evento'] ?></td>
                    <td>
                        <a href="/agitos_slz/views/admin/editar_evento.php?id_evento=<?= $post['id_evento'] ?>">
                            <span class="material-symbols-outlined">edit</span>
                        </a>
                    </td>
                    <td>
                        <a href="/agitos_slz/controllers/deleta_evento_controller.php?id_evento=<?= $post['id_evento'] ?>">
                            <span class="material-symbols-outlined">delete</span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
<?php else : ?>
    <section>
        Ainda não há eventos cadastrados
    </section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>