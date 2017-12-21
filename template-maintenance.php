<?php /* Template Name: Coming Soon/Maintenance Template */ get_header('maintenance'); ?>

<main role="main">
    <!-- section -->

    <section>
        <?php if (!(is_page_template('template-maintenance.php'))) : ?>    
            <h2><?php the_title(); ?></h2>
        <?php endif; ?>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (is_page_template('template-maintenance.php')) : ?>
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
                    <?php endif; ?>
                    <?php the_content(); ?>

                </article>
                <!-- /article -->

            <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e('Sorry, nothing to display.', 'amalthea-ventures'); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>
