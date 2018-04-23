<section class="section-about" id="about">
  <div class="image-background">

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6"></div>

        <?php
        $page = 'sobre-nos';
        $loop = new WP_Query( array( 'pagename' => $page) );

        if( $loop->have_posts() ){
            while( $loop->have_posts() ) {
                $loop->the_post();

                $qs = get_field('quem_somos');
                $hist = get_field('nossa_historia');
                $diret = get_field('diretoria_executiva');
            } ?>

            <div class="col-12 col-md-6 content-about">
              <div class="about-title">
                <h2 class="font-bold">SOBRE A IACC</h2>
              </div>

              <br>

              <div class="slide-show-about">
                <div class="slide-about">
                  <h5 class="font-bold text-center">Quem somos</h5>
                  <br>
                  <?php echo $qs ?>
                </div>

                <div class="slide-about">
                  <h5 class="font-bold text-center">Nossa história</h5>
                  <br>
                  <?php echo $hist ?>
                </div>

                <div class="slide-about">
                  <h5 class="font-bold text-center">Diretoria Executiva</h5>
                  <br>
                  <?php echo $diret ?>
                </div>
        <?php } ?>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
