<section class="section-slide">
  <div class="main-slide-show">

    <?php

    $post = 'slide';
    $ppp = -1;
    $loop = new WP_Query( array( 'post_type' => $post, 'posts_per_page' => $ppp ) );

    if( $loop->have_posts() ){
        while( $loop->have_posts() ) {
            $loop->the_post();

            ?>

            <div style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(), 'full', ''); ?>'); height: 500px; background-size:cover; background-position: center center;"></div>

        <?php }
      } ?>

  </div>
</section>
