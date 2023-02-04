<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
?>

<section>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../img/eventos slz.jpg" width="100%">
        </div>

        <div class="mySlides fade">
            <img src="../img/praia e slz.jpg" width="100%">
        </div>

        <div class="mySlides fade">
            <img src="../img/eventos slz.jpg" width="100%">
        </div>

        <div class="mySlides fade">
            <img src="../img/palacio.jpg" width="100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
</section>

<section class="corpo">
    <div class="especialidades">
        <div id="titulo">
            <h5> SE LIGA NA AGENDA CULTURAL DA ILHA DO AMOR</h5>
        </div>

        <div class="conteinerespecialidades">
            <div class="esp">
                <a href="">
                    <img src="../img/reggae.jpg" alt="Reggae">
                    <p>Shows</p>
                </a>
            </div>
            <div class="esp">
                <a href="">
                    <img src="../img/museus.jpg" alt="Museus">
                    <p>Museus</p>
                </a>
            </div>
            <div class="esp">
                <a href="">
                    <img src="../img/restaurantes.jpg" alt="Casa do Maranhão">
                    <p>Restaurantes</p>
                </a>
            </div>
            <div class="esp">
                <a href="">
                    <img src="../img/praia e slz.jpg" alt="Praias">
                    <p>Praias</p>
                </a>
            </div>
            <div class="esp">
                <a href="">
                    <img src="../img/festa da juçara.jpg" alt="festa da juçara">
                    <p>Festa da Juçara</p>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>