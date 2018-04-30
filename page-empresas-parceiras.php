<?php
// template name: Empresas Parceiras
get_header();

  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container custom-container">

        <br>

        <h3 class="text-center"><strong> <?php the_title(); ?> </strong></h3>

        <br>

        <p>
            <?php the_content(); ?>
        </p>
        <br>

        <div class="row">

        <?php

        $post = 'parceiro';
        $ppp = -1;
        $loop = new WP_Query( array( 'post_type' => $post, 'posts_per_page' => $ppp ) );

        if( $loop->have_posts() ){
            while( $loop->have_posts() ) {
                $loop->the_post();
                ?>
                <div class="col-md-3">
                  <div class="partner partner-image text-center">
                    <?php
                      the_post_thumbnail(get_the_ID(), 'medium', '');
                     ?>
                  </div>
                </div>
            <?php }
          } ?>

      </div>

      <br><br>

    </div>
  <?php endwhile; else : ?>
    <p>Nenhum resultado encontrado</p>
  <?php endif; ?>

<?php get_footer(); ?>
