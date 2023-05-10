<div class="post-list" id="post-<?php the_ID(); ?>">
    <h2><?php the_title(); ?></h2>
    <div class="post-meta">
        <span class="publish-date"><?php the_date(); ?></span>
        <span class="author">By <?php the_author(); ?></span>
        <span class="reading-time"><?php echo estimate_reading_time(get_the_content()); ?></span>
    </div>
    <div class="post-content">
        <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
</div>