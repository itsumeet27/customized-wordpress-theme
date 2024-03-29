<?php 
    get_header(); 
?>



<!-- Intro -->
<section class="view">
<?php if(has_post_thumbnail()){ ?>
    <div class="about">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" style="width: 100%"/>
        <div class="title">
            <h2 class="text-center p-2" style="text-transform: uppercase;margin-top:2em"><b><?php the_title(); ?></b></h2>
            <hr class="" style="border-width: 2px; width: 50px; border-style: groove; border-color: #ccc; border-radius: 50px; margin-bottom:2em">
        </div>
    </div>
<?php } ?>
<div class="row p-3">
        <?php

            $args = array(
                'post_type' => 'projects',
                'posts_per_page' => 10
            );

            $projects = new WP_Query($args);

            while($projects -> have_posts()){
                $projects -> the_post();
            ?>
            <div class="col-md-6 mb-4 text-center">
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

<?php mdb_pagination(); ?>

</section>
<!-- Intro -->

<?php get_footer(); ?>