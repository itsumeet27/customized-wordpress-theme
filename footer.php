</main>
<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">
	<div class="row pt-3 pb-3" style="margin:0;background-color: #032b4e5e">
		<div class="col-md-4 pt-2 pb-2">
			<p class="lead" style="margin:0;text-transform: uppercase;">Let's get connected online</p>
		</div>
		<div class="col-md-8 text-center pt-2 pb-2">
			<!-- Social icons -->
			<div class="">
				<a href="" target="_blank">
					<i class="fab fa-facebook-f mr-3"></i>
				</a>

				<a href="" target="_blank">
					<i class="fab fa-twitter mr-3"></i>
				</a>

				<a href="" target="_blank">
					<i class="fab fa-youtube mr-3"></i>
				</a>

				<a href="" target="_blank">
					<i class="fab fa-google-plus-g mr-3"></i>
				</a>

				<a href="" target="_blank">
					<i class="fab fa-dribbble mr-3"></i>
				</a>

				<a href="" target="_blank">
					<i class="fab fa-pinterest mr-3"></i>
				</a>

				<a href="" target="_blank">
					<i class="fab fa-github mr-3"></i>
				</a>

				<a href="" target="_blank">
					<i class="fab fa-codepen mr-3"></i>
				</a>
			</div>
			<!-- Social icons -->
		</div>
	</div>
	

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
<div class="pb-5" style="background: #f9f9f9;color:#333">
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
</div>


	<!--Copyright-->
	<div class="footer-copyright py-3">
		© 2019 Copyright:
		<a href="https://netmatesolutions.in/itsumeet" target="_blank"> Sumeet Sharma </a>
	</div>
	<!--/.Copyright-->
<?php wp_footer(); ?>
</body>
<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>
</html>