  <?php 
    include_once 'model/functions/version.php'; 
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instituto Everest</title>
  <script>
    // window.location.replace("https://educacioneverest.com/everest_2021/error.html");
  </script>
  <link rel="shortcut icon" href="assets/multimedia/logos/logo.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,500;0,700;0,900;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/everest.min.css">
  <link rel="stylesheet" href="assets/css/custom.css?v=<?php echo $v;?>">
  <link rel="stylesheet" href="assets/css/somos.css?v=<?php echo $v;?>">
  <link rel="stylesheet" href="assets/css/oferta.css?v=<?php echo $v;?>">
  <link rel="stylesheet" href="assets/css/footer.css?v=<?php echo $v;?>">
    <!-- Google reCaptcha -->
  <script src="https://www.google.com/recaptcha/api.js?render=6Le6E8EZAAAAAM87kdkpGd0LzwqD8N4TQxj_2JOL"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172326544-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-172326544-1');
  </script>
</head>

<body>

  <header class="container-fluid">
    <div class="menu-small">
      <div class="ms-logo">
        <img loading="lazy" src="assets/multimedia/logos/logo-nombre.svg" alt="Logo Instituto Everest" class="ms-logo-img">
      </div>
      <div class="ms-icon">
        <img loading="lazy" src="assets/multimedia/icons/select.svg" alt="Icon burger" class="ms-icon-img">
      </div>
    </div>
    <div class="row align-items-center menu">
      <div class="col-md-7 header-col-1">
        <div class="flex-center">
          <a href="./" class="logo-shield">
            <img loading="lazy" src="assets/multimedia/logos/logo-everest.svg" alt="Logo Instituto Everest">
          </a>
          <a href="./" class="logo-text">
            <img loading="lazy" src="assets/multimedia/logos/logo-nombre.svg" alt="Logo Instituto Everest">
          </a>
        </div>

      </div>
      <div class="col-md-5 header-col-2">
        <div class="row">
          <div class="col-12 btn-header-redes">
            <a href="https://www.facebook.com/Instituto-Everest-Sinaloa-223858394828987/?_rdc=1&amp;_rdr" class="btn"
              target="_blank">
              <img loading="lazy" src="assets/multimedia/icons/facebook.svg" alt="icono-facebook" title="facebook">
              <img src="assets/multimedia/icons/facebook-sobre.svg" alt="icono-facebook" title="facebook"
                class="facebook d-none">
            </a>
            <a href="https://www.instagram.com/everestsinaloa/" class="btn" target="_blank">
              <img loading="lazy" src="assets/multimedia/icons/instagram.svg" alt="icono-instagram" title="instagram">
              <img src="assets/multimedia/icons/instagram-sobre.svg" alt="icono-instagram" title="instagram"
                class="instagram d-none">
            </a>
            <a href="https://www.twitter.com/everestsinaloa" class="btn" target="_blank">
              <img loading="lazy" src="assets/multimedia/icons/twitter.svg" alt="icono-twitter" title="twitter">
              <img src="assets/multimedia/icons/twitter-sobre.svg" alt="icono-twitter" title="twitter"
                class="twitter d-none">
            </a>
            <a href="https://www.youtube.com/channel/UCFBsh-w1hqy9Jl1_Vyr2Nzw" class="btn" target="_blank">
              <img loading="lazy" src="assets/multimedia/icons/youtube.svg" alt="icono-youtube" title="youtube">
              <img src="assets/multimedia/icons/youtube-sobre.svg" alt="icono-youtube" title="youtube"
                class="youtube d-none">
            </a>
            <a href="https://mx.linkedin.com/in/institutoeverest/" class="btn" target="_blank">
              <img loading="lazy" src="assets/multimedia/icons/linkedin.svg" alt="icono-linkedin" title="linkedin">
              <img src="assets/multimedia/icons/linkedin-sobre.svg" alt="icono-linkedin" title="linkedin"
                class="linkedin d-none">
            </a>
          </div>
          <div class="col-12 btn-header-action">
            <a href="https://www.educacioneverest.com/aulavirtual" class="btn" target="_blank">
              <img loading="lazy" src="assets/multimedia/icons/btn_aulavirtual.svg" alt="icono-aula-virtual" title="aula-virtual">
              <span>AULA VIRTUAL</span>
            </a>
            <a href="https://www.educacioneverest.com/registro" class="btn" target="_blank">
              <img loading="lazy" src="assets/multimedia/icons/btn_preregistro.svg" alt="icono-pre-registro" title="pre-registro">
              <span>PRE-REGISTRO</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="container-fluid px-0">
        <?php
          include_once 'model/functions/contador_visitas.php';
          include_once 'model/functions/select_banner.php';
        ?>
    <form id="form_informacion">
      <div class="row m-0">
        <div class="col-lg-8 banner">
          <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="true"  data-touch="true" data-wrap="true">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
              <div class="carousel-item" data-interval="<?php echo $intervalo_banner[0];?>">
                <img src="<?php echo $img_banner[0];?>" class="d-block w-100"
                  alt="<?php echo $alt_banner[0];?>"/>
              </div>
              <div class="carousel-item" data-interval="<?php echo $intervalo_banner[1];?>">
                <img src="<?php echo $img_banner[1];?>" class="d-block w-100"
                  alt="<?php echo $alt_banner[1];?>"/>
              </div>
              <div class="carousel-item" data-interval="<?php echo $intervalo_banner[2];?>">
                <img src="<?php echo $img_banner[2];?>" class="d-block w-100"
                  alt="<?php echo $alt_banner[2];?>"/>
              </div>
              <div class="carousel-item" data-interval="<?php echo $intervalo_banner[3];?>">
                <img src="<?php echo $img_banner[3];?>" class="d-block w-100"
                  alt="<?php echo $alt_banner[3];?>"/>
              </div>
              <div class="carousel-item active" data-interval="<?php echo $intervalo_banner[4];?>">
                <img src="<?php echo $img_banner[4];?>" class="d-block w-100"
                  alt="<?php echo $alt_banner[4];?>"/>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-lg-4 informacion">
          <div class="row inf-box">
            <div class="form-head">
              <h1>Solicita Información</h1>
            </div>
            <div class="col-md-12">
              <div class="">
                <select class="custom-select" name="carrera" id="f_carrera">
                  <?php include_once 'model/functions/select_list_carreras.php'; ?>
                </select>
              </div>
              <div class="">
                <input type="text" name="nombre" id="f_nombre" class="form-control" placeholder="Nombre y Apellidos"
                  maxlength="50" />
              </div>
              <div class="">
                <input type="email" name="correo" id="f_correo" class="form-control" placeholder="Correo electrónico"
                  maxlength="50" />
              </div>
              <div class="">
                <input type="tel" name="numero" id="f_numero" class="form-control" placeholder="Número telefónico"
                  maxlength="10" />
              </div>
            </div>
            <div class="form-foot">
              <div class="mx-3">
                <input type="text" name="codigo" id="f_codigo" class="form-control" placeholder="¿Tienes un código?"
                  maxlength="6" />
              </div>
              <div>
                <button type="submit" id="btn_solicitar" class="btn form-btn">Solicitar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <section class="container-somos shadow-lg">
    <nav>
      <div class="nav" id="nav-tab" role="tablist">
        <a class="nav-link col-md-4" id="nav-mision-tab" data-toggle="tab" href="#nav-mision" role="tab"
          aria-controls="nav-mision" aria-selected="false">
          <div class="btn-somos">
            <span class="span-somos">MISIÓN</span>
            <div class="id-somos-mision" id="anim_mision"></div>
          </div>
        </a>
        <a class="nav-link col-md-4" id="nav-vision-tab" data-toggle="tab" href="#nav-vision" role="tab"
          aria-controls="nav-vision" aria-selected="false">
          <div class="btn-somos">
            <span class="span-somos">VISIÓN</span>
            <div class="id-somos-vision" id="anim_vision"></div>
          </div>
        </a>
        <a class="nav-link col-md-4" id="nav-filosofia-tab" data-toggle="tab" href="#nav-filosofia" role="tab"
          aria-controls="nav-filosofia" aria-selected="false">
          <div class="btn-somos">
            <span class="span-somos">FILOSOFÍA</span>
            <div class="id-somos-filosofia" id="anim_filosofia"></div>
          </div>
        </a>
      </div>
    </nav>
    <div class="tab-content tab-somos" id="nav-tabContent">
      <div class="tab-pane bg-somos fade size" id="nav-mision" role="tabpanel" aria-labelledby="nav-mision-tab">
        <div class="row m-0">
        <div class="col-md-6 col-somos">
            <h1>MISIÓN</h1>
            <p class="break_p">
              En el Instituto Everest de Sinaloa se trabaja permanentemente por la excelencia profesional, la
              pertinencia social y la inclusión educativa; se distingue por la gestión eficiente de innovadores
              programas académicos, con basamento en la tecnología y la
              educación a distancia como modelos abiertos e interdependientes de la actual sociedad del conocimiento,
              que contribuyen a la formación de profesionales competentes, con una fuerte proyección nacional e
              internacional.
            </p>
          </div>
          <div class="col-md-6 col-somos" id="anim_mision_open"></div>
        </div>
      </div>
      <div class="tab-pane bg-somos fade size" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
        <div class="row m-0">
          <div class="col-md-6 col-somos">
            <h1>VISIÓN</h1>
            <p class="break_p">
              Ser una institución de excelencia, con un claustro docente de alta profesionalidad, cuyos procesos
              formativos, científicos, culturales y de vinculación universitaria se distinguen por su compromiso con la
              sociedad mexicana, su sostenibilidad y su prosperidad,
              lo que le confiere la condición de ser una institución de vanguardia en la educación superior.
            </p>
          </div>
          <div class="col-md-6 col-somos" id="anim_vision_open"></div>
        </div>
      </div>
      <div class="tab-pane bg-somos fade size" id="nav-filosofia" role="tabpanel" aria-labelledby="nav-filosofia-tab">
        <div class="row m-0">
        <div class="col-md-6 col-somos">
            <h1>FILOSOFÍA</h1>
            <p class="break_p">
              La filosofía de trabajo del Instituto Everest de Sinaloa reconoce los principios y valores compartidos que
              sustentan su identidad científico-profesional y que orientan el quehacer académico, cultural y de
              vinculación universitaria de esta institución.
            </p>
          </div>
          <div class="col-md-6 col-somos" id="anim_filosofia_open"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="container-oferta">
    <div class="size title-oferta">
      <h1>
        <n class="yell">OFERTA</n><b> ACADÉMICA</b>
      </h1>
      <div class="row m-0 px-3">
        <div class="col-md-4 p-oferta order-md-1">
          <button type="button" class="btn btn-oferta" id="btn_lic">Licenciaturas <img loading="lazy" src="assets/multimedia/icons/menu-oferta.svg" alt="icono menu oferta"></button>
        </div>
        <div class="row inf-oferta order-md-4" id="format_lic">
          <div class="col-md-4 col-oferta-1">
            <div class="row h-100">
              <div class="col-12">
                <img loading="lazy" src="assets/multimedia/img/img1.jpg" alt="" class="col-oferta-1-img">
              </div>
              <?php 
                include_once 'model/functions/select_datos_grado.php'; 
                $array_dl = obtenerDatosLic();
                $var_duraciones_lic = obtenerDatosDurLic();
                $list_lic = obtenerCarrerasLic();
                
                $array_dm = obtenerDatosMae();
                $var_duraciones_mae = obtenerDatosDurMae();
                $list_mae = obtenerCarrerasMae();
                
                $array_dd = obtenerDatosDoc();
                $var_duraciones_doc = obtenerDatosDurDoc();
                $list_doc = obtenerCarrerasDoc();
              ?>
              <div class="col-12">
                <div class="img-txt-oferta"><img loading="lazy" src="assets/multimedia/icons/i-formato.svg" alt="icono formato"> <b
                    class="yell pr-1">Formato </b><?php echo $array_dl['formato']; ?></div>
                <?php echo $var_duraciones_lic; ?>
                <div class="img-txt-oferta"><img loading="lazy" src="assets/multimedia/icons/i-inicio.svg" alt="icono inicio de clases"> <b
                    class="yell pr-1">Inicio de clases </b><?php echo $array_dl['inicio_clases']; ?></div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-oferta-2">
            <button type="button" class="btn btn-requisitos" data-toggle="modal" data-target="#requisitosLic">
              <img loading="lazy" src="assets/multimedia/icons/i-requisitos.svg" alt="icono requisitos" class="h2-requisitos-img">Ver
              requisitos de admisión
            </button>
                <?php echo $list_lic; ?>
          </div>
        </div>
        <div class="col-md-4 p-oferta order-md-2">
          <button type="button" class="btn btn-oferta" id="btn_mae">Maestrías <img loading="lazy" src="assets/multimedia/icons/menu-oferta.svg" alt="icono menu oferta"></button>
        </div>
        <div class="row inf-oferta order-md-5" id="format_mae">
          <div class="col-md-4 col-oferta-1">
            <div class="row h-100">
              <div class="col-12">
                <img loading="lazy" src="assets/multimedia/img/img1.jpg" alt="" class="col-oferta-1-img">
              </div>
              <div class="col-12">
                <div>
                  <div class="img-txt-oferta"><img loading="lazy" src="assets/multimedia/icons/i-formato.svg" alt="icono formato"> <b
                      class="yell pr-1">Formato </b><?php echo $array_dm['formato']; ?></div>
                  <?php echo $var_duraciones_mae; ?>
                  <div class="img-txt-oferta"><img loading="lazy" src="assets/multimedia/icons/i-inicio.svg" alt="icono inicio de clases"> <b
                      class="yell pr-1">Inicio de clases </b><?php echo $array_dm['inicio_clases']; ?></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-oferta-2">
          <button type="button" class="btn btn-requisitos" data-toggle="modal" data-target="#requisitosMae">
              <img loading="lazy" src="assets/multimedia/icons/i-requisitos.svg" alt="icono requisitos" class="h2-requisitos-img">Ver
              requisitos de admisión
            </button>
                <?php echo $list_mae; ?>
          </div>
        </div>
        <div class="col-md-4 p-oferta order-md-3">
          <button type="button" class="btn btn-oferta" id="btn_doc">Doctorados <img loading="lazy" src="assets/multimedia/icons/menu-oferta.svg" alt="icono menu oferta"></button>
        </div>
        <div class="row inf-oferta order-md-6" id="format_doc">
          <div class="col-md-4 col-oferta-1">
            <div class="row h-100">
              <div class="col-12">
                <img loading="lazy" src="assets/multimedia/img/img1.jpg" alt="" class="col-oferta-1-img">
              </div>
              <div class="col-12">
                <div class="img-txt-oferta"><img loading="lazy" src="assets/multimedia/icons/i-formato.svg" alt="icono formato"> <b
                    class="yell pr-1">Formato </b><?php echo $array_dd['formato']; ?></div>
                <?php echo $var_duraciones_doc; ?>
                <div class="img-txt-oferta"><img loading="lazy" src="assets/multimedia/icons/i-inicio.svg" alt="icono inicio de clases"> <b
                    class="yell pr-1">Inicio de clases </b><?php echo $array_dd['inicio_clases']; ?></div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-oferta-2">
          <button type="button" class="btn btn-requisitos" data-toggle="modal" data-target="#requisitosDoc">
              <img loading="lazy" src="assets/multimedia/icons/i-requisitos.svg" alt="icono requisitos" class="h2-requisitos-img">Ver
              requisitos de admisión
            </button>
                <?php echo $list_doc; ?>
          </div>
        </div>
      </div>
      <!-- <div>
        <h1 class="my-4">
          <n class="yell">FORMACIÓN </n><b>CONTINUA</b>
        </h1>
      </div>
      <div class="row m-0 box-fc">
        <div class="col-xl-6 sec1-fc">
          <img loading="lazy" src="assets/multimedia/img/curso1.png" alt="Imagen curso" class="sec1-fc-img1" loading="lazy">
        </div>
        <div class="col-xl-4 sec2-fc">
          <div class="row m-0">
            <div class="col-12 p-0">
              <h2 class="sec2-fc-h2">Del 11 al 14 de agosto</h2>
            </div>
            <div class="col-6 sec2-fc-hora">
              <div><span class="sec2-fc-hora-span">Hora del centro de México</span></div>
              <div>
                <h5 class="sec2-fc-hora-h5">6:00 P.M. a 8:00 P.M.</h5>
              </div>
            </div>
            <div class="col-6 sec2-fc-hora">
              <div><span class="sec2-fc-hora-span yell">Hora del Pacífico</span></div>
              <div>
                <h5 class="sec2-fc-hora-h5 yell">5:00 P.M. a 7:00 P.M.</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 sec3-fc">
          <button class="btn btn-warning sec3-fc-btn">Registrarme</button>
        </div>
      </div>
      <div class="row m-0 box-fc">
        <div class="col-xl-6 sec1-fc">
          <img loading="lazy" src="assets/multimedia/img/curso2.png" alt="Imagen curso" class="sec1-fc-img1" loading="lazy">
        </div>
        <div class="col-xl-4 sec2-fc">
          <div class="row m-0">
            <div class="col-12 p-0">
              <h2 class="sec2-fc-h2">Inicia 2 de junio</h2>
            </div>
            <div class="col-12 p-0">
              <h5 class="sec2-fc-h2-h5">Sesiones: lunes, miercoles y viernes</h5>
            </div>
            <div class="col-6 sec2-fc-hora">
              <div><span class="sec2-fc-hora-span">Hora del centro de México</span></div>
              <div>
                <h5 class="sec2-fc-hora-h5">6:00 P.M.</h5>
              </div>
            </div>
            <div class="col-6 sec2-fc-hora">
              <div><span class="sec2-fc-hora-span yell">Hora del Pacífico</span></div>
              <div>
                <h5 class="sec2-fc-hora-h5 yell">7:00 P.M.</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 sec3-fc align-items-end">
          <button class="btn btn-warning sec3-fc-btn">Registrarme</button>
        </div>
      </div>
      <div class="row m-0 box-fc">
        <div class="col-xl-6 sec1-fc">
          <img loading="lazy" src="assets/multimedia/img/webinar1.png" alt="Imagen curso" class="sec1-fc-img1" loading="lazy">
        </div>
        <div class="col-xl-4 sec2-fc">
          <div class="row m-0">
            <div class="col-12 p-0">
              <h2 class="sec2-fc-h2">30 de junio</h2>
            </div>
            <div class="col-6 sec2-fc-hora">
              <div><span class="sec2-fc-hora-span">Hora del centro de México</span></div>
              <div>
                <h5 class="sec2-fc-hora-h5">6:00 P.M.</h5>
              </div>
            </div>
            <div class="col-6 sec2-fc-hora">
              <div><span class="sec2-fc-hora-span yell">Hora del Pacífico</span></div>
              <div>
                <h5 class="sec2-fc-hora-h5 yell">7:00 P.M.</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 sec3-fc align-items-end">
          <button class="btn btn-warning sec3-fc-btn">Registrarme</button>
        </div>
      </div>
      <div class="row m-0 box-fc">
        <div class="col-xl-6 sec1-fc">
          <img loading="lazy" src="assets/multimedia/img/conferencia1.png" alt="Imagen curso" class="sec1-fc-img1" loading="lazy">
        </div>
        <div class="col-xl-4 sec2-fc">
          <div class="row m-0">
            <div class="col-12 p-0">
              <h2 class="sec2-fc-h2">27 de agosto</h2>
            </div>
            <div class="col-6 sec2-fc-hora">
              <div><span class="sec2-fc-hora-span">Hora del centro de México</span></div>
              <div>
                <h5 class="sec2-fc-hora-h5">6:00 P.M.</h5>
              </div>
            </div>
            <div class="col-6 sec2-fc-hora">
              <div><span class="sec2-fc-hora-span yell">Hora del Pacífico</span></div>
              <div>
                <h5 class="sec2-fc-hora-h5 yell">7:00 P.M.</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 sec3-fc align-items-end">
          <button class="btn btn-warning sec3-fc-btn">Registrarme</button>
        </div>
      </div> -->
      <h1 class="px-4">BENEFICIOS DE ESTUDIAR <b><i class="yell">EN LÍNEA</i> CON NOSOTROS</b></h1>
      <div class="container-fluid row row-cols-2 row-cols-sm-3 row-cols-md-6 beneficios">
        <div class="col">
          <img src="assets/multimedia/icons/beneficio1.svg" alt="" loading="lazy">
          <p>Docentes internacionales</p>
        </div>
        <div class="col">
          <img src="assets/multimedia/icons/beneficio2.svg" alt="" loading="lazy">
          <p>Plataforma dinámica 24/7</p>
        </div>
        <div class="col">
          <img src="assets/multimedia/icons/beneficio3.svg" alt="" loading="lazy">
          <p>Tu fijas los horarios</p>
        </div>
        <div class="col">
          <img src="assets/multimedia/icons/beneficio4.svg" alt="" loading="lazy">
          <p>Tutores altamente capacitados</p>
        </div>
        <div class="col">
          <img src="assets/multimedia/icons/beneficio5.svg" alt="" loading="lazy">
          <p>Estudias y trabajas</p>
        </div>
        <div class="col">
          <img src="assets/multimedia/icons/beneficio6.svg" alt="" loading="lazy">
          <p>Costos <br> accesibles</p>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid">
    <div class="row contacto size">
      <div class="col-md-8 info-contacto">
        <div class="row">
          <p>¡Contáctanos!</p>
        </div>
        <div class="row">
          <div class="col info-8">
            <img loading="lazy" src="assets/multimedia/icons/c-horario.svg" alt="">
            <p>Horario de atención de 9:00 a.m. a 6:00 p.m.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 info-10">
            <img loading="lazy" src="assets/multimedia/icons/c-tel.svg" alt="">
            <a class="a-link" href="tel:+526699300283">
              <p>669 930 0283</p>
            </a>
          </div>
          <div class="col-md-6 info-10">
            <img loading="lazy" src="assets/multimedia/icons/c-cel.svg" alt="">
            <a class="a-link" href="tel:+525570814419">
             <p>557 081 4419</p>
            </a>
          </div>
          <div class="col-12 info-8">
            <img loading="lazy" src="assets/multimedia/icons/c-correo.svg" alt="">
            <a class="a-link" href="mailto:asesoracademico@educacioneverest.com">
             <p class="brake-word">asesoracademico@educacioneverest.com</p>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col info-8">
            <img loading="lazy" src="assets/multimedia/icons/c-ubicacion.svg" alt="">
            <p>
              Av. Óscar Pérez Escoboza y Av. Cristobal Colón, Plaza Mazabasto, local #8, Mazatlán, Sinaloa, México. C.P.
              82129.</p>
          </div>
        </div>
      </div>
      <div class="col mapa-contacto">
        <a href="https://goo.gl/maps/moggbRG3129Ywq5H9" target="_blank">
          <img loading="lazy" src="assets/multimedia/img/mapa.png" alt="">
        </a>
      </div>
    </div>
  </section>
  <section class="container-fluid px-0 bolsa-trabajo">
    <form id="form_bt">
      <div class="row mw-bt">
        <div class="col-5 tc asfe">
          <img loading="lazy" src="assets/multimedia/icons/trabajadores-1.svg" alt="" class="bt-img" id="bt_img1">
          <img src="assets/multimedia/icons/trabajadores.svg" alt="" class="bt-img d-none" id="bt_img2">
        </div>
        <div class="col-7 tc asc bt-txt">
          <h5 class="bt-h5">Da click aquí y</h5>
          <h4 class="bt-h4">¡súmate a nuestro equipo de trabajo!</h4>
        </div>
        <div class="col-md-12 bt-opciones d-none" id="div_bt">
          <p class="bt-opciones-p">Bolsa de trabajo</p>
          <p class="bt-opciones-p2">Seleccione el puesto de interés.</p>
            <?php
              include_once 'model/functions/select_bolsa.php'; 
            ?>
        </div>

        <div class="bt-form d-none">

            <div><p class="bt-opciones-p py-4">Llena el siguiente formulario para contactarte.</p></div>
            <div class="">
              <input type="text" name="nombre_bt" id="nombre_bt" class="form-control shadow-bt" placeholder="Nombre y Apellidos"
                required="" />
            </div>
            <div class="">
              <input type="text" name="correo_bt" id="correo_bt" class="form-control shadow-bt" placeholder="Correo electrónico"
                required="" />
            </div>
            <div class="">
              <input type="text" name="telefono_bt" id="telefono_bt" class="form-control shadow-bt" placeholder="Número telefónico"
                required="" />
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-bt" id="btn_bt">Enviar</button>
            </div>

        </div>
        <div>

        </div>
      </div>
    </form>
  </section>
  <footer class="container-fluid">
    <div class="row visitas">
      <div class="box-contador">
        <p class="txt-visitas">VISITAS MENSUALES</p>
        <p class="contador"><?php echo $show['COUNT(fecha)']; ?></p>
      </div>
      <div class="box-contador">
        <p class="txt-visitas">VISITAS TOTALES</p>
        <p class="contador"><?php echo $array_Total['totales']; ?></p>
      </div>
      <div class="col-12 box-derechos">Copyright © 2021 Instituto Everest Derechos Reservados | <a href="#">Aviso de
          privacidad</a></div>
    </div>
  </footer>
  <?php 
    include_once 'model/modal/requisitos_lic.php'; 
    include_once 'model/modal/requisitos_mae.php'; 
    include_once 'model/modal/requisitos_doc.php'; 
  ?>
  <script src="assets/js/jquery-3.4.1.min.js "></script>
  <script src="assets/js/everest.min.js "></script>
  <script src="assets/js/lottie-5.7.11.min.js"></script>
  <script src="assets/js/sweetalert2.all.min.js"></script>
  <script src="assets/js/custom.js?v=<?php echo $v;?>"></script>
  <script src="assets/js/validate.js?v=<?php echo $v;?>"></script>
</body>

</html>