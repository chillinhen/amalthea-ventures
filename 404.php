<?php get_header('maintenance'); ?>

	<main role="main">
		<!-- section -->
		<section>
			<!-- article -->
			<article id="post-404">
                            <h1 class="logo">
                           
                                
                                <?php if (has_custom_logo()) : ?>

                                    <?php the_custom_logo(); ?>

                                <?php else : ?>
                                <a href="<?php echo home_url(); ?>">
                                    <?php bloginfo('name'); ?>
                                    <!-- code for site title and description when there's no image -->
                                </a>
                                <?php endif; ?>
                            
                        </h1>
				<h2><?php _e( 'Page not found', 'amalthea-ventures' ); ?></h2>
				<p style="text-align:center;"><?php _e( 'This page is still under construction.', 'amalthea-ventures' ); ?><br/>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'amalthea-ventures' ); ?></a>
				</p>

			</article>
			<!-- /article -->
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
