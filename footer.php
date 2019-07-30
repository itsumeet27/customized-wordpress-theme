</main>
<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

<?php
    /* The footer widget area is triggered if any of the areas
     * have widgets. So let's check that first.
     *
     * If none of the sidebars have widgets, then let's bail early.
     */
    if (   ! is_active_sidebar( 'first-footer-widget-area'  )
        && ! is_active_sidebar( 'second-footer-widget-area' )
        && ! is_active_sidebar( 'third-footer-widget-area'  )
        && ! is_active_sidebar( 'fourth-footer-widget-area' )
    )
        return;
 
	//end of all sidebar checks.
	if (   is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && is_active_sidebar( 'third-footer-widget-area'  )
    && is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>

<aside class="row" role="complementary">
    <div class="first quarter widget-area col-md-3">
		<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second quarter widget-area col-md-3">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
    <div class="third quarter widget-area col-md-3">
        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </div><!-- .third .widget-area -->
 
    <div class="fourth quarter widget-area col-md-3">
        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
    </div><!-- .fourth .widget-area -->
</aside><!-- #-->

<?php 
elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>
<aside class="row" role="complementary">
    <div class="first one-third left widget-area col-md-4">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second one-third widget-area col-md-4">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
    <div class="third one-third right widget-area col-md-4">
        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </div><!-- .third .widget-area -->
 
</aside><!-- #-->

<?php
elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && ! is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>
<aside class="row" role="complementary">
    <div class="first half left widget-area col-md-6">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second half right widget-area col-md-6">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
</aside><!-- #-->

<?php
elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && ! is_active_sidebar( 'second-footer-widget-area' )
    && ! is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) :
?>
<aside class="row" role="complementary">
    <div class="first full-width widget-area col-md-12">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
</aside><!-- #-->
<?php
	endif;
?>

	<hr class="my-4">

	<!-- Social icons -->
	<div class="pb-4">
		<a href="https://www.facebook.com/mdbootstrap" target="_blank">
			<i class="fab fa-facebook-f mr-3"></i>
		</a>

		<a href="https://twitter.com/MDBootstrap" target="_blank">
			<i class="fab fa-twitter mr-3"></i>
		</a>

		<a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
			<i class="fab fa-youtube mr-3"></i>
		</a>

		<a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
			<i class="fab fa-google-plus-g mr-3"></i>
		</a>

		<a href="https://dribbble.com/mdbootstrap" target="_blank">
			<i class="fab fa-dribbble mr-3"></i>
		</a>

		<a href="https://pinterest.com/mdbootstrap" target="_blank">
			<i class="fab fa-pinterest mr-3"></i>
		</a>

		<a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
			<i class="fab fa-github mr-3"></i>
		</a>

		<a href="http://codepen.io/mdbootstrap/" target="_blank">
			<i class="fab fa-codepen mr-3"></i>
		</a>
	</div>
	<!-- Social icons -->

	<!--Copyright-->
	<div class="footer-copyright py-3">
		© 2018 Copyright:
		<a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
	</div>
	<!--/.Copyright-->
<?php wp_footer(); ?>
</body>
<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>
</html>