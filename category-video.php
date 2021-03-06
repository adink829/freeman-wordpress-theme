<?php get_header(); ?> 
<div class="category-body">
<div class="header-background"> </div>
    <div class="video-content" role="main">
        <?php 
        $column1Counter = 0;
        $column2Counter = 0;
        if ( have_posts() ) : ?>
            <div class="video-columns">
                    <div class="video-column-1">
                        <?php while(have_posts()) : the_post();
                            $column1Counter++;
                            if ($column1Counter % 2 == 0) {
                                continue;
                            }
                            ?>
                                <div class="video-entry">
                                    <?php the_content(); ?>
                                </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="video-column-2">
                        <h1 class="video-page-title">Video</h1>
                            <?php while(have_posts()) : the_post();
                                    $column2Counter++;
                                    if ($column2Counter % 2 != 0) {
                                        continue;
                                    }
                                    ?>
                                        <div class="video-entry">
                                            <?php the_content(); ?>
                                        </div>
                                <?php 
                             endwhile; ?>
                    </div>
            </div>
                        
            <?php else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            </div>
        </div>
        <?php endif; ?>
    </div> 
</div>

</div>
</body>

