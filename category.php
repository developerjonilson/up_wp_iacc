<?php get_header(); ?>

<div class="container">

	<br>
	<h3 class="text-center"><strong> <?= single_cat_title(); ?> </strong></h3>
	<br><br>

	<div class="post-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<div class="d-flex flex-row">
					<div class="image image-category">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Link para <?php the_title_attribute(); ?>">
							<div style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(), 'medium', ''); ?>'); background-size: cover; width: 200px; height: 200px;"></div>
						</a>
					</div>
					<div class="content text-left pl-4 text-category">
						<h4 class="text-bold"> <strong> <a href="<?= the_permalink(); ?>"> <?= the_title(); ?> </a> </strong> </h4>
						<small><?= get_the_date(); ?> ás <?= get_the_time(); ?> por <?php the_author_posts_link(); ?></small>
						<p class="text-justify"> <?= the_excerpt(); ?> </p>
					</div>
				</div>
				<hr>
				<br>
			</div>

		<?php endwhile; else : ?>
			<p>Nenhum resultado encontrado</p>
		<?php endif; ?>
		<?php wp_pagination(); ?>
	</div>
	<br>


</div>
<?php get_footer(); ?>
