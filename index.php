<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 m-0 p-0">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col">
                    <div class="banner">
                        <h1>Welcome to the Programmer Blog</h1>
                        <p>Discover the latest trends, tutorials, and insights for programmers.</p>
                        <a href="#" class="btn btn-primary btn-lg btn-banner">Get Started</a>
                    </div>
                </div>
                <main id="main" class="site-main" role="main">
                    <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', get_post_format());
                    endwhile;
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
                </main>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>