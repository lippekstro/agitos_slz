<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/evento.php';

try {
    $lista = Evento::listar();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<?php if (count($lista) > 0) : ?>
<section>
    <div class="slideshow-container">
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="mySlides efeito">
                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($lista[$i]['imagem_evento']); ?>" width="100%">
            </div>
        <?php endfor; ?>
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
        <div id="titulo-evento">
            <h5> SE LIGA NA AGENDA CULTURAL DA ILHA DO AMOR</h5>
        </div>

        <div class="conteinerespecialidades">
            <?php foreach ($lista as $evento) : ?>
                <div class="esp">
                    <a href="/agitos_slz/views/evento_exibe.php?id_evento=<?= $evento['id_evento'] ?>">
                        <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($evento['imagem_evento']); ?>" alt="">
                        <p>
                            <?= $evento['nome_evento'] ?> / <?= $date->format(new DateTime($evento['data_evento'])) ?>
                        </p>
                    </a>
                </div>
            <?php endforeach; ?>
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
                <?php foreach ($lista as $evento) : ?>
                    <div class="esp">
                        <a href="/agitos_slz/views/evento_exibe.php?id_evento=<?= $evento['id_evento'] ?>">
                            <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($evento['imagem_evento']); ?>" alt="">
                            <p>
                                <?= $evento['nome_evento'] ?> / <?= $date->format(new DateTime($evento['data_evento'])) ?>
                            </p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php else : ?>
    <section>
        Ainda não há eventos cadastrados
    </section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>