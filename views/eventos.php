<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
?>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img class="imgcarrocel" src="../img/eventos slz.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img class="imgcarrocel" src="../img/praia e slz.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img class="imgcarrocel" src="../img/eventos slz.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img class="imgcarrocel" src="../img/palacio.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="corpo">
    <div class="especialidades">
        <div id="titulo">
            <h5> SE LIGA NA AGENDA CULTURAL DA ILHA DO AMOR</h5>
        </div>

        <div class="conteinerespecialidades">
            <div><img src="../img/reggae.jfif" class="especialidadesimg" alt="Reggae"> <br> Shows</div>
            <div><img src="../img/museus.jpg" class="especialidadesimg" alt="Museus"><br> Museus</div>
            <div><img src="../img/restaurantes.jpg" class="especialidadesimg" alt="Casa do Maranhão"><br> Restaurantes</div>
            <div><img src="../img/praia e slz.jpg" class="especialidadesimg" alt="Praias"><br> Praias</div>
        </div>

        <div class="conteinerespecialidades">
            <div><img src="../img/reviver.jpg" class="especialidadesimg"><br> Pontos Turisticos</div>
            <div><img src="../img/são joao.jfif" class="especialidadesimg"><br> São João do MA</div>
            <div><img src="../img/festa da juçara.jfif" class="especialidadesimg"><br> Festa da Juçara</div>
            <div><img src="../img/WhatsApp Image 2022-10-13 at 10.08.37 (4).jpeg" class="especialidadesimg"><br> Reggae</div>
        </div>
    </div>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>