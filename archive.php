<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section class="wrapper">
        <div class="content">
            <h1><?php _e('Archives', 'amalthea-ventures'); ?></h1>

            <?php get_template_part('partials/article','loop');?>

            <?php get_template_part('pagination'); ?>
        </div>
        <?php get_sidebar(); ?>
    </section>
    <!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
