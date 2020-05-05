    <?php get_header(); ?> 
    <?php if ( have_posts() ) : ?>
        <main class="page-content">
        <?php while ( have_posts() ) : the_post(); ?>
            <h2 class="page-header">
                <?php the_title(); ?>
            </h2>
    
            <div class="page-description">
                <?php the_content(); ?>
            </div>
        
        <?php endwhile;         
        else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        </main>
</div>
</body>