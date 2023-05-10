<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 m-0 p-0">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-lg-9">
            <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
          ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            </article>
            <?php
        endwhile;
      else :
        echo '<p>No posts found.</p>';
      endif;
      ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>