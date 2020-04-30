<?php get_header(); ?>

<?php 
    $query = new WP_Query( array( 'category_name' => 'video' ) )
    ?>
<div class='videos'>

<?php while($query->have_posts()) : $query->the_post(); ?>
 
<h3>
    <a href="<?php the_permalink() ?>" rel="bookmark">
    <?php the_content(); ?>
    <?php the_title(); ?>
    </a>
</h3>
<?php endwhile;
    wp_reset_postdata();
?>
</div>