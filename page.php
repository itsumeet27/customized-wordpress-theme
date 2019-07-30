<?php get_header(); 

while(have_posts()){
    the_post();

?>

<style type="text/css">
    .nf-form-fields-required {
        display: none;
    }

    .nf-field-element input[type='submit'], .nf-field-element input[type='button']{
        padding: 0.7rem 1.6rem;
        font-size: 0.7rem;
        cursor: pointer;
        border: none;
        border-radius: .125rem;
        font-size: 14px;
        text-transform: uppercase;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
        word-wrap: break-word;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        white-space: normal;
        
    }

    .nf-field-element input[type='submit']:hover, .nf-field-element input[type='button']:hover{
        color: #fff!important;
        background-color: #333!important;
    }    
</style>

<h2 class="text-center p-2" style="text-transform: uppercase;margin-top:2em"><b><?php the_title(); ?></b></h2>
<hr class="" style="border-width: 2px; width: 50px; border-style: groove; border-color: #ccc; border-radius: 50px; margin-bottom:2em">
<?php if(has_post_thumbnail()){ ?>
    <div class="">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" style="width: 100%"/>
    </div>
<?php } ?>
<div class="p-3 container-fluid">
    <?php the_content(); ?>
</div>

<?php } ?>
<?php get_footer(); ?>