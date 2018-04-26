<?php
// template name: Lista de Projetos
get_header();
 ?>

  <div class="container custom-container">
      <br>
      <h3 class="text-center"><strong> Projetos </strong></h3>
      <br><br>

      <?php
        $post_type = 'projeto';
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $loop = new WP_Query( array( 'post_type' => $post_type, 'paged' => $paged ) );
        $num = 1;

        if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="row">
            <div class="col-12 col-md-12">
              <?php if (($num % 2) == 1) {
                $class = 'flex-row';
                $classText = 'text-left pl-5';
              } else {
                $class = 'flex-row-reverse';
                // $classText = 'text-right pr-5';
                $classText = 'text-left pr-5';
              }
              ?>
                <div class="d-flex <?php echo $class; ?>">
                  <div class="image">
                    <div style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(), 'medium', ''); ?>'); background-size: cover; width: 200px; height: 200px;"></div>
                  </div>
                  <div class="content <?php echo $classText; ?>">
                    <h4 class="text-bold"> <strong><?= the_title(); ?></strong> </h4>
                    <p class="text-justify"> <?= the_content(); ?> </p>
                  </div>
                </div>


            </div>
          </div>
          <hr class="line-divide-projetos">
          <br>

  		<?php
        $num++;
      endwhile; else : ?>
  			<p>Nenhuma postagem encontrada!</p>
  		<?php endif; ?>
  		<?php wp_pagination($loop); ?>


      <br>
  </div>



<?php get_footer(); ?>
