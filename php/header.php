<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php echo $title; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/flat-ui-master/dist/css/flat-ui.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- Leave those next 4 lines if you care about users using IE8 -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" /> 
<!--instead of style.css-->

<?php wp_head(); ?>

</head>

<div class="container">
<body>
<header>
<img src="<?php bloginfo('template_directory'); ?>/images/moustache_nook_pacifier.jpg" class="rounded">Logo Enfant
</header>
<h1 class="color-h1" >
Le blog où on parle de mode pour enfant mais pas que, car les minis-nous meme aiment aussi s’amuser et voyager avec leurs parents.
</h1>


 <!-- Commentaires : début de la nav bar - <h2><?php ?> </h2> -->

<div class="container">
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>


<div class="logo"><a href="<?php echo home_url(); ?>">BP</a></div>
 <!-- <img src="<?php bloginfo('template_directory'); ?>/images/logo.png">-->
<!--Lien dans menu pour renvoyer vers la home avec image ou-->


    <!-- Collect the nav links, forms, and other content for toggling
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-transparent">
        <li><a href="#">Mode</a></li>
        
        <li><a href="#">Lookbook</a></li>
    
        <li><a href="#">Marques enfants</a></li>

        <li><a href="#">Voyager avec bébé</a></li>

        <li><a href="#">Culture</a></li>

        <li><a href="#">Evénements</a></li>

        <li><a href="#">Last babylook</a></li>

      <ul class="nav navbar-nav navbar-right">
      
        
        <form class="navbar-form" role="search">
       
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default btn-color">Recherche</button>
        </form>
          </ul>
  </div>

-->


 <?php
    wp_nav_menu( array(
      'menu' => 'third-nav',
      'theme_location' => 'third-nav',
      'depth' => 2,
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'bs-example-navbar-collapse-1',
      'menu_class' => 'nav navbar-nav navbar-transparent',
      'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
      'walker' => new wp_bootstrap_navwalker())
    );
  ?> 
<div class="search-form">
  
   <?php get_search_form( 'true' ); ?> 

</div>


<nav class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
      <span class="sr-only">Toggle navigation</span>
    </button>
    <a class="navbar-brand" href="#">Flat UI</a>
  </div>
  <div class="collapse navbar-collapse" id="navbar-collapse-01">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#fakelink">Products</a></li>
      <li><a href="#fakelink">Features</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="#" role="search">
      <div class="form-group">
        <div class="input-group">
          <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
          <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
        </div>
      </div>
    </form>
  </div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->

  </div><!-- /.container-fluid -->


</nav>

