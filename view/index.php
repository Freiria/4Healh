
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>4Health</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  


</head>
    
    <script
src="https://code.jquery.com/jquery-1.11.3.min.js"
integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="
crossorigin="anonymous"></script> <!-- remova se você já tiver o jquery sendo carregado em sua página -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<style>
/*
Created on : 24/02/2019, 13:27:07
Author : ebrahimpleite
*/
.wc_whatsapp_app {
position: fixed;
bottom: 30px;
z-index: 9999999999; /*Força o widget ficar acima de qualquer elemento*/
display: flex;
align-items: center;
}

.wc_whatsapp_app.left {
left: 15px;
}

.wc_whatsapp_app.right {
right: 15px;
}

.wc_whatsapp {
width: 50px;
height: 50px;
display: block;
border-radius: 50%;
background: #25d366;
box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
}

.wc_whatsapp:hover,
.wc_whatsapp:focus {
box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
}

.wc_whatsapp::before {
content: "";
display: block;
background: url("data:image/svg+xml;charset=UTF-8,%3csvg aria-hidden='true' focusable='false' data-prefix='icon' data-icon='whatsapp' class='svg-inline' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3e%3cpath fill='%23fff' d='M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z'%3e%3c/path%3e%3c/svg%3e") top center no-repeat;
height: 35px;
margin-top: 6px;
}

.wc_whatsapp p {
font-family: 'Arial', sans-serif;
}

.wc_whatsapp_secondary,
.wc_whatsapp_primary {
display: none;
}

.wc_whatsapp_secondary {
max-width: 300px;
}

.wc_whatsapp_secondary p {
margin-left: 15px;
border: 1px solid #e2e2e2;
padding: 5px 10px;
border-radius: 5px;
position: relative;
color: #000;
font-size: 14px;
background: #fff;
}

.wc_whatsapp_secondary p::before {
top: 20px;
left: -9px;
content: '';
position: absolute;
background: white;
border-bottom: 1px solid #e2e2e2;
border-right: 1px solid #e2e2e2;
left: -5px;
top: 50%;
margin-top: -4px;
width: 8px;
height: 8px;
z-index: 1;
-ms-transform: rotate(135deg);
-webkit-transform: rotate(135deg);
-moz-transform: rotate(135deg);
-o-transform: rotate(135deg);
transform: rotate(135deg);
}

.wc_whatsapp_primary {
border-radius: 5px;
border: 1px solid #eaeaea;
background: #fff;
padding: 10px;
bottom: 70px;
align-items: center;
max-width: 350px;
box-shadow: 7px 7px 15px 8px rgba(0, 0, 0, 0.17);
position: absolute;
width: 350px;
}

.wc_whatsapp_primary img {
width: 50px;
border-radius: 5px;
margin-left: 10px;
}

.wc_whatsapp_primary p {
margin: 20px;
border: 1px solid #e2e2e2;
padding: 10px;
border-radius: 5px;
position: relative;
color: #000;
font-size: 14px;
}

.wc_whatsapp_primary p::before {
top: 20px;
left: -9px;
content: '';
position: absolute;
background: white;
border-bottom: 1px solid #e2e2e2;
border-right: 1px solid #e2e2e2;
left: -5px;
top: 50%;
margin-top: -4px;
width: 8px;
height: 8px;
z-index: 1;
-ms-transform: rotate(135deg);
-webkit-transform: rotate(135deg);
-moz-transform: rotate(135deg);
-o-transform: rotate(135deg);
transform: rotate(135deg);
}

.wc_whatsapp_primary .close {
position: absolute;
right: 10px;
top: 10px;
font-size: 14px;
color: #000;
opacity: .5;
}

.wc_whatsapp_primary .close:hover,
.wc_whatsapp_primary .close:focus {
color: #f00;
opacity: 1;
}
</style>
<script type='text/javascript'>
/*
Created on : 24/02/2019, 13:27:07
Author : ebrahimpleite
*/
$(document).ready(function () {
var cookieMessagePrimary = $.cookie("wc_whatsapp_primary");
if (cookieMessagePrimary !== '1') {
$.cookie("wc_whatsapp_primary", 1, {expires: 30}); //Mensagem Principal volta exibir após de 30 dias
setTimeout(showMessagePrimary, 4000);
} else {
//se tiver no mobile, a mensagem primária não exibe
if (screen.width > 550) {
setTimeout(showMessageSecondary, 4000);
}
}
//esconde mensagem secundária ao clicar
$('.wc_whatsapp_secondary').click(function () {
$(this).fadeOut(400);
});
//esconde mensagem primária ao clicar
$('.wc_whatsapp_primary').click(function () {
$(this).fadeOut(400);
});
//controla botão de fechar da mensagem primária
$('.wc_whatsapp_primary .close').click(function () {
$('.wc_whatsapp_primary').fadeOut(400);
return false;
});
//esconde mensagem secundária ao passar o mouse no botão
$('.wc_whatsapp').hover(function () {
$('.wc_whatsapp_secondary').fadeOut(400);
});

//função para exibir mensagem secundária
function showMessageSecondary() {
$('.wc_whatsapp_secondary').fadeIn(400);
}

//função para exibir mensagem primária
function showMessagePrimary() {
$('.wc_whatsapp_primary').fadeIn(400).css("display", "flex");
}
});
</script>
<div class="wc_whatsapp_app right">
<a href="https://wa.me/5511995107382" target="_blank" class="wc_whatsapp" >
<span class="wc_whatsapp_primary">
<span class="close">x</span>
<img src="https://web.whatsapp.com/"/>
<p>Olá Tudo bom ?</p>
</span>
</a>
<a href="https://wa.me/5511995107382" target="_blank" class="wc_whatsapp_secondary" >
<p>Gostaria de saber mais sobre a ONG 4health</p>
</a>
</div>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>4health</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Inicio</a></li>
          <li><a href="#about">Quem somos</a></li>
          <li><a href="#pricing">Faça sua Doação</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
          
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1><span>FAÇA SUA PARTE E AJUDE AQUELES QUE PRECISAM</span></h1>
            <h2>#FIQUEEMCASA</h2>
              
            <div class="text-center text-lg-left">
              <a href="VoluntarioForm.php" class="btn-get-started scrollto">Seja um voluntário</a>
            </div>
              <br>
              <br>
              <div class="text-center text-lg-left">
              <a href="DoadorForm.php" class="btn-get-started2 scrollto">Seja um doador</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/logo.png" class="img-fluid animated">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6" data-aos="fade-right">
            
              <img src="assets/img/4.png" class="img-fluid animated2" width="600px" height="100px">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>CONHEÇA NOSSA HISTÓRIA</h3>
            <p>Somos uma organização que trabalha por ajuda a sociedade, igualdade de gênero e pelo fim da pobreza. Fomos fundados em 2020 e estamos presentes em 2 estados do país. Trabalhamos em parceria com comunidades e organizações locais em projetos de saúde, economia e saneamento basico, igualdade de gênero e participação e democracia.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Nossa Missão</a></h4>
              <p class="description">Um mundo justo, igualitário e sustentável, no qual cada pessoa tenha o direito a uma vida digna, livre da pobreza e com a melhor qualidade de vida.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nossa Missão</a></h4>
              <p class="description">Alcançar melhoria no sistema de sapude, igualdade de gênero e a erradicação da pobreza por meio do trabalho com pessoas que vivem em situação de pobreza e de exclusão, suas comunidades, bem como suas organizações e apoiadores.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Nossos Valores</a></h4>
              <p class="description">Respeito mútuo com o próximo, Integridade,Solidariedade com as pessoas que vivem em situação de calamidade na pobreza e saúde.</p>
            </div>

          </div>
        </div>

      </div>
    
    </section><!-- End About Section -->
<section>
       <body>
    </body>
    </body>
    
      </section>
    
    
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Doações</h2>
          <p>Faça sua doação</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Cesta Basica</h3>
              <h4><sup>R$</sup>49,00<span> / 1 </span></h4>
              <ul>
                <li>ARROZ</li>
                <li>FEIJÃO</li>
                <li>CAFÉ</li>
                <li >MACARRÃO</li>
                <li >ETC...</li>
              </ul>
              <div class="btn-wrap">
                <a href="Login/index.html" class="btn-buy">Faça sua doação agora mesmo</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
              <h3>Valores apartir de:</h3>
              <h4><sup>R$</sup>10,00<span>/depósito</span></h4>
              <ul>
                <li>CASAS DE REPOUSO</li>
                <li>SAÚDE</li>
                <li>INFRAESTRUTURA</li>
                <li>PESQUISAS</li>
                <li >FESTIVAIS</li>
              </ul>
              <div class="btn-wrap">
                <a href="Login/index.html" class="btn-buy">Faça sua doação agora mesmo</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <h3>Projetos</h3>
                <h4><sup>R$</sup>10,00<span> / Por mês</span></h4>
              <ul>
                <li>AULA EM COMUNIDADES</li>
                <li>ANTI DROGRAS</li>
                <li>ESPORTES</li>
                <li>SAÚDE</li>
                <li>UM LAR DO BEM</li>
                
              </ul>
              <div class="btn-wrap">
                <a href="Login/index.html" class="btn-buy">Faça sua doação agora mesmo</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="400">
              <span class="advanced">EM ALTA</span>
              <h3>Outras doação</h3>
              <h4><sup>LIVRE</sup></h4>
              <ul>
                <li>ROUPAS</li>
                <li>COMIDAS</li>
                <li>COBERTORES</li>
                <li>ELETRODOMETISCOS</li>
                <li>PATROCIONIOS</li>
                   <li>OUTROS</li>
              </ul>
              <div class="btn-wrap">
                <a href="Login/index.html" class="btn-buy">Envie aqui</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    
  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div id="contact">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-6">
            <div class="footer-info">
              <h3>Entre em contato conosco</h3>
              <p class="pb-3"><em>SUA AJUDA SERÁ BEM-VINDA</em></p>
              <p>
                Rua mirandinha <br>
                SP 01232-055, BRASIL<br><br>
                <strong>TELEFONE:</strong> 11 2312-1212<br>
                <strong>Email:</strong> contato@4health.org.com<br>
              </p>
              
            </div>
          </div>

          
          

        </div>
      </div>
    </div>
          

    
          </div>
  </footer><!-- End Footer -->

  
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
          </g>
        </defs>
      </svg>
    </section>
</body>

</html>