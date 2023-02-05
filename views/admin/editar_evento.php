<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/evento.php';

try {
    $id_evento = $_GET['id_evento'];
    $evento = new Evento($id_evento);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<div class="container-form">
    <h1>Atualização de Eventos</h1>
    <form action="/agitos_slz/controllers/edita_evento_controller.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id_evento" name="id_evento" value="<?= $evento->id_evento ?>">
        <div class="form-item">
            <div class="col-25">
                <label for="nome_evento">Nome do Evento</label>
            </div>
            <div class="col-75">
                <input type="text" id="nome_evento" name="nome_evento" placeholder="Nome do Evento" value="<?= $evento->nome_evento ?>" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="local_evento">Local do Evento</label>
            </div>
            <div class="col-75">
                <input type="text" id="local_evento" name="local_evento" placeholder="Local do Evento" value="<?= $evento->local_evento ?>" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="hora">Hora</label>
            </div>
            <div class="col-75">
                <input type="time" id="hora" name="hora" value="<?= $evento->hora ?>">
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="data_evento">Data</label>
            </div>
            <div class="col-75">
                <input type="date" id="data_evento" name="data_evento" value="<?= $evento->data_evento ?>" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="descricao_evento">Descrição do Evento</label>
            </div>
            <div class="col-75">
                <textarea id="descricao_evento" name="descricao_evento" placeholder="Descreva o evento..." style="height:200px">
                <?= $evento->descricao_evento ?>
                </textarea>
            </div>
        </div>
        <div class="form-item" style="align-self: flex-end;">
            <button type="submit" class="sucesso">Atualizar</button>
        </div>
    </form>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>