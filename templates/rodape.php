</main>

<footer>
  <div class="container-rodape">
    <div id="logo-rodape">
      <img src="/agitos_slz/img/logo01.jpg" width="200rem" height="200rem">
    </div>

    <div class="coluna-rodape">
      <span><?= $date->format(new DateTime(date('d M'))) ?></span>
    </div>

    <div id="redes-sociais">
      <a href="https://www.instagram.com" target="_blank">
        <img src="/agitos_slz/img/instagram.png" alt="simbolo instagram" width="60px" height="10%">
      </a>
      <a href="https://www.twitter.com" target="_blank">
        <img src="/agitos_slz/img/twitter.png" alt="simbolo twitter" width="60px" height="10%">
      </a>
      <a href="https://www.facebook.com" target="_blank">
        <img src="/agitos_slz/img/facebook.png" alt="simbolo facebook" width="60px" height="10%">
      </a>
    </div>
  </div>

  <div id="direitos">
    <h4>Todos os diretos reservados &copy; <?= date('Y') ?> </h4>
  </div>
</footer>

<script src="/agitos_slz/js/script.js"></script>
<script src="/agitos_slz/js/accordion.js"></script>
<script src="/agitos_slz/js/ordenar_tabela.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>