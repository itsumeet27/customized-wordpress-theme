<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php wp_head(); ?>
    <style type="text/css">
      /* Site Header Menu*/
  
      .site-header nav ul li{
        margin-right: 5px;
        float: left;
        list-style-type:none;
      }
      
      .site-header nav ul li a:link,
      .site-header nav ul li a:visited{
        display: block;
        padding: 10px 18px;
        border-bottom: none;
        text-decoration: none;
        color: #fff;
      }
      
      .site-header nav ul li a:hover{
        color: #cecece;
        transition-duration: 0.2s;
        background: none;
      }
      
      .site-header nav ul li.current-menu-item a:link,
      .site-header nav ul li.current-menu-item a:visited{
        color: #cecece;

      }
      
      @media only screen and (max-width:991px) {
      
        .site-header nav ul li{
          float:none;
        }
      }
      
    </style>
</head>
<body>
<div class="site-header">
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark black fixed-top z-depth-0 scrolling-navbar">
    <a class="navbar-brand" href="#">
        <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt="mdb logo">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <?php
        $args = array(
            'theme-location' => 'primary'
        );
      ?>

      <?php wp_nav_menu($args); ?>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
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