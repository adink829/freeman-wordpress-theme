<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    

    <link href="<?php echo get_bloginfo( 'template_directory' );?>/theme.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <div class="body">
        <header class="header">
                    <a class="siteTitle" href="<?php echo get_bloginfo( 'wpurl' );?>">
                        <?php echo get_bloginfo( 'name' ); ?>
                    </a>
                    <?php get_sidebar(); ?> 
        </header>
<!-- close all pages with </div> and </body> -->