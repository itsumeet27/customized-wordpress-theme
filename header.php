<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php wp_head(); ?>
    <style type="text/css">

      .products .row{
        margin-top: 1.5em;
        margin-bottom: 1.5em;
      }

      h1.page-title{
        margin-top:2em;
        text-align: center;
        text-transform: uppercase;
      }

      .woocommerce-loop-product__title{
        padding-top: 1.2em;
        padding-bottom: 0.8em
      }

      .woocommerce-product-details__short-description p{
        font-size: 18px;
      }

      .woocommerce-product-details__short-description h5{
        font-size: 24px;
        font-weight: 400;
        margin-bottom: 1.5em;
      }

      .woocommerce-tabs ul{
        list-style-type:none;
        
      }

      .woocommerce-tabs ul li{
        float: left;
        margin-left: 0.5em;
        padding: 0.5em 1em;
        font-size: 18px;
      }

      .woocommerce-tabs ul li a{
        text-decoration:none;
        color: #114A7C;
        font-weight: 400;
      }

      .woocommerce-tabs ul li:hover{
        transition-duration: 0.05s;
        border: 2px solid #555;
        border-top:0;
        border-left:0;
        border-right:0;
        cursor: pointer;
      }

      .woocommerce-tabs ul li.active{
        
        border: 2px solid #555;
        border-top:0;
        border-left:0;
        border-right:0;
      }

      .woocommerce-Tabs-panel{
        text-align: justify;
        padding: 1.5em;
        margin:0;
      }

      .woocommerce-Tabs-panel h2{
        margin:0;
        padding: 0.75em;
        padding-left: 0;
      }

      #hide-related section{
        display:none!important;
      }

      .qty{
        border: 1px solid #333;
        border-left: none;
        border-right: none;
        border-top: none;
        padding: 0.75em
      }

      /* Product Category Menu */

      #menu-product-categories{
        list-style-type: none;
      }

      #menu-product-categories li{ 
        margin-right: 5px;
        float: left;
        list-style-type:none;
        font-weight:400;
      }

      #menu-product-categories li a:link, 
      #menu-product-categories li a:visited{
        display: block;
        padding: 10px 18px;
        border-bottom: none;
        text-decoration: none;
        color: #fff;
      }

      /* Site Header Menu*/
  
      .site-header nav ul li{
        margin-right: 5px;
        float: left;
        list-style-type:none;
        font-weight:400;
      }
      
      .site-header nav ul li a:link,
      .site-header nav ul li a:visited{
        display: block;
        padding: 10px 18px;
        border-bottom: none;
        text-decoration: none;
        color: #444;
      }
      
      .site-header nav ul li a:hover{
        color: #333;
        transition-duration: 0.2s;
        background: none;
      }
      
      .site-header nav ul li.current-menu-item a:link,
      .site-header nav ul li.current-menu-item a:visited{
        color: #333;
        background:none;
      }
      
      @media only screen and (max-width:991px) {
      
        .site-header nav ul li, #menu-product-categories li{
          float:none;
        }
      }

      /* Scrollbar Design */

      body::-webkit-scrollbar {
        width: 12px;
        background-color: #f5f5f5;
        
      }

      body::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #f5f5f5;
      }

      body::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #114A7C;
      }

      /* Footer */

      footer{
        width: 100%;
      }

      aside{
        width: 100%;
        padding-top: 2em; 
      }

      aside.row{
        margin: 0;
      }

      aside ul{
        margin: 0;
        padding: 0;
        
      }

      aside h3{
        padding-bottom: 0.75em;
      }

      aside ul li{
        list-style-type: none;
        padding: 0.3em;
        font-size: 16px;
      }

      aside ul li a{
        color: #333!important;
      }

      
      .white-text>a {
        color: white;
      }
      @media only screen and (max-width:768px){
        .first, .second, .third{
          padding-top: 1.5em;
          padding-bottom: 1.5em;
        }
        .fourth{
          padding-top: 1.5em;
          padding-bottom: 1.5em;
        }
      }

      /* Ninja Forms */

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

      /* Post content and Sidebar */

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
</head>
<body>
<div class="site-header">
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light white fixed-top z-depth-0 scrolling-navbar" style="background:">
    <a class="" href="#">
    <?php 
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" height="75">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-linkedin"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
</div>
<?php 
  if(!is_front_page()){
    ?>
  <main>

  <?php  } ?>