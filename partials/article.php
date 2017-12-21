		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->



			<!-- post details -->
                        <div class="post-details top">
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'amalthea-ventures' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'amalthea-ventures' ), __( '1 Comment', 'amalthea-ventures' ), __( '% Comments', 'amalthea-ventures' )); ?></span>
                        </div>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>
                        <div class="post-details bottom">
			<?php the_tags( __( 'Tags: ', 'amalthea-ventures' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'amalthea-ventures' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'amalthea-ventures' ); the_author(); ?></p>
                        <?php wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'amalthea-ventures' ) . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	) );
                        
?></div>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->