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
          'menu_class'        => 'nav navbar-nav justify-content-between w-100',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
      );
  ?>

</nav>
