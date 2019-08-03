<?php  get_header();

if ( !is_shop()) {
     woocommerce_content();
} else {
?>

<!--Main Navigation-->
<header>

    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-4">

        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">

                    <h1 class="font-weight-bold mb-4">Website Name</h1>
                    <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ad impedit corporis ratione facere?
                        Cupiditate unde aliquid reiciendis animi, quas inventore, praesentium neque voluptatem, iusto
                        perferendis placeat similique dolor eum?
                    </p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>
<!--Main Navigation-->
<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Dynamic Content Wrapper-->
        <section>
            <div class="dynamic-content"></div>
        </section>
        <!--Section: Dynamic Content Wrapper-->

        <!--Section: Products-->
        <section class="text-center">

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark info-color-dark mt-3 mb-5">

                <!-- Navbar brand -->
                <span class="navbar-brand">Categories:</span>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <?php wp_nav_menu(array('theme_location' => 'category')); ?>
                    </ul>
                    <!-- Links -->

                    <form class="form-inline">
                        <div class="md-form mt-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- Collapsible content -->

            </nav>
            <!--/.Navbar-->

            <!--Grid row-->

            <div class="row wow fadeIn">
            <?php
                // Define custom query parameters
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 6,
                    'paged'          => $paged
                    );
                $counter = 1;
                $loop = new WP_Query( $args );

                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
            ?>
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Product Card naked -->
                    <div class="card-naked">

                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded mb-3">
                            <?php
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
                            $regular_price = get_post_meta( get_the_ID(), '_regular_price', true);
                            $sale_price = get_post_meta( get_the_ID(), '_sale_price', true);
                            $terms = get_the_terms( $post->ID, 'product_cat' );
                            foreach ($terms as $term) {
                                $product_cat_name = $term->name;
                                $product_cat_id = $term->term_id;
                                break;
                            }
                            ?>
                            <img src="<?php  echo $image[0]; ?>" class="img-fluid" data-id="<?php echo $loop->post->ID; ?>">
                            <a href ="<?php echo get_permalink() ?>">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Content-->
                        <h6 class="mb-3">
                            <a href="<?php echo esc_url( get_term_link( $product_cat_id, 'product_cat' ) ); ?>">
                                <span class="badge purple mr-1"><?php echo $product_cat_name; ?></span>
                            </a>
                        </h6>
                        <h5 class="mb-3">
                            <strong><?php the_title() ?></strong>
                        </h5>
                        <p>
                            <?php if($sale_price) {
                            ?>
                            <span class="mr-1">
                                <del><?php echo "₹ " . $regular_price; ?></del>
                            </span>
                            <?php
                            }
                            ?>
                            <span>
                        <?php
                        echo "₹ ";
                        echo  ($sale_price) ? $sale_price : $regular_price;
                        ?></span>
                        </p>
                        <a href="<?php echo get_permalink(wc_get_page_id( 'cart' ))  . "?add-to-cart=" .  get_the_ID() ; ?> " class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Add to cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <a href="<?php echo get_permalink() ?>" class="btn btn-info btn-sm">Details</a>

                    </div>
                    <!-- Product Card naked -->

                </div>
                <!--Grid column-->
                <?php
                if ($counter % 3 == 0) {
                ?>
                    </div>
                    <!--Grid row-->
                    <!--Grid dynamic row-->
                    <div class="row wow fadeIn">
                <?php
                }
                $counter++;
                endwhile;
                } else {
                    echo __( 'No products found' );
                }
                // Custom query loop pagination

                ?>
            </div>
            <!--Grid row-->

        </section>
        <!--Section: Products-->
        <?php mdb_pagination(); ?>

    </div>

<?php
} // end else (if single-product)
get_footer();
?>