<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper">
                        <div class="content">
			<h1><?php echo sprintf( __( '%s Search Results for ', 'amalthea-ventures' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('partials/article','loop');?>

			<?php get_template_part('pagination'); ?>
                        </div>
                    <?php get_sidebar(); ?>
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
