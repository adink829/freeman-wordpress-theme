<?php get_header(); ?> 
    <div class="category-body">
        <div class="header-background"> </div>
            <div class="voice-content" role="main">
                <h1 class="voice-page-title">Voice</h1>
                <div class="voice-posts">
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="voice-entry">
                            <?php the_content(); ?>
                            <?php the_title(); ?>
                        </div> 
                    <?php endwhile; 
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
    </div>

</div>
</body>
