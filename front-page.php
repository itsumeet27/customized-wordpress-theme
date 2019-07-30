<?php 
    get_header(); 
?>


<!-- Intro -->
<section class="view">

<div class="header-image" style="width:100%">
<img src="<?php if(is_front_page()){
        header_image();
    }?>" style="width:100%" />
</div>

<h2 class="text-center p-2" style="text-transform: uppercase;margin-top:2em"><b>Our Blogs</b></h2>
<hr class="" style="border-width: 2px; width: 50px; border-style: groove; border-color: #ccc; border-radius: 50px; margin-bottom:2em">
<div class="row p-3">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );

            $blogposts = new WP_Query($args);

            while($blogposts -> have_posts()){
                $blogposts -> the_post();
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

<h2 class="text-center" style="text-transform: uppercase"><b>Our Projects</b></h2>
<hr class="" style="border-width: 2px; width: 50px; border-style: groove; border-color: #ccc; border-radius: 50px; margin-bottom:2em">
<div class="row p-3">
        <?php
            $args = array(
                'post_type' => 'projects',
                'posts_per_page' => 2
            );

            $projects = new WP_Query($args);

            while($projects -> have_posts()){
                $projects -> the_post();
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


</section>
<!-- Intro -->

<?php get_footer(); ?>