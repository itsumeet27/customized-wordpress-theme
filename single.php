<?php 
    get_header(); 
?>



<style type="text/css">
    
  #sidebar{
    background: #f9f9f9;
    padding: 0.75em;
    font-size: 24px;
  }

  #sidebar ul li{
      list-style-type:none;
      font-size: 18px;
      padding: 0.3em;
      line-height: 1.6em;
  }

  #sidebar ul li a{
      color: #444;
  }

  #sidebar ul li a:hover{
      text-decoration: underline;
      color: #007bff;
      transition-duration: 0.2s;
  }

  .search-form{
      margin-top: 1em; 
      margin-bottom: 1em;
      
  }

  input[type='search']{
      font-size: 16px;
      border: 1px solid #000;
      padding: 0.3em;
      border-left: 0;
      border-right: 0;
      border-top: 0;
      background: rgba(0,0,0,0.0);
  }

  .search-submit{
      padding: 0.7rem 1.6rem;
      font-size: 0.7rem;
      background-color: #33b5e5;
      color: #fff;
      cursor: pointer;
      border: none;
      border-radius: .125rem;
      font-size: 14px;
      text-transform: uppercase;
      box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
      word-wrap: break-word;
      transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
      white-space: normal;
      margin: 0.375rem;
  }

  .lead{
      font-size: 1.1rem;
  }

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