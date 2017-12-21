<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section class="wrapper">
        <div class="content">
            <h1><?php _e('Tag Archive: ', 'amalthea-ventures');
echo single_tag_title('', false); ?></h1>

            <?php get_template_part('partials/article','loop');?>

        <?php get_template_part('pagination'); ?>
        </div>
<?php get_sidebar(); ?>
    </section>
    <!-- /section -->
</main>



<?php get_footer(); ?>
