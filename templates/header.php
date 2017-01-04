<header class="banner">
  <div class="container-fluid">

    <?php # Custom logo
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    } else {
        echo '<a class="brand" href="' . esc_url(home_url('/')) . '">' . bloginfo('name') . '</a>';
    }
    ?>

    <nav class="nav-primary">
      <?php # Primary navigation
      if (has_nav_menu('main_navigation')) :
        wp_nav_menu(['theme_location' => 'main_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>

  </div>
</header>
