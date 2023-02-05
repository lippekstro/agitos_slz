<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/usuario.php';

try {
    $id_usuario = $_GET['id_usuario'];
    $usuario = new Usuarios($id_usuario);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<div class="container-form">
    <h1>Atualização de Usuario</h1>
    <form action="/agitos_slz/controllers/edita_usuario_controller.php" method="post">
        <input type="hidden" name="id_usuario" value="<?= $usuario->id_usuario ?>">
        <div class="form-item">
            <div class="col-25">
                <label for="nome_usuario">Nome</label>
            </div>
            <div class="col-75">
                <input type="text" id="nome_usuario" name="nome_usuario" placeholder="Nome" value="<?= $usuario->nome_usuario ?>" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="email">E-mail</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" placeholder="E-Mail" value="<?= $usuario->email ?>" required>
            </div>
        </div>
        <div class="form-item" style="align-self: flex-end;">
            <button type="submit" class="sucesso">Atualizar Usuário</button>
        </div>
    </form>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>
