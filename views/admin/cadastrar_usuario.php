<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
?>

<div class="container-form">
    <h1>Cadastro de Usuario</h1>
    <form action="/agitos_slz/controllers/adiciona_usuario_controller.php" method="post">
        <div class="form-item">
            <div class="col-25">
                <label for="nome_usuario">Nome</label>
            </div>
            <div class="col-75">
                <input type="text" id="nome_usuario" name="nome_usuario" placeholder="Nome" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="email">E-mail</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" placeholder="E-Mail" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="senha">Senha</label>
            </div>
            <div class="col-75">
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
            </div>
        </div>
        <div class="form-item" style="align-self: flex-end;">
            <button type="submit" class="sucesso">Cadastrar</button>
        </div>
    </form>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>