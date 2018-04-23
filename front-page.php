<?php get_header(); ?>

<!-- slide show  -->
<?php get_template_part('templates/slide-main'); ?>

    <!-- Doacoes -->
    <section class="section-donation-bar text-center" id="como-doar">
      <div class="wellow-background">

        <div class="container donation-content">
          <div class="col-12 col-md-12">

            <div class="row">
              <div class="col-12 col-md-4">
                <div class="image-toy">
                  <img src="<?= DIR; ?>/assets/img/slider4-3-img1.png" alt="Brinquedo" class="img-toy">
                </div>
              </div>
              <div class="col-12 col-md-8">
                <div class="row d-flex align-items-center">

                  <div class="col-12 col-md-6">
                    <a href="#"><h2 class="donaiton-title font-bold btn btn-donation btn-donate"> QUERO DOAR!</h2></a>
                  </div>

                  <div class="col-12 col-md-3 text-right">
                    <span class="d-flex justify-content-end font-bold">BANCO DO BRASIL</span>
                    <span class="d-flex justify-content-end"> Agência 1598-9</span>
                    <span class="d-flex justify-content-end">Conta 24863-0</span>
                  </div>

                  <div class="col-12 col-md-3 text-right">
                    <span class="d-flex justify-content-end font-bold">CAIXA ECONÔMICA</span>
                    <span class="d-flex justify-content-end">Agência 0032</span>
                    <span class="d-flex justify-content-end">Conta 35.024-5</span>
                    <span class="d-flex justify-content-end">Operação 013</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </di>
      </div>
    </section>

    <!-- noticias  -->
    <section class="section-news" id="news">
      <div class="news-background" style="background-image: url('<?= DIR; ?>/assets/img/bottom-site.png');">
        <div class="container">
          <div class="news-margin">
            <div class="row">
              <div class="col-12 col-md-4 news-space">
                <img class="img-fluid image-new" src="<?= DIR; ?>/assets/img/noticias.png" alt="Noticias">
                <span class="title-news">Festinha bimestral de aniversariantes</span>
                <div class="font-bold">
                  <span class="date-news">
                    27 DE FEVEREIRO DE 2017
                  </span>
                </div>
                <div class="font">
                  <span class="previous-news">
                      Na semana passada, O IACC realizou a primeira festinha de aniversariantes de 2017.
                      Este ano, as festinha terão uma novidade! Além do aniversário das crianças serão
                      comemorados também os aniversários das mães.
                  </span>
                </div>
              </div>
              <div class="col-12 col-md-4 news-space">
                <img class="img-fluid image-new" src="<?= DIR; ?>/assets/img/noticias.png" alt="Noticias">
                <span class="title-news">Lançamento da Campanha Setembro Dourado</span>
                <div class="font-bold">
                  <span class="date-news">
                    06 DE SETEMBRO DE 2016
                  </span>
                </div>
                <div class="font">
                  <span class="previous-news">
                      A campanha que tem foco no diagnóstico precoce, teve sua abertura com um evento
                      voltado para o esclarecimento acerca da campanha para as famílias das crianças
                      assistidas e para os voluntários do IACC. Confira agora tudo que aconteceu na
                      abertura do setembro dourado do IACC.
                  </span>
                </div>
              </div>
              <div class="col-12 col-md-4 news-space">
                <img class="img-fluid image-new" src="<?= DIR; ?>/assets/img/noticias.png" alt="Noticias">
                <span class="title-news">
                  Suspendisse sodales sed nequen non lacinia. Fusce non congue
                </span>
                <div class="font-bold">
                  <span class="date-news">
                    28 DE JANEIRO DE 2018
                  </span>
                </div>
                <div class="font">
                  <span class="previous-news">
                    Ut feugiat, nisl sit amet pulvinar gravida, arcu magna
                    vestibulum tortor, gravida ultrices urna orci sit amet turpis.
                    Nulla molestie, mauris et varius fermentum, [...]
                  </span>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="btnMore">
          <a href="#lermais" class="font-bold text-center">+ Notícias</a>
        </div>

      </div>
    </section>

    <!-- slide about  -->
    <section id="sobre">
      <?php get_template_part('templates/slide-about'); ?>
    </section>

    <section class="section-gallery">
      <?php
        echo do_shortcode('[instagram-feed]');
       ?>
      <!-- <div class="btn-our-gallery d-flex align-items-center justify-content-center">
        <div class="align-text-btn-gallery">
          <img src="/assets/img/camera.png" alt="Ícone Instagram">
          <div class="text-gallery">Nossa Galeria</div>
          <a href="#"></a>
        </div>
      </div> -->
    </section>

    <!-- slide show  -->
    <?php get_template_part('templates/slide-partners'); ?>

<?php get_footer(); ?>
