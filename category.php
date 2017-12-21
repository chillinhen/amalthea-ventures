<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper">
                        <div class="content">
			<h1><?php _e( 'Categories for ', 'amalthea-ventures' ); single_cat_title(); ?></h1>

			<?php get_template_part('partials/article','loop');?>

			<?php get_template_part('pagination'); ?>
                        </div>
                    <?php get_sidebar(); ?>
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
