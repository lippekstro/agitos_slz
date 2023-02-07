<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/local.php';

try {
    $id_local = $_GET['id_local'];
    $local = new Local($id_local);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<section class="container-form">
    <h1>Edição de Locais</h1>
    <form action="/agitos_slz/controllers/edita_local_controller.php" method="post">
        <input type="hidden" name="id_local" value="<?= $local->id_local ?>">
        <div class="form-item">
            <div class="col-25">
                <label for="nome">Nome do Local</label>
            </div>
            <div class="col-75">
                <input type="text" id="nome" name="nome" value="<?= $local->nome ?>" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="endereco">Endereço</label>
            </div>
            <div class="col-75">
                <input type="text" id="endereco" name="endereco" value="<?= $local->endereco ?>" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="coordenada">Coordenada</label>
            </div>
            <div class="col-75">
                <input type="text" id="coordenada" name="coordenada" value="<?= $local->coordenada ?>">
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="categoria">Categoria</label>
            </div>
            <select id="categoria" name="categoria" class="col-75">
                <option value="fazer" <?= ($local->categoria == 'fazer')? 'selected':''; ?>>O que fazer</option>
                <option value="ficar" <?= ($local->categoria == 'ficar')? 'selected':''; ?>>Onde ficar</option>
                <option value="comer" <?= ($local->categoria == 'comer')? 'selected':''; ?>>Onde comer</option>
            </select>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="tipo">Tipo</label>
            </div>
            <select id="tipo" name="tipo" class="col-75">
                <option value="praia" <?= ($local->tipo == 'praia')? 'selected':''; ?>>Praia</option>
                <option value="museu" <?= ($local->tipo == 'museu')? 'selected':''; ?>>Museu</option>
                <option value="praca" <?= ($local->tipo == 'praca')? 'selected':''; ?>>Praça</option>
                <option value="parque" <?= ($local->tipo == 'parque')? 'selected':''; ?>>Parque</option>
                <option value="centro historico" <?= ($local->tipo == 'centro historico')? 'selected':''; ?>>Centro Histórico</option>
                <option value="igreja" <?= ($local->tipo == 'igreja')? 'selected':''; ?>>Igreja</option>
                <option value="artesanato" <?= ($local->tipo == 'artesanato')? 'selected':''; ?>>Artesanato</option>
                <option value="shopping" <?= ($local->tipo == 'shopping')? 'selected':''; ?>>Shopping</option>
                <option value="pontos turisticos" <?= ($local->tipo == 'pontos turisticos')? 'selected':''; ?>>Ponto Turístico</option>
                <option value="teatro" <?= ($local->tipo == 'teatro')? 'selected':''; ?>>Teatro</option>
                <option value="hotel" <?= ($local->tipo == 'hotel')? 'selected':''; ?>>Hotel</option>
                <option value="pousada" <?= ($local->tipo == 'pousada')? 'selected':''; ?>>Pousada</option>
                <option value="hostel" <?= ($local->tipo == 'hostel')? 'selected':''; ?>>Hostel</option>
                <option value="restaurante" <?= ($local->tipo == 'restaurante')? 'selected':''; ?>>Restaurante</option>
                <option value="bar" <?= ($local->tipo == 'bar')? 'selected':''; ?>>Bar</option>
                <option value="cafe" <?= ($local->tipo == 'cafe')? 'selected':''; ?>>Café</option>
            </select>
        </div>
        <div class="form-item" style="align-self: flex-end;">
            <button type="submit" class="sucesso">Atualizar Local</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>