        <!-- start section -->
        <section class="bg-very-light-gray">
            <div class="container-fluid overlap-section">  
                <div class="row overflow-hidden">
                    <div class="col-12 col-md-12">
                        <div class="outside-box-right-15 outside-box-left-15 sm-outside-box-left-40 sm-outside-box-right-40">
                            <div class="swiper view-cursor magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 2000, "disableOnInteraction": false },  "pagination": { "el": ".swiper-line-pagination", "clickable": true }, "navigation": { "nextEl": ".slider-three-slide-next", "prevEl": ".slider-three-slide-prev" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 6 }, "768": { "slidesPerView": 3 }, "320": { "slidesPerView": 3 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper align-items-center">
                                    @foreach ($about['slider'] as $index => $slider)
                                    @if($index % 2 != 0) 
                                    <!-- start slider item --> 
                                    <div class="swiper-slide"> 
                                        <img src="{{ isset($slider) ? cockpitImage($slider) : 'https://fakeimg.movexa.id/500x500/eeeeee/cccccc'}}" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    @else
                                    <!-- start slider item -->
                                    <div class="swiper-slide"> 
                                        <img src="{{ isset($slider) ? cockpitImage($slider) : 'https://fakeimg.movexa.id/500x390/eeeeee/cccccc'}}" class="border-radius-6px" alt="">
                                    </div>
                                    <!-- end slider item -->
                                    @endif
                                    @endforeach
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
                <!-- start section -->
        {{-- <section class="pt-0 bg-very-light-gray">
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
        </section> --}}
        <!-- end section -->
                <!-- start section -->
        <section class="bg-very-light-gray pt-0 background-no-repeat background-position-left-top position-relative" style="background-image: url('images/demo-it-business-about-bg2.jpg')"> 
            <div class="container">
                <div class="row align-items-center justify-content-center mb-7"> 
                    <div class="col-xl-5 col-lg-6 mb-30px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-light-gray-transparent d-inline-flex"><i class="bi bi-box-seam fs-16 me-5px"></i>{{ $about['header_owner'] }}</span>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px">{{ $about['title_owner'] }}</h3>
                        <p class="w-90 sm-w-100 mb-50px">{!! $about['owner_desc'] !!}</p>
                        <div class="row row-cols-1">
                            @foreach ($about['owner_experience'] ?? [] as $index => $experience)   
                            @php
                                $text = $about['text_experience'][$index];
                            @endphp                             
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div> 
                                        <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">{{ $experience }}</span>
                                        <p class="w-90 sm-w-100">{!! $text !!}</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            @endforeach
                            <!-- start process step item -->
                            {{-- <div class="col-12 process-step-style-05 position-relative hover-box">
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
                            </div> --}}
                            <!-- end process step item --> 
                            <!-- start process step item -->
                            {{-- <div class="col-12 process-step-style-05 position-relative hover-box">
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
                            </div> --}}
                            <!-- end process step item --> 
                        </div>  
                    </div> 
                    <div class="col-lg-6 text-center md-mb-20px offset-xl-1"> 
                        <figure class="position-relative mb-0 overflow-hidden" data-shadow-animation="true" data-bottom-top="transform: translateY(70px)" data-top-bottom="transform: translateY(-70px)"> 
                            <img src="{{ cockpitImage($about['image_owner']) }}" class="w-100 border-radius-6px" alt=""> 
                            <figcaption class="position-absolute border-radius-4px text-center right-30px bottom-30px pt-35px pb-35px ps-5px pe-5px bg-white-transparent glass-effect">
                                <span class="fs-80 lh-75 text-dark-gray ls-minus-4px position-relative fw-800 mb-5px d-block alt-font">4<sub class="fs-40 lh-40 text-dark-gray position-relative top-minus-40px">+</sub></span>
                                <span class="d-block mx-auto fs-14 fw-700 lh-20 w-200px text-center text-dark-gray text-uppercase">{{ session('locale') == 'id' ? 'Tahun Pengalaman Kerja' : 'Years Working Experience' }}</span>
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
