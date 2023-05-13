<?php get_header(); ?>
<main class="container-fluid">
    <div class="row">
        <div class="col-md-2-1qtr  m-0 p-0 bg-main">
            <?php get_sidebar(); ?>
        </div>
        <!-- Main Content -->
        <div class="col-md-9-3qtr p-0 m-0">
            <div class="row shadow-sm">
                <div class="col">
                    <section class="about-me-section p-3 bg-light">
                        <div class="container">
                            <div class="row">

                                <div class="col p-3">
                                    <h2 class="name font-weight-bold mb-1">Simon Doe</h2>
                                    <div class="tagline mb-3">Senior Software Engineer</div>
                                    <div class="bio mb-4">I'm a software engineer specialised in frontend and
                                        backend
                                        development for complex scalable web apps. I write about software
                                        development on <a class="text-link" href="blog-home.html">my blog</a>. Want
                                        to know how I may help
                                        your project? Check out my project <a class="text-link"
                                            href="projects.html">portfolio</a> and <a class="text-link"
                                            href="resume.html">online resume</a>.
                                    </div>
                                    <!--//bio-->

                                </div>
                                <!--//col-->

                                <div class="col-md-3">
                                    <img class=""
                                        src="https://themes.3rdwavemedia.com/devcard/bs5/1.0/assets/images/profile.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row mt-4">

                <div class="col-md-9">
                    <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/content', get_post_format());
                    endwhile;
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>

                </div>
                <div class="col-md-3">
                    <div class="custom-widget-holder">
                        <?php if ( is_active_sidebar( 'custom-widget-holder' ) ) : ?>
                        <?php dynamic_sidebar( 'custom-widget-holder' ); ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>


<?php get_footer(); ?>