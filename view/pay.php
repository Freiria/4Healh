<?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config.php'; ?>

<?php require BASE_PATH . DS . 'includes' . DS . 'head.php'; ?>

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
      </nav>
    </div>
  </header>

  <?php require BASE_PATH . DS . 'includes' . DS . 'waves.php'; ?>

  <div class="main">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <form role="form">
          <fieldset>
            <div id="legend">
              <legend class="">Pagamento</legend>
            </div>
      
            <!-- Name -->
            <div class="form-group">
              <label class="control-label"  for="username">Nome do Cartão</label>
              <input type="text" id="username" name="username" class="form-control input-lg">
            </div>
      
            <!-- Card Number -->
            <div class="form-group">
              <label class="control-label" for="email">Numero Cartão</label>
              <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="form-control input-lg">
              </div>
            </div>
      
            <!-- Expiry-->
            <div class="form-group">
              <label class="control-label" for="password">Data de vencimento cartão</label>
              <div class="controls">
                <select class="span3" name="expiry_month" class="form-control input-lg">
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
                <select class="span2" name="expiry_year" class="form-control input-lg">
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
            <div class="form-group">
              <label class="control-label"  for="password_confirm">CVV SEGURANÇA</label>
              <div class="controls">
                <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="span2">
              </div>
            </div>
      
            <!-- Submit -->
            <div class="form-group">
              <div class="controls">
              <button class="btn btn-success"><a href="Sucesso%20pay.html" class="btn btn-success">Finalizar</a></button>
              </div>
            </div>

          </fieldset>
        </form>
      </div>
      <div class="col-md-3"></div>
    </div>

    <?php require BASE_PATH . DS . 'includes' . DS . 'footer.php'; ?>
  </div>

  <div id="preloader"></div>
  <?php require BASE_PATH . DS . 'includes' . DS . 'scripts.php'; ?>

</body>
</html>