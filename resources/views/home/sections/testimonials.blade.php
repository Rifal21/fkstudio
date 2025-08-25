<section class="big-section position-relative pb-2">
    <div class="background-position-center-top background-no-repeat position-absolute h-100 w-100 left-0px top-0px"
        style="background-image: url('{{ asset('templates/crafto/images/bg-testimonials.png') }}')"></div>
    <div class="position-relative container">
        <div class="row justify-content-center mb-8"
            data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-xl-4 col-md-5">
                <h2 class="alt-font text-dark-gray mb-30px fw-600 ls-minus-3px">We are trusted by our clients<i
                        class="bi bi-heart-fill d-inline-block ms-10px animation-zoom icon-very-medium text-red align-top"></i>
                </h2>
                <div class="d-flex md-mb-25px">
                    <!-- start slider navigation -->
                    <div
                        class="slider-one-slide-prev-1 text-dark-gray swiper-button-prev slider-navigation-style-04 border-1 border-color-extra-medium-gray border bg-white">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div
                        class="slider-one-slide-next-1 text-dark-gray swiper-button-next slider-navigation-style-04 border-1 border-color-extra-medium-gray border bg-white">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="col-xl-6 col-md-7 offset-xl-2 overflow-hidden">
                <div class="swiper"
                    data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "loop": true, "autoplay": { "delay": 8000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 1 }, "768": { "slidesPerView":1 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <!-- start review item -->
                        <div class="swiper-slide">
                            <h5 class="text-dark-gray mb-15px w-95 xl-w-100 lh-40 ls-minus-1px alt-font">The <span
                                    class="text-decoration-line-bottom-medium fw-700">wonderful</span> services you
                                offer locally are great for our community. People are tired of having to travel out of
                                town for things.</h5>
                            <span class="text-gradient-base-color fw-700 text-uppercase ls-1px">@Herman miller</span>
                        </div>
                        <!-- end review item -->
                        <!-- start review item -->
                        <div class="swiper-slide">
                            <h5 class="text-dark-gray mb-15px w-95 xl-w-100 lh-40 ls-minus-1px alt-font">Absolutely
                                amazing theme and <span class="text-decoration-line-bottom-medium fw-700">awesome</span>
                                design with possibilities. It's so very easy to use and to customize everything.</h5>
                            <span class="text-gradient-base-color fw-700 text-uppercase ls-1px">@Alexander Harad</span>
                        </div>
                        <!-- end review item -->
                        <!-- start review item -->
                        <div class="swiper-slide">
                            <h5 class="text-dark-gray mb-15px w-95 xl-w-100 lh-40 ls-minus-1px alt-font">There are
                                design companies and then there are user <span
                                    class="text-decoration-line-bottom-medium fw-700">experience.</span> Simply the
                                great designs and best theme for fast loading website.</h5>
                            <span class="text-gradient-base-color fw-700 text-uppercase ls-1px">@Jacob Kalling</span>
                        </div>
                        <!-- end review item -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "skewX":[20, 0], "duration": 300, "delay":0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start client item -->
            <div class="col client-box md-mb-35px text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-walmart.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box md-mb-35px text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-logitech.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box md-mb-35px text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-monday.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box sm-mb-35px text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-google.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box text-center">
                <a href="#"><img src="{{ asset('templates/crafto/images/logo-paypal.svg') }}" class="h-35px"
                        alt=""></a>
            </div>
            <!-- end client item -->
        </div>
    </div>
</section>
