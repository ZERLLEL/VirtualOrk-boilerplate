<?php get_header() ?>
<body class="bgGray">
  <img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="logo" class="axeFixed shadow">

  <header id="headerContent" class="pRelat bgcolorDarkgray vid hiddenvid">
    <div class="playStop">

      <span onclick="playVid()"><i class="fas fa-play"></i></span>
      <span onclick="pauseVid()"><i class="fas fa-pause"></i></span>
    </div>
      <video id="myVideo" autoplay loop>
          <source src="<?php bloginfo('template_url') ?>/assets/video/oculus.mp4" type="video/mp4">
      </video>
  </header>

  <div class="bgcolorDarkgray jFlexAlingCenter navmenu">
      <nav class="jFlexAlingCenter">
          <a href="http://localhost:8080"><img src="<?php bloginfo('template_url') ?>/assets/img/icohome.svg" alt="home" class="menuIco"></a>
          <a href="http://localhost:8080/info/"><img src="<?php bloginfo('template_url') ?>/assets/img/icoinfo.svg" alt="info" class="menuIco"></a>
          <a href="http://localhost:8080/blog/"><img src="<?php bloginfo('template_url') ?>/assets/img/icoblog.svg" alt="blog" class="menuIco"></a>
      </nav>
  </div>
  <section class="bgGray">
    <div class="container intro">
      <div>
        <img src="<?php bloginfo('template_url') ?>/assets/img/infovr.svg" alt="intro" class="img-fluid">
      </div>
      <p>La realidad virtual es por lo general un mundo virtual generado por ordenador (o sistemas informaticos) en el que el usuario tiene la sensacion de estar en el interior de este mundo, y dependiendo del nivel de inmersion este puede interactuar con este mundo y los objetos del mismo en un grado u otro.</p>
    </div>
  </section>
  <article>
    <div class="cyanline"></div>
      <div class="container-fluid bgcyandark">
        <div class="row pl-5 pr-5">
          <div class="col-md-5">
            <div class="cate">
              <div class="ico ico1">
                <img src="<?php bloginfo('template_url') ?>/assets/img/ico1.svg" alt="ico">
              </div>
              <div class="ico ico2">
                <img src="<?php bloginfo('template_url') ?>/assets/img/ico2.svg" alt="ico">
              </div>

            </div>
            <div class="cate2">
              <div class="ico ico3">
                <img src="<?php bloginfo('template_url') ?>/assets/img/ico3.svg" alt="ico">
              </div>
              <div class="ico ico4">
                <img src="<?php bloginfo('template_url') ?>/assets/img/ico4.svg" alt="ico">
              </div>
            </div>
          </div>
          <div class="col-md-5 jFlexAlingCenter">
           <div class="resumen alingRigth">
             <span>
                <h2>DISPOSITIVO VIRTUAL</h2>
               <p>En el mundo virtual se pueden
  conseguir una gran cantidad
  de dispositivos, aqui nos centraremos
  en los mas caracteristicos.</p>
             </span>
           </div>
          </div>
        </div>
      </div>
    <div class="cyanline"></div>
  </article>
  <section class="bgcolorDarkgray pt-5 pb-5">
    <div class="movile container-fluid jFlexaround">

      <div class="videoinfo pt-5 pb-5 pl-2 pr-2">
        <iframe width="640" height="360" src="https://www.youtube.com/embed/kHDyNbuccO0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="VRinfo alingRigth">
      <span>
        <img src="<?php bloginfo('template_url') ?>/assets/img/ico1of.svg" alt="" class="p-2">
        <h2>PlayStation.VR</h2>
        <p>Transpórtate a nuevos mundos con
 PlayStation® VR. Una biblioteca de
contenido cada vez mas grande,
sientelos todos. Experimenta todos.</p>
      </span>
      </div>
    </div>
  </section>
  <section class="bgGray">
    <div class="movile container-fluid jFlexaround">

      <div class="videoinfo pt-5 pb-5 pl-2 pr-2">
        <iframe width="640" height="360" src="https://www.youtube.com/embed/qYfNzhLXYGc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="VRinfo alingRigth">
      <span>
        <img src="<?php bloginfo('template_url') ?>/assets/img/ico2of.svg" alt="" class="p-2">
        <h2>Vive.VR</h2>
        <p>teletransportate al mundo digital con los juegos más envolventes. Disfruta de un emocionante juego de Ping Pong o sumérgete en piscinas con esta increíble tecnología. SteamVR ™ posee, gráficos impresionantes, excelente campo de visión de 110˚, controles intuitivos y retroalimentación óptica HD, brindándote la mayor experiencia de inmersión del mercado VR.</p>
      </span>
      </div>
    </div>
  </section>
  <section class="bgcolorDarkgray">
    <div class="movile container-fluid jFlexaround">

      <div class="videoinfo pt-5 pb-5 pl-2 pr-2">
        <iframe width="640" height="360" src="https://www.youtube.com/embed/SvP_RI_S-bw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="VRinfo alingRigth">
      <span>
        <img src="<?php bloginfo('template_url') ?>/assets/img/ico3of.svg" alt="" class="p-2">
        <h2>Oculus Rift</h2>
        <p>Liviano, adaptable y cómodo Cuando estás en la realidad virtual, el visor desaparece y te transportas a un espacio increíble. Sea lo que sea que estás buscando, aquí encontrarás lo mejor de la realidad virtual.</p>
      </span>
      </div>
    </div>
  </section>
  <section class="bgGray">
    <div class="movile container-fluid jFlexaround">

      <div class="videoinfo pt-5 pb-5 pl-2 pr-2">
        <iframe width="640" height="360" src="https://www.youtube.com/embed/KxtYbELTIz0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      <div class="VRinfo alingRigth">
      <span>
        <img src="<?php bloginfo('template_url') ?>/assets/img/ico4of.svg" alt="" class="p-2">
        <h2>Gear VR</h2>
        <p>Con el Gear VR de Samsung experimentarás sentirte como en la primera fila del cine hasta aventuras que solo caben en tus sueños. Con su nuevo diseño y controlador, tendrás una mejor perspectiva para ir más lejos que nunca.</p>
      </span>
      </div>
    </div>
  </section>

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
