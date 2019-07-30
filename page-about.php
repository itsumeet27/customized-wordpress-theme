<?php get_header(); 

while(have_posts()){
    the_post();

?>



<h2 class="text-center p-2" style="text-transform: uppercase;margin-top:2em"><b><?php the_title(); ?></b></h2>
<hr class="" style="border-width: 2px; width: 50px; border-style: groove; border-color: #ccc; border-radius: 50px; margin-bottom:2em">
<?php if(has_post_thumbnail()){ ?>
    <div class="">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" style="width: 100%"/>
    </div>
<?php } ?>
<div class="p-3 text-justify">
    <?php the_content(); ?>
</div>

<?php } ?>
<?php get_footer(); ?>