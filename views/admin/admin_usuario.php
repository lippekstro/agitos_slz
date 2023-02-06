<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/usuario.php';

try {
    $lista = Usuarios::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<?php if (count($lista) > 0) : ?>
    <section class="container-table">
        <table>
            <caption>Gerenciamento de Usuários</caption>
            <tr>
                <th>Usuário</th>
                <th>Email</th>
                <th colspan="2">
                    <a href="/agitos_slz/views/admin/cadastrar_usuario.php">
                        <span class="material-symbols-outlined">add</span>
                    </a>
                </th>
            </tr>

            <?php foreach ($lista as $usuario) : ?>
                <tr>
                    <td><?= $usuario['nome_usuario'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td>
                        <a href="/agitos_slz/views/admin/editar_usuario.php?id_usuario=<?= $usuario['id_usuario'] ?>">
                            <span class="material-symbols-outlined">edit</span>
                        </a>
                    </td>
                    <td>
                        <a href="/agitos_slz/controllers/deleta_usuario_controller.php?id_usuario=<?= $usuario['id_usuario'] ?>">
                            <span class="material-symbols-outlined">delete</span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
<?php else : ?>
    <section>
        Ainda não há usuários cadastrados
    </section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>