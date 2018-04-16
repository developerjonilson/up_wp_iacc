<nav class="navbar navbar-expand-lg navbar-light bg-light nav-yellow font-bold ml-auto  nav-fonts" style="background-image: url('img/doodle_bg.png');">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php wp_nav_menu( array( 'menu' => 'header-menu',
          'theme_location'    => 'menu-princiapl',
          'depth'             => 0,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse main-menu',
          'container_id'      => 'navbarSupportedContent',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
      );
  ?>

  <!-- <div class="collapse navbar-collapse ml-auto nav-font-color" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            SOBRE NÓS
          </a>
          <div class="dropdown-menu dropdown-backgroud" aria-labelledby="navbarDropdown">
            <a class="dropdown-item font-bold" href="#about">O IACC</a>
            <a class="dropdown-item font-bold" href="#">SERVIÇOS PRESTADOS</a>
            <a class="dropdown-item font-bold" href="#">MISSÃO, VISÃO E VALORES</a>
            <a class="dropdown-item font-bold" href="#">ESTATUTO IACC</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              O CÂNCER INFANTOJUVENIL
            </a>
            <div class="dropdown-menu dropdown-backgroud" aria-labelledby="navbarDropdown">
              <a class="dropdown-item font-bold" href="#">O QUE É O CÂNCER</a>
              <a class="dropdown-item font-bold" href="#">SINAIS E SINTOMAS</a>
              <a class="dropdown-item font-bold" href="#">TIPOS DE CÂNCER</a>
              <a class="dropdown-item font-bold" href="#">MATERIAIS EDUCATIVOS</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PROJETOS
              </a>
              <div class="dropdown-menu dropdown-backgroud" aria-labelledby="navbarDropdown">
                <a class="dropdown-item font-bold" href="#">SUBMISSÃO DE PROJETOS</a>
                <a class="dropdown-item font-bold" href="#">EDITAIS</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  COMO AJUDAR
                </a>
                <div class="dropdown-menu dropdown-backgroud" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item font-bold" href="#">FINANCIAMENTO COLETIVO</a>
                  <a class="dropdown-item font-bold" href="#">LEIS DE INCETIVOS</a>
                  <a class="dropdown-item font-bold" href="#">LOJA VIRTUAL</a>
                  <a class="dropdown-item font-bold" href="#">DEPÓSITO EM CONTA</a>
                  <a class="dropdown-item font-bold" href="#como-doar">DOAÇÃO ONLINE</a>
                  <a class="dropdown-item font-bold" href="#">DOAÇÃO MENSAL</a>
                  <a class="dropdown-item font-bold" href="#">EMPRESAS PARCEIRAS</a>
              </li>
      <li class="nav-item">
        <a class="nav-link" href="#partners">PARCEIROS</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            JUNTE-SE A NÓS
          </a>
          <div class="dropdown-menu dropdown-backgroud" aria-labelledby="navbarDropdown">
            <a class="dropdown-item font-bold" href="#">VOLUNTARIADO</a>
            <a class="dropdown-item font-bold" href="#">ESTÁGIO</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              NOTICIAS
            </a>
            <div class="dropdown-menu dropdown-backgroud" aria-labelledby="navbarDropdown">
              <a class="dropdown-item font-bold" href="#">EVENTOS DO IACC</a>
              <a class="dropdown-item font-bold" href="#">ARTIGOS</a>
              <a class="dropdown-item font-bold" href="#">MATÉRIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacts">GALERIA</a>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacts">CONTATOS</a>
      </li>
      <li class="nav-item button-store-yellow-bar">
          <a class="nav-link" href="#">
            <i class="fa fa-shopping-cart mr-1" aria-hidden="true"></i>
            LOJINHA
          </a>
        </li>
    </ul>
  </div> -->

</nav>
