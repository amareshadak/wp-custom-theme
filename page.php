<?php while (have_posts()) : the_post(); ?>
<div class="page-content">
    <?php the_content(); ?>
</div>
<?php endwhile; ?>