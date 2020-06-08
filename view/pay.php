<?php include("forms/conect.php"); ?>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
<head>
    <title>Pagamento</title>
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="public/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/vendor/owl.carousel/public/owl.carousel.min.css" rel="stylesheet">
  <link href="public/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public/css/form.css" rel="stylesheet">
    <link href="public/css/style2.css" rel="stylesheet">
    <script src="public/js/f.js"></script>
    </head>
    <body>
        <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>4health</span></a></h1>
        
      </div>

      
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Sair</a></li>
        </ul>
          
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->
        <section id="hero">

    <div class="container">
      
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
<div class="container">
	<div class="row-fluid">
      <form class="form-horizontal">
        <fieldset>
          <div id="legend">
            <legend class="">Pagamento</legend>
          </div>
     
          <!-- Name -->
          <div class="control-group">
            <label class="control-label"  for="username">Nome do Cartão</label>
            <div class="controls">
              <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
            </div>
          </div>
     
          <!-- Card Number -->
          <div class="control-group">
            <label class="control-label" for="email">Numero Cartão</label>
            <div class="controls">
              <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
            </div>
          </div>
     
          <!-- Expiry-->
          <div class="control-group">
            <label class="control-label" for="password">Data de vencimento cartão</label>
            <div class="controls">
              <select class="span3" name="expiry_month" id="expiry_month">
                <option></option>
                <option value="01">Janeiro (01)</option>
                <option value="02">Fevereiro (02)</option>
                <option value="03">Março (03)</option>
                <option value="04">Abril (04)</option>
                <option value="05">Maio (05)</option>
                <option value="06">Junho (06)</option>
                <option value="07">Julho(07)</option>
                <option value="08">Agosto (08)</option>
                <option value="09">Setembro (09)</option>
                <option value="10">Outubro (10)</option>
                <option value="11">Novembro (11)</option>
                <option value="12">Dezembro (12)</option>
              </select>
              <select class="span2" name="expiry_year">
                <option value="13">2020</option>
                <option value="14">2021</option>
                <option value="15">2022</option>
                <option value="16">2023</option>
                <option value="17">2024</option>
                <option value="18">2025</option>
                <option value="19">2026</option>
                <option value="20">2027</option>
                <option value="21">2028</option>
                <option value="22">2029</option>
                <option value="23">2030</option>
              </select>
            </div>
          </div>
     
          <!-- CVV -->
          <div class="control-group">
            <label class="control-label"  for="password_confirm">CVV SEGURANÇA</label>
            <div class="controls">
              <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="span2">
            </div>
          </div>
     
         
     
          <!-- Submit -->
          <div class="control-group">
            <div class="controls">
            <button class="btn btn-success"><a href="Sucesso%20pay.html" class="btn btn-success">Finalizar</a></button>
            </div>
          </div>
     </main><!-- End #main -->

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
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          
          

        </div>
      </div>
    </div>
          

    <div class="container">
      <div class="copyright">
        &copy; FOCO <strong><span>FOCOOOOO</span></strong>. FOCO 2020
      </div>
      <div class="credits">
        
        FOCO 2020 <a href="https://bootstrapmade.com/">FOCO 2020</a>
      </div>
    </div>
          </div>
  </footer><!-- End Footer -->

        </fieldset>
        </form>
    </div>
        </div>
    </body>
</html>