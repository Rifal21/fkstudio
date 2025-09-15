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
                    <div class="col-12 col-lg-6 col-md-10 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
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
                            <!-- start features box item -->
                            {{-- <div class="icon-with-text-style-08">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon feature-box-icon-rounded w-50px h-50px rounded-circle bg-very-light-gray me-20px text-center"><i class="fa-solid fa-check fs-16 text-base-color"></i></div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="fs-17 fw-600 text-dark-gray">Increase your conversion rate.</span>
                                        <p>Lorem ipsum is simply dummy printing.</p>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- end features box item -->
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
        <!-- start section -->
        <section class="bg-very-light-gray">
            <div class="container-fluid overlap-section">  
                <div class="row overflow-hidden">
                    <div class="col-12 col-md-12">
                        <div class="outside-box-right-15 outside-box-left-15 sm-outside-box-left-40 sm-outside-box-right-40">
                            <div class="swiper view-cursor magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 2000, "disableOnInteraction": false },  "pagination": { "el": ".swiper-line-pagination", "clickable": true }, "navigation": { "nextEl": ".slider-three-slide-next", "prevEl": ".slider-three-slide-prev" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 6 }, "768": { "slidesPerView": 3 }, "320": { "slidesPerView": 3 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper align-items-center">
                                    <!-- start slider item --> 
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x500" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x390" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x500" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item --> 
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x390" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x500" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x390" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item --> 
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x500" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x390" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x500" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item --> 
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x390" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x500" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item --> 
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="https://via.placeholder.com/500x390" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item --> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
                <!-- start section -->
        <section class="pt-0 bg-very-light-gray">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 counter-style-04" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start counter item -->
                    <div class="col last-paragraph-no-margin md-mb-50px text-center text-md-start">
                        <span class="fs-18 fw-600 d-block mb-5px text-dark-gray">Days of experience.</span>
                        <p class="w-90 lg-w-100 sm-ps-15 sm-pe-15">We have crafted beautiful and engaging web solutions.</p>
                        <div class="separator-line-1px bg-dark-gray w-90 mt-25px mb-25px opacity-2 sm-w-100"></div>
                        <h3 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 ls-minus-2px mb-0" data-text="+" data-to="3053"></h3> 
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col last-paragraph-no-margin md-mb-50px text-center text-md-start">
                        <span class="fs-18 fw-600 d-block mb-5px text-dark-gray">Valuable happy clients.</span>
                        <p class="w-90 lg-w-100 sm-ps-15 sm-pe-15">We have crafted beautiful and engaging web solutions.</p>
                        <div class="separator-line-1px bg-dark-gray w-90 mt-25px mb-25px opacity-2 sm-w-100"></div>
                        <h3 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 ls-minus-2px mb-0" data-text="+" data-to="1750"></h3> 
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col last-paragraph-no-margin sm-mb-50px text-center text-md-start">
                        <span class="fs-18 fw-600 d-block mb-5px text-dark-gray">Presence in countries.</span>
                        <p class="w-90 lg-w-100 sm-ps-15 sm-pe-15">We have crafted beautiful and engaging web solutions.</p>
                        <div class="separator-line-1px bg-dark-gray w-90 mt-25px mb-25px opacity-2 sm-w-100"></div>
                        <h3 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 ls-minus-2px mb-0" data-text="+" data-to="50"></h3> 
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col last-paragraph-no-margin text-center text-md-start">
                        <span class="fs-18 fw-600 d-block mb-5px text-dark-gray">Worldwide projects.</span>
                        <p class="w-90 lg-w-100 sm-ps-15 sm-pe-15">We have crafted beautiful and engaging web solutions.</p>
                        <div class="separator-line-1px bg-dark-gray w-90 mt-25px mb-25px opacity-2 sm-w-100"></div>
                        <h3 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-800 ls-minus-2px mb-0" data-text="+" data-to="856"></h3> 
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
        </section>
        <!-- end section -->
                <!-- start section -->
        <section class="bg-very-light-gray pt-0 background-no-repeat background-position-left-top position-relative" style="background-image: url('images/demo-it-business-about-bg2.jpg')"> 
            <div class="container">
                <div class="row align-items-center justify-content-center mb-7"> 
                    <div class="col-xl-5 col-lg-6 mb-30px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-light-gray-transparent d-inline-flex"><i class="bi bi-box-seam fs-16 me-5px"></i>Creative process</span>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px mb-50px">The creative process behind our projects.</h3>
                        <div class="row row-cols-1">
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600">01</span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div> 
                                        <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Discussion of the idea</span>
                                        <p class="w-90 sm-w-100">Lorem ipsum simply dummy printing typesetting industry's standard.</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600">02</span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div> 
                                        <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Handcrafted solutions</span>
                                        <p class="w-90 sm-w-100">Lorem ipsum simply dummy printing typesetting industry's standard.</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600">03</span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-30px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Completed project</span>
                                        <p class="w-90 sm-w-100">Lorem ipsum simply dummy printing typesetting industry's standard.</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                        </div>  
                    </div> 
                    <div class="col-lg-6 text-center md-mb-20px offset-xl-1"> 
                        <figure class="position-relative mb-0 overflow-hidden" data-shadow-animation="true" data-bottom-top="transform: translateY(70px)" data-top-bottom="transform: translateY(-70px)"> 
                            <img src="https://via.placeholder.com/580x670" class="w-100 border-radius-6px" alt=""> 
                            <figcaption class="position-absolute border-radius-4px text-center right-30px bottom-30px pt-35px pb-35px ps-5px pe-5px bg-white-transparent glass-effect">
                                <span class="fs-80 lh-75 text-dark-gray ls-minus-4px position-relative fw-800 mb-5px d-block alt-font">28<sub class="fs-40 lh-40 text-dark-gray position-relative top-minus-40px">+</sub></span>
                                <span class="d-block mx-auto fs-14 fw-700 lh-20 w-200px text-center text-dark-gray text-uppercase">Years working experience</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center mb-8 sm-mb-0" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start client item -->
                    <div class="col client-box text-center md-mb-40px">
                        <a href="#"><img src="images/logo-walmart-dark-blue.svg" class="h-45px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center md-mb-40px">
                        <a href="#"><img src="images/logo-netflix-dark-blue.svg" class="h-45px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center md-mb-40px">
                        <a href="#"><img src="images/logo-invision-dark-blue.svg" class="h-45px" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center sm-mb-40px">
                        <a href="#"><img src="images/logo-yahoo-dark-blue.svg" class="h-45px" alt=""></a>
                    </div> 
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center">
                        <a href="#"><img src="images/logo-amazon-dark-blue.svg" class="h-45px" alt=""></a>
                    </div> 
                    <!-- end client item -->
                </div>
            </div>
            <div class="shape-image-animation p-0 w-100 bottom-minus-40px xl-bottom-0px d-none d-md-block"> 
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
        </section>
        <!-- end section -->