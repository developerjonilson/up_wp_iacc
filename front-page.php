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
                    <center><!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                    <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html?iot=button" method="post">
                    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                    <input type="hidden" name="currency" value="BRL" />
                    <input type="hidden" name="receiverEmail" value="iacc1@hotmail.com" />
                    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/120x53-doar-azul.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                    </form>
                    <!-- FINAL FORMULARIO BOTAO PAGSEGURO --></center>

                    <!-- <a href="#"><h2 class="donaiton-title font-bold btn btn-donation btn-donate"> QUERO DOAR!</h2></a> -->
                  </div>

                  <div class="col-6 col-md-3 text-right text-bank-account">
                    <span class="d-flex justify-content-end font-bold">BANCO DO BRASIL</span>
                    <span class="d-flex justify-content-end"> Agência 1598-9</span>
                    <span class="d-flex justify-content-end">Conta 24863-0</span>
                  </div>

                  <div class="col-6 col-md-3 text-right text-bank-account">
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
      <?php get_template_part('templates/part-news'); ?>
    </section>

    <!-- slide about  -->
    <section id="sobre">
      <?php get_template_part('templates/slide-about'); ?>
    </section>

    <section class="section-gallery">
      <?php
        echo do_shortcode('[instagram-feed]');
       ?>
    </section>

    <section class="section-partners" id="partners">
      <?php get_template_part('templates/slide-partners'); ?>
    </section>

<?php get_footer(); ?>
