<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';

if(isset($_SESSION['usuario'])){
    header('location: /agitos_slz/index.php');
}

?>

<div class="container-login">
    <section class="section-form">
        <form action="/agitos_slz/controllers/login_controller.php" method="post">
            <div class="form-item">
                <label for="email">
                    <span class="material-symbols-outlined">email</span>
                </label>
                <input type="email" name="email" id="email" placeholder="E-Mail">
            </div>

            <div class="form-item">
                <label for="senha">
                    <span class="material-symbols-outlined">password</span>
                </label>
                <input type="password" name="senha" id="senha" placeholder="Senha">
            </div>

            <div class="form-item">
                <button type="submit" class="sucesso">Login</button>
            </div>
        </form>
    </section>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>