<div class="container blog-container  mt-2 post-list" id="post-<?php the_ID(); ?>">
    <div class="row">
        <div class="col-sm-3 p-0 m-0 d-flex my-auto justify-content-center">
            <img class="blog-image"
                src="https://themes.3rdwavemedia.com/demo/bs5/devblog/assets/images/blog/blog-post-thumb-2.jpg"
                alt="blog images" />
        </div>
        <div class="col-sm-8 offset-sm-1 p-0">
            <h5 class="blog-title">
                <?php the_title(); ?>
            </h5>
            <div class="blog-badge">
                <span class="badge bg-primary"><i class="fas fa-user"></i> <?php the_author(); ?></span>
                <span class="badge bg-main"><i class="fas fa-calendar-alt"> </i><?php the_date(); ?></span>
                <span class="badge bg-success"><i class="fas fa-clock"></i>
                    <?php echo estimate_reading_time(get_the_content()); ?></span>
            </div>
            <p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-link blog-read-more"><strong> Read More </strong><i
                        class="fas fa-arrow-right"></i></a>
            </p>
        </div>
    </div>
</div>