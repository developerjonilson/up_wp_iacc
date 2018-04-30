<?php get_header(); ?>

        <div class="post-content container">
          <br>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="post">
  		    		<small><?php the_date(); ?> ás <?php the_time(); ?> por <?php the_author_posts_link(); ?></small>
                <br><br>

                    <h2 class="the_title">
                      <strong> <?php the_title(); ?> </strong>
                    </h2>
                    <br><br>
                    <div class="the_content">
                        <?php the_content(); ?>
                    </div>
            	</div>
            <?php endwhile; else : ?>
                <p>Nenhum resultado encontrado</p>
            <?php endif; ?>

          <br>
        </div>

<?php get_footer(); ?>
