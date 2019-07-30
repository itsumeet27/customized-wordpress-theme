<?php 
    get_header(); 
?>

<!-- Intro -->
<section class="view" style="margin-top: 6em;">
<?php 

    if(have_posts()){

        ?>

<h2 class="text-center text-success">Search Results for:<b> <?php echo get_search_query(); ?></b></h2>
<hr class="" style="border-width: 2px; width: 50px; border-style: groove; border-color: #ccc; border-radius: 50px; margin-bottom:2em">
<div class="row p-3">
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
                <a href='<?php the_permalink(); ?>'><h4 class="font-weight-bold black-text mb-3"><strong><?php the_title(); ?></strong></h4>

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
    
</div>
     


</section>
    <?php } else{ ?>
        <div class="container-fluid">
            <h2 class="text-center text-danger">No results found for: <b><?php echo get_search_query(); ?></b></h2>
            <div class="support-links">
                <h3 class="text-justify h3-responsive p-3">Read our blogs here: </h3>
                <div class="row p-3">
                    <?php

                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        );

                        $projects = new WP_Query($args);

                        while($projects -> have_posts()){
                            $projects -> the_post();
                        ?>
                        <div class="col-md-4 mb-md-0 mb-4 text-center">
                            <!-- Featured Image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>  

                            <!-- Post title -->
                            <a href='<?php the_permalink(); ?>'><h4 class="font-weight-bold black-text mb-3"><strong><?php the_title(); ?></strong></h4>

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
            </div>
        </div>
    <?php } ?>
<!-- Pagination -->
<?php mdb_pagination(); ?>
<!-- Intro -->

<?php get_footer(); ?>