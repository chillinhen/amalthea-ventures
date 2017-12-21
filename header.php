<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php
        if (!function_exists('_wp_render_title_tag')) :

            function theme_slug_render_title() {
                ?>
                <title><?php wp_title('|', true, 'right'); ?></title>
                <?php
            }

            add_action('wp_head', 'theme_slug_render_title');
        endif;
        ?>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>
        <script>
            // conditionizr.com
            // configure environment tests
            conditionizr.config({
                assets: '<?php echo get_template_directory_uri(); ?>',
                tests: {}
            });
        </script>

    </head>
    <body <?php body_class(); ?>>
        <?php if (!(is_page_template('template-maintenance.php'))) : ?>
            <header class="header clear" role="banner">

                <div class="wrapper">
                    <!-- logo -->
                    <h1 class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                            <?php if (has_custom_logo()) : ?>

                                <?php the_custom_logo(); ?>

                            <?php else : ?>

                                <?php bloginfo('name'); ?>
                                <!-- code for site title and description when there's no image -->
                            <?php endif; ?>
                            <span><?php bloginfo('description'); ?></span>
                        </a>
                    </h1>

                    <!-- /logo --> 
                </div>
            </header>
           

            <!-- header -->


            <!-- nav -->
            <nav class="nav" role="navigation">
    <?php html5blank_nav(); ?>
            </nav>
            <!-- /nav -->
             <?php
            if (is_singular() && has_post_thumbnail()) :
                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-image-cover');
                $post_image = $thumb['0'];
                ?>

                <div class="header-image bg-image" style="background-image: url(<?php echo esc_url($post_image); ?>)"> </div>

            <?php
            else :

                $header_image = get_header_image() ? get_header_image() : get_template_directory_uri() . '/img/header/default-header.jpg';
                ?>

                <div class="header-image bg-image" style="background-image: url( <?php echo $header_image ?> );"> </div>

    <?php endif; ?>

<?php endif; ?>
        <!-- /header -->
