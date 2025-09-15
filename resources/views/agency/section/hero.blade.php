       <!-- start page title -->
        <section class="pt-0 cover-background ipad-top-space-margin sm-pb-0" style="background-image:url('{{ cockpitImage($about['background']) }}');">
            <div class="shape-image-animation p-0 w-100 d-none d-md-block"> 
                <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff"> 
                <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                <animate
                    attributeName="d"
                    dur="5s"
                    values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                    repeatCount="indefinite"
                    />
                </path>
                </svg>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center h-500px sm-h-300px">
                    <div class="col-12 col-lg-8 col-md-10 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="ps-25px pe-25px pt-5px pb-5px mb-15px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex"><i class="bi bi-megaphone text-white icon-small me-10px"></i>{{ $about['header'] }}</span>
                        <h1 class="mb-20px text-white fw-600 ls-minus-1px">{{ $about['title'] }}</h1>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end page title --> 
        <!-- start section -->
        <!-- start section -->
        <section class="position-relative pt-3 sm-pt-50px overlap-height background-no-repeat background-position-left-top" style="background-image: url('{{ asset('/assets/images/demo-it-business-about-bg.jpg') }}')">
            <div class="container overlap-gap-section">
                <div class="row align-items-center mb-6">
                    <div class="col-lg-6 md-mb-50px">
                        <div class="d-flex flex-column box-shadow-quadruple-large border-radius-8px overflow-hidden" data-anime='{ "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,0.7], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }' data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <div class="row row-cols-1 row-cols-sm-2 justify-content-center m-0">
                                @foreach($about['super'] ?? [] as $index => $super)
                                @php
                                    $icon = $about['super_icon'][$index];
                                @endphp
                                <div class="col p-10 lg-p-8 text-center border-bottom border-end xs-border-end-0 border-color-extra-medium-gray bg-white text-center last-paragraph-no-margin">
                                    <i class="{{ $icon }} icon-extra-large text-base-color mb-15px d-block"></i>
                                    <span class="fs-14 fw-700 text-dark-gray text-uppercase lh-20 d-inline-block">{{ $super}}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex"><i class="bi bi-award fs-16 me-5px"></i>{{ $about['hero_header'] }}</span>
                        <h3 class="text-dark-gray fw-700 ls-minus-1px md-w-80 sm-w-100">{{ $about['hero_title'] }}</h3>
                        <div class="mb-40px sm-mb-30px">
                            @foreach ($about['list_header'] ?? [] as $index => $list) 
                            @php
                                $text = $about['list_text'][$index];
                            @endphp                               
                            <!-- start features box item -->
                            <div class="icon-with-text-style-08 mb-25px">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon feature-box-icon-rounded w-50px h-50px rounded-circle bg-very-light-gray me-20px text-center"><i class="fa-solid fa-check fs-16 text-base-color"></i></div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="fs-17 fw-600 text-dark-gray">{{$list}}</span>
                                        <p>{{$text}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                            @endforeach
                        </div>
                        <a href="{{ route('service.index') }}" class="btn btn-extra-large btn-gradient-purple-pink btn-hover-animation-switch btn-rounded btn-box-shadow btn-icon-left me-30px">
                            <span> 
                                <span class="btn-text">{{ session('locale') == 'id' ? 'Lihat Layanan Kami' : 'See our services' }}</span>
                                <span class="btn-icon"><i class="feather icon-feather-briefcase"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-briefcase"></i></span>
                            </span>
                        </a>
                        <a href="mailto:rifalkurniawan289@gmail.com" class="btn btn-link btn-hover-animation-switch btn-extra-large text-dark-gray btn-icon-left align-middle fw-600 p-0 xs-mt-20px xs-mb-20px">
                            <span>
                                <span class="btn-text">{{ session('locale') == 'id' ? 'Hubungi Kami' : 'Contact us' }}</span>
                                <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                            </span> 
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <i class="bi bi-envelope text-dark-gray d-inline-block align-middle icon-extra-medium me-10px md-m-5px"></i>
                        <div class="fs-18 text-dark-gray d-inline-block align-middle fw-500">{{ $about['bottom_text'] ?? '' }} <a href="{{ route('contact.index') }}" class="text-dark-gray text-decoration-line-bottom fw-700">{{ session('locale') == 'id' ? 'Hubungi Kami Sekarang' : 'Contact us now' }}</a></div>
                    </div>
                </div>
            </div> 
        </section>
        <!-- end section -->  