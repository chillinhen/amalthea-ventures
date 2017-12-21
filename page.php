<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper">

                    <div class="content">
			                    			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php get_template_part('partials/article');?>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'amalthea-ventures' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
                    </div>
                    <?php get_sidebar(); ?>
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
