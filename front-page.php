<?php get_header(); ?>

    <div class="main-container container">

        <div class="row span12">
            <div class="col-md-2 box">
                News and Happenings - If you missed tryouts, but are interested in playing for Team Central in the fall/summer, contact tclaxnet@gmail.com Please register here.  
            </div>
            <div class="col-md-8 box">
                News and Happenings - If you missed tryouts, but are interested in playing for Team Central in the fall/summer, contact tclaxnet@gmail.com Please register here.  
            </div>
        </div>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="row">
                    <div class="span12">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php bloginfo('template_directory') ?>/img/slider1.png" alt="...">
                                <div class="carousel-caption">
                                    <h3>Caption Text</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1200x315" alt="...">
                                <div class="carousel-caption">
                                    <h3>Caption Text</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1200x315" alt="...">
                                <div class="carousel-caption">
                                    <h3>Caption Text</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div> <!-- Carousel -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>