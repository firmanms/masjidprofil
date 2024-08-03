<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename">{{ $profil->nama_masjid }}</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ url('/') }}" class="active">Home</a></li>
            @if(is_array($menus) || is_object($menus))  <!-- Pastikan $menus adalah array atau objek -->
                @foreach($menus as $nodeId => $node)
                    @if(isset($node['children']) && is_array($node['children']) && count($node['children']) > 0)
                        <li class="dropdown"><a href="#"><span>{{ $node['label'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                @foreach($node['children'] as $childId => $child)
                                    @if (false===strpos($child['link'],'http'))
                                        <li><a href="{{ url("page/{$child['link']}") }}">{{ $child['label'] }}</a></li>
                                    @else
                                        <li><a href="{{ url($child['link']) }}">{{ $child['label'] }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @else
                        @if (false===strpos($node['link'],'http'))
                            <li><a href="{{ url("page/{$node['link']}") }}">{{ $node['label'] }}</a></li>
                        @else
                            <li><a href="{{ url($node['link']) }}">{{ $node['label'] }}</a></li>
                        @endif
                    @endif
                @endforeach
            @else
                <p>No menu data available.</p>
            @endif
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
      <div class="header-social-links">
        <a href="{{ $profil->fb }}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{ $profil->ig }}" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>
