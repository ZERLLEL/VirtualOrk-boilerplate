<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body class="bgGray">
  <img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="logo" class="axeFixed shadow">
<header class="vph100 bgGray">
  <div class="container p-5 jFlexCenter">
  <img src="<?php bloginfo('template_url') ?>/assets/img/Recurso1.svg" alt="" class="animated rollIn">
  </div>
</header>

<div class="bgcolorDarkgray jFlexAlingCenter navmenu">
    <nav class="jFlexAlingCenter">
        <a href="http://localhost:8080/"><img src="<?php bloginfo('template_url') ?>/assets/img/icohome.svg" title="Home" alt="home" class="menuIco"></a>
        <a href="http://localhost:8080/info/"><img src="<?php bloginfo('template_url') ?>/assets/img/icoinfo.svg" title="Info" alt="info" class="menuIco"></a>
        <a href="http://localhost:8080/blog/"><img src="<?php bloginfo('template_url') ?>/assets/img/icoblog.svg" title="Blog" alt="blog" class="menuIco"></a>
    </nav>
</div>
<div class="greenline"></div>

<div class="slideToggle hidden">

  <div class="container-fluid bgwhite">

      <div class="jFlexaround">

          <div class="bgGreen noti">

            <div class="container notix">
              <img src="<?php bloginfo('template_url') ?>/assets/img/notice/vr1in.jpg" alt="notice" class="img-fluid">
            </div>
          </div>


        <div class="bgGreen noti">
          <div class="container notix">
            <img src="<?php bloginfo('template_url') ?>/assets/img/notice/vr2in.jpg" alt="notice" class="img-fluid">
          </div>
        </div>


        <div class="bgGreen noti">
          <div class="container notix">
            <img src="<?php bloginfo('template_url') ?>/assets/img/notice/vr3in.jpg" alt="notice" class="img-fluid">
          </div>
        </div>
      </div>
  </div>
  <div class="greenline"></div>
</div>



</div>

<div class="bgSpaceGray"></div>

<div>
  <div class="cyanline"></div>
    <div class="slideToggle2 hidden">
      <div class="container-fluid bgcyandark">
        <div class="jFlexaround">
          <div class="info13"><img src="<?php bloginfo('template_url') ?>/assets/img/info1.svg" alt="" class="img-fluid"></div>
          <div class="info2"><img src="<?php bloginfo('template_url') ?>/assets/img/info2.svg" alt="" class="img-fluid"></div>
          <div class="info13"><img src="<?php bloginfo('template_url') ?>/assets/img/info3.svg" alt="" class="img-fluid"></div>
        </div>
      </div>
        <div class="cyanline"></div>
    </div>

</div>
<div class="bgSpaceGray"></div>

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
