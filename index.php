<?php 
    get_header(); 
?>

<!-- Intro -->

<section class="view">
    <div class="header-image" style="width:100%">
    <img src="<?php if(!is_front_page()){
            header_image();
        }?>" style="width:100%" />
    </div>
    <h2 class="text-center" style="text-transform: uppercase;margin-top:2em"><b>Blogs</b></h2>
    <hr class="" style="border-width: 2px; width: 50px; border-style: groove; border-color: #ccc; border-radius: 50px; margin-bottom:2em">
    <div class="row p-3">
        <div class="col-md-9 row">
            <?php

                while(have_posts()){
                    the_post();
                ?>
                <div class="col-md-6 mb-md-0 mb-4 text-center">
                    <!-- Featured Image -->
                    <div class="view overlay rounded z-depth-2 mb-4">
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                        <a href="<?php the_permalink(); ?>">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>  

                    <!-- Post title -->
                    <a href='<?php the_permalink(); ?>'><h4 class="font-weight-bold black-text mb-3"><strong><?php the_title(); ?></strong></h4></a>

                    <!-- Post data -->
                    <p>by <a class="font-weight-bold"><?php the_author(); ?></a></p>     
                    <p class="dark-grey-text"><?php echo wp_trim_words(get_the_excerpt(), 50); ?></p>

                    <!-- Read more button -->
                    <a class="btn btn-primary btn-md" style="border-radius: 50px" href="<?php the_permalink(); ?>">Read more</a>           
                </div>
            <?php 
                }
                wp_reset_query();
            ?>
        </div>
        <div class="col-md-3 mb-4" id="sidebar">
            <!--Sidebar-->
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
            <!--/.Sidebar-->
        </div>
    </div>
        
    </div>

    <?php mdb_pagination(); ?>

</section>
<!-- Intro -->

<?php get_footer(); ?>