<?php get_header(); ?> 
    <div class="container-fluid text-center jumbotron-full">
<div class="jumbotron">
 <br>  
 <br>
 <br>
 <br>
<!--  <h1>Blog Tecnologias!</h1>-->
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet fuga minus recusandae iusto odio aliquam ab sint aliquid quasi, possimus.</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  <p><i class="fa fa-desktop"></i><i class="fa fa-gamepad"></i><i class="fa fa-youtube-play"></i><i class="fa fa-mobile-phone"></i>
</p>
</div>    
  </div>
  <div class="container-fluid owl-full">
    <div class="container">
<!--
      <p class="text-center video-icone-play"><span class="glyphicon glyphicon-globe"></span></p>
      <h3>ALGUNS DESTAQUES</h3>
-->
      <div id="owl-demo" class="owl-carousel owl-theme">
       <?php  while ( have_posts() ) : the_post(); ?>    
        <div class="item">
          <span class="categoria"><a href="<?php the_permalink() ?>">
                          <?php
              $categoria = get_the_category();
              $nomeCategoria = $categoria[0]->cat_name;
              echo $nomeCategoria;
              ?>
          </a></span>
          <h1><?php the_field( "subtitulo" ); ?></h1>
          <p><?php the_excerpt(); ?></p>
        </div>
        <?php endwhile; ?>

      </div>
    </div>
  </div>

  <div class="container-fluid sec-one">
    <div class="container txt-welcome text-center">
      <h1>Mais um blog sobre tecnologias!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt blanditiis aspernatur neque iusto doloribus ipsa labore, totam cumque, reiciendis facilis.</p>

      <?php  while ( have_posts() ) : the_post(); ?>    

      <div class="col-md-3 col-sm-6 card  card-1 card-dark">
        <div class="card-interna">
<!--          <h3><?php the_title(); ?></h3>-->
          <h3><?php the_field( "subtitulo" ); ?></h3>
          <p><?php the_excerpt(); ?></p>

        </div>
                  <p>
            <a href="<?php the_permalink();  ?>"><button>+</button></a>

          </p>
        <div class="<?php
$categoria = get_the_category();
$nomeCategoria = $categoria[0]->cat_name;
echo $nomeCategoria;
?>">
        
         <p><span>      <?php
$categoria = get_the_category();
$nomeCategoria = $categoria[0]->cat_name;
echo $nomeCategoria;
?> </span></p>
        </div>
      </div>
      
      <?php endwhile; ?>
    
<!--
      <div class="col-md-3 col-sm-3 card card-2 card-dark">
        <div class="card-interna">
          <h3>Lorem ipsum dolor sit.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, dolor.</p>
          <p>
            <button>+</button>

          </p>
        </div>
        <div class="card-interna imagem">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tempphoto-2.jpg" alt="">
        </div>
      </div>
-->

      
    
    </div>
    <br>
    <br>
    <div class="container">
<div class="col-md-12">
  <div class="list-group">
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, repellendus?</p>
  </a>
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading Lorem ipsum dolor.</h4>
    <p class="list-group-item-text">Lorem ipsum dolor sit amet,Lorem ipsum dolor. consectetur adipisicing elit. Tempore, repellendus?</p>
  </a>  
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading Lorem ipsum dolor.</h4>
    <p class="list-group-item-text">Lorem ipsum dolor sit amet,Lorem ipsum dolor. consectetur adipisicing elit. Tempore, repellendus?</p>
  </a>  
</div>

</div>      
    </div>

      </div>
     
  <div class="contaier-fluid second-section">
    <div class="container">
      <div class="col-md-12">
        <p class="text-center video-icone-play"><span class="glyphicon glyphicon-play-circle"></span></p>

        <h3>ASSISITA NOSSOS VÍDEOS</h3>

        <div class="col-md-8 col-md-offset-2 item-videos">
          <div id="owl-demo-video" class="owl-carousel owl-theme">

            <div class="item">
              <div class="divider"></div>
              <p>
6 gênios da tecnologia que você não conhece - TecMundo
TecMundo
</p>
        <iframe width="560" height="305" src="https://www.youtube.com/embed/NOzfDsmb54M" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  
  <div class="container-fluid">
    <div class="container">

    </div>
  </div>
<?php get_footer(); ?> 