<div class="news-background" style="background-image: url('<?= DIR; ?>/assets/img/bottom-site.png');">
  <div class="container">
    <div class="news-margin">
      <div class="row">

          <?php
            $cat = 'Notícias';
            $catID = (int) get_cat_ID($cat);
            $ppp = 3;
            $loop = new WP_Query( array( 'cat' => $catID, 'posts_per_page' => $ppp) );

            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>


              <div class="col-12 col-md-4 news-space news-link">
                <div class="img-fluid image-new">
                  <a href="<?= the_permalink(); ?>">
                    <div style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(), 'medium', ''); ?>'); background-size: cover; width: 348px; height: 190px;"></div>
                  </a>
                </div>

                <span class="title-news">
                  <?php the_title(); ?>
                </span>

                <div class="font-bold">
                  <span class="date-news">
                    <?= get_the_date(); ?>
                  </span>
                </div>

                <div class="font">
                  <span class="previous-news">
                    <?= the_excerpt(); ?>
                  </span>
                </div>

                <a class="all" href="<?= the_permalink(); ?>"></a>
              </div>

      		<?php endwhile; else : ?>
      			<p>Nenhuma Notícia encontrada!</p>
      		<?php endif; ?>

      </div>
    </div>
  </div>

  <?php
      // Get the ID of a given category
      $category_id = get_cat_ID( 'Notícias' );

      // Get the URL of this category
      $category_link = get_category_link( $category_id );
  ?>

  <div class="btnMore">
    <a href="<?php echo esc_url( $category_link ); ?>" class="font-bold text-center">+ Notícias</a>
  </div>

</div>
