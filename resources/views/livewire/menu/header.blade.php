<div>
    <header id="header" class="header-always-fixed" data-transparent="true" class="dark submenu-light">
        <div class="header-inner">
            <div class="container">
                <div id="logo">
                    <a  href="/">
                        <span><img src="{{ $logo }}" alt="RCCG-ELIMSANCTUARY"></span>
                    </a>
                </div>
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                @foreach ($menu as $item)
                                    @if ($item['hasSubmenu'])
                                        <li class="dropdown">
                                            <a href="#"><i
                                                    class="{{ $item['class'] }}"></i>{{ $item['title'] }}</a>
                                            <ul class="dropdown-menu">
                                                @foreach ($item['submenu'] as $submenu)
                                                    <li><a
                                                            href="{{ $submenu['href'] }}">{{ $submenu['title'] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="{{ $item['href'] }}"><i
                                                    class="{{ $item['class'] }}"></i>{{ $item['title'] }}</a></li>
                                    @endif
                                @endforeach
                                <li class="d-xl-block d-lg-block"><a href="#" target="_blank"
                                        class="btn btn-rounded text-light btn-danger"><i
                                            class="fa fa-donate"></i>Donation</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
