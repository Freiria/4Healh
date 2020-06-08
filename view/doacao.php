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
                <a href="pay.html" class="btn-buy">Faça sua doação agora mesmo</a>
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
                <a href="pay.html" class="btn-buy">Faça sua doação agora mesmo</a>
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
                <a href="pay.html" class="btn-buy">Faça sua doação agora mesmo</a>
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
                <a href="pay.html" class="btn-buy">Envie aqui</a>
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