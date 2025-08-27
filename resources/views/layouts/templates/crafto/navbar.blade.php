<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse glass-effect"
        data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="/">
                    <img src="{{ cockpitImage($config['favicon']) }}" data-at2x="{{ cockpitImage($config['favicon']) }}"
                        alt="" class="default-logo" style="height: 60px; width: auto;">
                    <img src="{{ cockpitImage($config['favicon']) }}" data-at2x="{{ cockpitImage($config['favicon']) }}"
                        alt="" class="alt-logo" style="height: 60px; width: auto;">
                    <img src="{{ cockpitImage($config['favicon']) }}" data-at2x="{{ cockpitImage($config['favicon']) }}"
                        alt="" class="mobile-logo" style="height: 60px; width: auto;">
                </a>
            </div>
            <div class="col-auto col-xxl-6 col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        @foreach ($navbar['name'] as $index => $nav)
                            @php
                                $link = $navbar['link'][$index];
                            @endphp
                            @if ($index !== 2)
                                <li class="nav-item"><a href="{{ $link }}"
                                        class="nav-link">{{ $nav }}</a></li>
                            @else
                                <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="{{ $link }}" class="nav-link">{{ $nav }}</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach ($subnavbar['name'] as $index => $subnav)
                                            @php
                                                $detail = $subnavbar['link'][$index];
                                            @endphp
                                            <li><a href="{{ $link }}">{{ $subnav }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="d-none d-sm-flex col-auto text-end">
                <div class="header-icon gap-4">
                    <div class="header-button">
                        <a href="#home-faq" id="getInTouch"
                            class="btn btn-large btn-transparent-white-light btn-rounded text-transform-none border-1">
                            <span>
                                <span class="btn-double-text"
                                data-text="{{ session('locale') == 'id' ? 'Mulai Project' : 'Start a Project' }}">{{ session('locale') == 'id' ? 'Mulai Project' : 'Start a Project' }}</span>
                                <span><i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                    <div class="header-button devider-menu"></div>
                    <div class="header-button multi-lang">
                        <div class="dropdown">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if (session('locale') == 'en')
                                    <img src="https://flagcdn.com/w160/us.png" class="img-fluid w-100" alt=""
                                        class="thumb-xxs rounded-circle">
                                @elseif (session('locale') == 'id')
                                    <img src="https://flagcdn.com/w160/id.png" class="img-fluid w-100" alt=""
                                        class="thumb-xxs rounded-circle">
                                @else
                                    <img src="https://flagcdn.com/w160/us.png" class="img-fluid w-100" alt=""
                                        class="thumb-xxs rounded-circle">
                                @endif
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ route('locale.store', 'en') }}">
                                        <img src="https://flagcdn.com/w40/us.png" width="28" alt=""
                                            class="me-3 border">
                                        <span>English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('locale.store', 'id') }}">
                                        <img src="https://flagcdn.com/w40/id.png" width="28" alt=""
                                            class="me-3 border">
                                        <span>Indonesia</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    <!-- end navigation -->
</header>
