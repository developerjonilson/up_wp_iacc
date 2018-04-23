<section class="section-partners" id="partners">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5">
          <h2 class="font-bold name-partners">NOSSOS PARCEIROS</h2>
      </div>
      <div class="col-12 col-md-7">
        <div class="partners-slide">

          <?php

          $post = 'parceiro';
          $ppp = -1;
          $loop = new WP_Query( array( 'post_type' => $post, 'posts_per_page' => $ppp ) );

          if( $loop->have_posts() ){
              while( $loop->have_posts() ) {
                  $loop->the_post();

                  ?>
                  <div class="partner partner-image">
                    <?php
                      the_post_thumbnail(get_the_ID(), 'medium', '');
                     ?>
                  </div>

              <?php }
            } ?>

        </div>
      </div>
    </div>
  </div>
</section>
