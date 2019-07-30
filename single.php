<?php 
    get_header(); 
?>



<style type="text/css">
    
  

</style>

<?php
    while(have_posts()){
        the_post();
    ?>
    <section class="view">

    <div class="row">

    <div class="col-md-5">

        <div class="d-flex flex-column justify-content-center align-items-center h-100">
        <h4 class="heading display-4 p-3 text-center"><?php the_title() ?></h4>
        <h5 class="subheading font-weight-bold text-left">Posted by: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> on <?php echo get_the_date(); ?></h5>
        </div>

    </div>

    <div class="col-md-7">

        <div class="view zoom">
            <?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid z-depth-0-half mb-4')); ?> 
        <div class="mask flex-center hm-gradient">
        </div>
        </div>

    </div>

    </div>

    <div class="row">
        <div class="col-md-8 mb-4" id="content">
            <!-- Breadcrumbs -->
                <?php
                    $categories = get_the_category();
                    $first_category_name = $categories[0]->cat_name;
                    $first_category_id = get_cat_ID( $category[0]->cat_name );
                    $first_category_link = get_category_link( $category_id );
                ?>
                <ol class="breadcrumb white z-depth-1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo get_home_url(); ?>">Home Page</a>
                    </li>
                    <?php
                    if (count($categories)){
                        ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
                        </li>
                        <?php
                    }
                    ?>
                    <li class="breadcrumb-item active"><?php the_title() ?></li>
                </ol>
            <!-- Breadcrumbs -->
            <div class="post-content text-justify p-3 lead">                
                <?php the_content(); ?>                
            </div>
            
            <!--Comments and reply-->
            <div class="comments-section">
                <?php comments_template(); ?>
            </div>

            <!--/.Comments and reply--> 
        </div> 
        <div class="col-md-4 mb-4" id="sidebar">
            <!--Sidebar-->
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
            <!--/.Sidebar-->
        </div>
    </div>
    </section>
    <?php   
    }
?>

<?php get_footer(); ?>