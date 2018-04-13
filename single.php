<?php get_header() ?>
<?php wp_head() ?>

<body class="blog">
<header class="bgGray">
  <div class="bgcolorDarkgray darkGrayLine">
      <img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="logo" class="axeFixed shadow">
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block text-center w-100" src="<?php bloginfo('template_url') ?>/assets/img/notice/vr11.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block text-center w-100" src="<?php bloginfo('template_url') ?>/assets/img/notice/vr22.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block text-center w-100" src="<?php bloginfo('template_url') ?>/assets/img/notice/vr33.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>

<div class="bgcolorDarkgray jFlexAlingCenter navmenu">
    <nav class="jFlexAlingCenter">
        <a href="http://localhost:8080/"><img src="<?php bloginfo('template_url') ?>/assets/img/icohome.svg" alt="home" class="menuIco"></a>
        <a href="http://localhost:8080/info/"><img src="<?php bloginfo('template_url') ?>/assets/img/icoinfo.svg" alt="info" class="menuIco"></a>
        <a href="http://localhost:8080/blog/"><img src="<?php bloginfo('template_url') ?>/assets/img/icoblog.svg" alt="blog" class="menuIco"></a>
    </nav>
</div>

<article>
  <div class="ml-3 mr-3 mt-5">
     <div class="row justify-content-between">
       <div class="col-md-8 col-12 latebar">

				 <?php if ( have_posts() ) { ?>
 				 <?php while ( have_posts() ) { ?>
 					 <?php the_post(); ?>

 					 <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid')) ?>

 					 <div class="container entrada">
 						 <a href="<?php  the_permalink() ?>">
 								<h2><?php the_title() ?></h2>
 						 </a>
 						 <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
 						 <?php the_content() ?>
 					 </div>

 				 <?php } ?>
 				<?php } else { ?>
 				 <!-- Content -->
 				<?php } wp_reset_query(); ?>


       <div class="col-md-4">
         <div class="publicidad">
           <img src="<?php bloginfo('template_url') ?>/assets/img/notice/publicidad/publicidad300x300.jpg" alt="publicidad" class="img-fluid">
         </div>
         <hr class="pt-3">

         <div class="refer">
          <ul>
            <li class="jFlexleft">
              <img src="<?php bloginfo('template_url') ?>/assets/img/notice/refer/oculus.jpg" alt="oculs" class="pr-1"><a href=""><p>Visita la pagina de Oculus rift</p></a>
            </li>
            <hr>
            <li class="jFlexleft">
              <img src="<?php bloginfo('template_url') ?>/assets/img/notice/refer/vive.jpg" alt="vive" class="pr-1"><a href="">Visita la pagina de Vive</a>
            </li>
            <hr>
          </ul>
         </div>
       </div>
     </div>
   </div>

</article>


<footer class="bgcolorDarkgray">
  <div class="container p-5 tituloAldia">
    <h2>QUIERES ESTAR AL DIA?</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-12">
      <form class="p-2">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">Informacion protejida, no se compartira con nadie.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-md-6 col-12">
      <div class="footer-social-icons">

    <div class="social-icons">
      <div class="container pt-5 jFlexaround">
        <span class="fa-facebook-2"><a href="" class="social-icon"><i class="fab fa-facebook-f"></i></a></span>
        <span class="fa-twitter-2"><a href="" class="social-icon"><i class="fab fa-twitter"></i></a></span>
        <span class="fa-youtube-2"><a href="" class="social-icon"><i class="fas fa-play"></i>
        </a></span>
        <span class="fa-none"></span>
        </div>

    </div>
</div>
    </div>
  </div>
</div>
</footer>
<?php get_footer() ?>
