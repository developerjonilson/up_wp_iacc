<?php
// template name: Sobre
get_header();
 ?>

  <div class="container custom-container">
      <br>

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

          <div class="col-12 col-md-12">
            <!-- <h2 class="font-bold">Sobre Nós</h2> -->
            <h3 class="text-center"><strong> <?php the_title(); ?> </strong></h3>

            <br>

            <div class="">
              <div class="">
                <h5 class="font-bold">Quem somos</h5>
                <br>
                <?php echo $qs ?>
              </div>

              <br>
              <hr>
              <br>

              <div class="">
                <h5 class="font-bold">Nossa história</h5>
                <br>
                <?php echo $hist ?>
              </div>

              <br>
              <hr>
              <br>

              <div class="">
                <h5 class="font-bold">Diretoria Executiva</h5>
                <br>
                <?php echo $diret ?>
              </div>

              <br>
              <br>
              
            </div>
          </div>

      <?php } ?>

      <br>
  </div>



<?php get_footer(); ?>
