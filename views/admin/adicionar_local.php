<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
?>

<section class="container-form">
    <h1>Cadastro de Imagens</h1>
    <form action="/agitos_slz/controllers/adiciona_local_controller.php" method="post">
        <div class="form-item">
            <div class="col-25">
                <label for="nome">Nome do Local</label>
            </div>
            <div class="col-75">
                <input type="text" id="nome" name="nome" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="endereco">Endereço</label>
            </div>
            <div class="col-75">
                <input type="text" id="endereco" name="endereco" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="coordenada">Coordenada</label>
            </div>
            <div class="col-75">
                <input type="text" id="coordenada" name="coordenada">
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="categoria">Categoria</label>
            </div>
            <select id="categoria" name="categoria" class="col-75">
                <option value="fazer" selected>O que fazer</option>
                <option value="ficar">Onde ficar</option>
                <option value="comer">Onde comer</option>
            </select>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="tipo">Tipo</label>
            </div>
            <select id="tipo" name="tipo" class="col-75">
                <option value="praia">Praia</option>
                <option value="museu">Museu</option>
                <option value="praca">Praça</option>
                <option value="parque">Parque</option>
                <option value="centro historico" selected>Centro Histórico</option>
                <option value="igreja">Igreja</option>
                <option value="artesanato">Artesanato</option>
                <option value="hotel">Hotel</option>
                <option value="pousada">Pousada</option>
                <option value="hostel">Hostel</option>
                <option value="restaurante">Restaurante</option>
                <option value="bar">Bar</option>
                <option value="cafe">Café</option>
            </select>
        </div>
        <div class="form-item" style="align-self: flex-end;">
            <button type="submit" class="sucesso">Cadastrar Local</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>