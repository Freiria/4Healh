<?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config.php'; ?>

<?php require BASE_PATH . DS . 'includes' . DS . 'head.php'; ?>

<body>
  <?php require BASE_PATH . DS . 'includes' . DS . 'menu.php'; ?>

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

  <?php require BASE_PATH . DS . 'includes' . DS . 'waves.php'; ?>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6" data-aos="fade-right">
            
              <img src="<?php echo BASE_URL; ?>public/img/4.png" class="img-fluid animated2" width="600px" height="100px">
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

    <?php require BASE_PATH . DS . 'includes' . DS . 'footer.php'; ?>
  </div>

  <div id="preloader"></div>

  <?php require BASE_PATH . DS . 'includes' . DS . 'scripts.php'; ?>
</body>

</html>