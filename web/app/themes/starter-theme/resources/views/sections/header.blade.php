<header class="banner px-10 py-2 flex justify-between items-center">
  <a class="brand" href="{{ home_url('/') }}">
    <img class="h-14" src="{!! get_theme_file_uri('/resources/images/one-stop-inventories-cropped.png') !!}" alt="One Stop Inventories Logo" />
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary flex items-center" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
