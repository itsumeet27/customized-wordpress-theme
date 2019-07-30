<?php get_header(); 

while(have_posts()){
    the_post();

?>

<h2 class="text-center p-2"><?php the_title(); ?></h2>
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