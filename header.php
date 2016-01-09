<!DOCTYPE html>
<html <?php language_attributes() ?> >

<head>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">

  <!--    open sans condensed-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

  <!--    lobster-->
<!--  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>-->
  
  <title>Tecnologias mcs</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.marcelsantos.com.br/blog">Blog Tecnologias</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class=""><a href="#" class="ir-contato-scroll">Desenvolvimento frontend</a></li>
            <li><a href="#portfolio" class="ir-portfolio-scroll">Games</a></li>
            <li><a href="#portfolio" class="ir-portfolio-scroll">Vídeos</a></li>
            <li><a href="#contato" class="ir-contato-scroll">Aplicativos</a></li>
         
            <!-- <li><a href="#">Blog</a></li> -->

          </ul>


        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <div id="zerar-padding" class="container-fluid">
      <div class="container-fluid text-center">
        <div class="row">
          <div class="container-fluid search-box" id="searchdiv">
             <form action="<?php echo site_url(); ?>" method="get" role="search">          
                <div class="col-md-1">
                 <button type="submit">
                  <span class="glyphicon hidden-xs hidden-sm glyphicon-search" aria-hidden="true"></span> 
                 </button>
                  
                </div>
                <div class="col-md-11">
                  <input type="search" id="search" placeholder="faça sua busca aqui..." name="s" class="form-control"> 
                </div>
           </form>

          </div>
        </div>
        

      </div>
    </div>
  </header>