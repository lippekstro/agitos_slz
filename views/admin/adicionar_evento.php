<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
?>

<div class="container-form">
    <h1>Cadastro de Eventos</h1>
    <form action="/agitos_slz/controllers/adiciona_evento_controller.php" method="post" enctype="multipart/form-data">
        <div class="form-item">
            <div class="col-25">
                <label for="nome_evento">Nome do Evento</label>
            </div>
            <div class="col-75">
                <input type="text" id="nome_evento" name="nome_evento" placeholder="Nome do Evento" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="local_evento">Local do Evento</label>
            </div>
            <div class="col-75">
                <input type="text" id="local_evento" name="local_evento" placeholder="Local do Evento" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="hora">Hora</label>
            </div>
            <div class="col-75">
                <input type="time" id="hora" name="hora">
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="data_evento">Data</label>
            </div>
            <div class="col-75">
                <input type="date" id="data_evento" name="data_evento" required>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="descricao_evento">Descrição do Evento</label>
            </div>
            <div class="col-75">
                <textarea id="descricao_evento" name="descricao_evento" placeholder="Descreva o evento..." style="height:200px"></textarea>
            </div>
        </div>
        <div class="form-item">
            <div class="col-25">
                <label for="imagem_evento">Imagem</label>
            </div>
            <div class="col-75">
                <input type="file" id="imagem_evento" name="imagem_evento">
            </div>
        </div>
        <div class="form-item" style="align-self: flex-end;">
            <button type="submit" class="sucesso">Postar</button>
        </div>
    </form>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>