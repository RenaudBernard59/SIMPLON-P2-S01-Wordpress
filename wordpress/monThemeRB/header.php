<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Accueil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- IE & Edge -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->    


        <link rel="apple-touch-icon" href="faviconsfavicons/apple-touch-icon.png">
        <!-- Favicons -->
            <!-- Apple Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
            <!-- Android Favicons -->
        <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
            <!-- PC Favicons -->
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- Styles -->
            <!-- Boilerplate -->
        <link rel="stylesheet" href="css/main.css"> <!-- PERSONNAL -->
            <!-- Bootstrap --> 
        <link rel="stylesheet" href="css/bootstrap.css"> <!-- PERSONIZED -->
         <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap-theme.css"> BOGUE -->
        <!-- CSS Compatibility to IE -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>


    </head>
    <body>
        <!--[i lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


 <!-- #################### HEADER #################### -->
<header class="navbar navbar-default">
  <nav class="container">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- ===== -->
        <div class="navbar-text">
            <a href="<?php bloginfo('url'); ?>" class="navbar-brand">
              <img src="img/logo.png" alt="Logo Blog of Tec" class="logo col-lg-8 col-md-8 col-sm-8 col-xs-8">
            </a>
            <span class="hidden">
                <?php bloginfo('name'); ?>
            </span>
        </div>
      </div>
    <!-- ===== -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html" class="active">Accueil</a></li>
            <li><a href="articles.html">Articles</a></li>
            <li><a href="themes.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Thèmes <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                <li><a href="#">Web</a></li>
                <li><a href="#">Matériel</a></li>
                <li><a href="#">Softwares</a></li>
                <li><a href="#">Général</a></li>
              </ul>
            </li>
          </ul>
        </div> <!--/.nav-collapse -->
    <!-- ===== -->
    </div>
  </nav>
</header>





 <!-- #################### MAIN #################### -->
<main class="container">
  <div class="page-header">
    <h1>Présentation de Blog of Teck</h1>
  </div>
  <article class="col-lg-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio perferendis eligendi esse vitae asperiores maiores, blanditiis nisi. Perferendis labore ipsa dolorem aliquam, corrupti rem aspernatur sapiente accusamus animi officia enim.</article>

<!-- #####################################################################################
######################################## CAROUSSEL #######################################
###################################################################################### -->

<div id="carousel-accueil" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <!-- ########## CAROUSSEL 1 ########### -->
    <div class="item active">
      <div class="carousel-page">
        <img src="img/caroussel1.png" alt="image-caroussel" class="col-lg-12 col-md-12 col-sm-12 col xs-12">
      </div>
        <div class="carousel-caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed porro, veniam harum repellat, veritatis ea.</p>
          <p><a href="#" class="btn btn-primary" role="button">Voir la suite</a></p>
        </div>  
    </div>

    <!-- ########## CAROUSSEL 2 ########### -->
    <div class="item">
      <img src="img/caroussel2.png" alt="image-caroussel" class="col-lg-12 col-md-12 col-sm-12 col xs-12">
      <div class="carousel-caption">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sint inventore eligendi aut cumque dolor omnis iusto quaerat accusamus veritatis!</p>
        <p><a href="#" class="btn btn-primary" role="button">Voir la suite</a></p>
      </div>
    </div>

    <!-- ########## CAROUSSEL 3 ########### -->
    <div class="item">
      <img src="img/caroussel3.png" alt="image-caroussel" class="col-lg-12 col-md-12 col-sm-12 col xs-12">
      <div class="carousel-caption">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto neque cupiditate hic eum.</p>
        <p><a href="#" class="btn btn-primary" role="button">Voir la suite</a></p>
      </div>
    </div>

    <!-- ########## CAROUSSEL 4 ########### -->
    <div class="item">
      <img src="img/caroussel4.png" alt="image-caroussel" class="col-lg-12 col-md-12 col-sm-12 col xs-12">
      <div class="carousel-caption">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis doloremque totam in, tempore officia labore. Distinctio, quibusdam, laborum.</p>
        <p><a href="#" class="btn btn-primary" role="button">Voir la suite</a></p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- #####################################################################################
############################ SECTIONS PRESENTATION THUMNAILS #############################
###################################################################################### -->
<div class="row">
  <div class="col-xs-6 col-sm-6 col-md-3 col lg-3">
    <div class="thumbnail">
      <img src="img/caroussel1.png" alt="Photo Thubnails">
      <div class="caption">
        <h3>Thumbnail label 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eveniet fugit id mollitia sit similique fugiat architecto repellendus a quas?</p>
        <p><a href="#" class="btn btn-primary" role="button">Voir la suite</a></p>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col lg-3">
      <div class="thumbnail">
        <img src="img/caroussel2.png" alt="Photo Thubnails">
        <div class="caption">
          <h3>Thumbnail label 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eveniet fugit id mollitia sit similique fugiat architecto repellendus a quas?</p>
          <p><a href="#" class="btn btn-primary" role="button">Voir la suite</a></p>
        </div>
      </div>
    </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col lg-3">
      <div class="thumbnail">
        <img src="img/caroussel3.png" alt="Photo Thubnails">
        <div class="caption">
          <h3>Thumbnail label 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eveniet fugit id mollitia sit similique fugiat architecto repellendus a quas?</p>
          <p><a href="#" class="btn btn-primary" role="button">Voir la suite</a></p>
        </div>
      </div>
    </div>
  <div class="col-xs-6 col-sm-6 col-md-3 col lg-3">
      <div class="thumbnail">
        <img src="img/caroussel4.png" alt="Photo Thubnails">
        <div class="caption">
          <h3>Thumbnail label 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eveniet fugit id mollitia sit similique fugiat architecto repellendus a quas?</p>
          <p><a href="#" class="btn btn-primary" role="button">Voir la suite</a></p>
        </div>
      </div>
    </div>
</div>

<!-- #####################################################################################
#################################### DERNIERS ARTICLES ###################################
###################################################################################### -->
<section id="content">
 <h2>Derniers Articles</h2> 
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<article class="col-lg-12 col md-12 col-sm-XX col-xs-YY text-justify">
    <header class="panel-header">
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
    <div class="tags"><?php the_category(', ') ?></div>
    </header>

    <div class= "post" id="post-<?php the_ID(); ?>">
        <div class= "post_content">
            <?php the_content(); ?>
        </div>
    </div>
    <footer class="panel-footer postmetadata">
        <div class="col-lg-4 col md-4 col-sm-4 col-xs-4">
            <p class="auteur">Auteur : <?php the_author() ?> </p>
        </div>
        <div class="col-lg-4 col md-4 col-sm-4 col-xs-4">
            <p class="date"> Date <time datetime=" <?php the_time('j F Y') ?>"> <?php the_time('j F Y') ?></time></p>
        </div>
        <div class="col-lg-4 col md-4 col-sm-4 col-xs-4">
            <p class="vues">Vues : 00000</p>
        </div>
    </footer>
</article>
<?php endwhile; ?>
<?php endif; ?>
</section>