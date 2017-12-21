<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper">
                        <div class="content">
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

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
